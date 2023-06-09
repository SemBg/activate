<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  //* Show register/create form
  public function create()
  {
    return view('users.register');
  }

  //* Create new user
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'name' => ['required', 'min:3'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => ['required', 'confirmed', 'min:6']
    ]);

    //* Hash password
    $formFields['password'] = bcrypt($formFields['password']);

    //* Create user
    $user = User::create($formFields);

    //* Login user that's just created
    auth()->login($user);

    return redirect('/');
  }

  //* logout user
  public function logout(Request $request)
  {
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }

  //* Show login form
  public function login()
  {
    return view('users.login');
  }

  //* Authenticate user
  public function authenticate(Request $request)
  {
    $formFields = $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);

    if (auth()->attempt($formFields)) {
      $request->session()->regenerate();

      return redirect('/');
    }

    return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
  }

  //* Get API token
  public function getapitoken(Request $request)
  {
    $formFields = $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);

    if(auth()->attempt($formFields)) {
      $user = User::where('email', $request->email)->first();
      return ['API Token' => $user->createToken("API TOKEN")->plainTextToken];
    }
  }
}
