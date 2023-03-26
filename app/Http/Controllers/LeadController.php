<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
  public function store(Request $request) {
    //* Return early als de algemene voorwaardes niet zijn geaccepteerd.
    if($request->toestemming != true) {
      return 'Algemene voorwaardes moeten geaccepteerd worden!';
    }

    //* Valideer of alle velden correct zijn ingevuld
    $formFields = $request->validate([
      'voornaam' => 'required',
      'achternaam' => 'required',
      'telefoonnummer' => ['required', 'numeric', 'min:10'],
      'email' => ['required', 'email'],
      'omschrijving' => 'required',
    ]);

    //* Check of de request een bijlage heeft
    if ($request->hasFile('bijlage')) {
      //* Sla bijlage op in /storage/app/public/bijlages, sla path op in db
      $formFields['bijlage'] = $request->file('bijlage')->store('bijlages', 'public');
    }

    Lead::create($formFields);
    return true;
  }
}
