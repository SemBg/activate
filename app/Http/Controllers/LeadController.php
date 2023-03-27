<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{

  public function create() {
    //* Return leads create view
    return view('leads.create');
  }

  public function store(Request $request) {
    //* Valideer of alle velden correct zijn ingevuld
    $formFields = $request->validate([
      'voornaam' => 'required',
      'achternaam' => 'required',
      'telefoonnummer' => ['required', 'numeric', 'min:10'],
      'email' => ['required', 'email'],
      'omschrijving' => 'required',
      'toestemming' => 'required'
    ]);

    //* Check of de request een bijlage heeft
    if ($request->hasFile('bijlage')) {
      //* Sla bijlage op in /storage/app/public/bijlages, sla path op in db
      $formFields['bijlage'] = $request->file('bijlage')->store('bijlages', 'public');
    }

    Lead::create($formFields);
    return redirect('/');
  }

  public function storeapi(Request $request) {
    //* Valideer of alle velden correct zijn ingevuld
    $formFields = $request->validate([
      'voornaam' => 'required',
      'achternaam' => 'required',
      'telefoonnummer' => ['required', 'numeric', 'min:10'],
      'email' => ['required', 'email'],
      'omschrijving' => 'required',
      'toestemming' => 'required'
    ]);

    //* Check of de request een bijlage heeft
    if ($request->hasFile('bijlage')) {
      //* Sla bijlage op in /storage/app/public/bijlages, sla path op in db
      $formFields['bijlage'] = $request->file('bijlage')->store('bijlages', 'public');
    }

    Lead::create($formFields);
    return 'Lead succesfully created!';
  }

  public function index() {
    return view('leads.index', [
      'leads' => Lead::all()
    ]);
  }

  public function show(Lead $lead) {
    return view('leads.show', [
      'lead' => $lead
    ]);
  }

  public function getlead(Lead $lead) {
    return $lead;
  }
}
