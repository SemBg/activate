<x-layout>
  <div class="flex h-screen">
    <div class="bg-gray-300 m-auto">
      <p class="font-bold">ID : {{$lead->id}}</p>
      <p class="font-bold">Voornaam : {{$lead->voornaam}}</p>
      <p class="font-bold">Achternaam : {{$lead->achternaam}}</p>
      <p class="font-bold">Telefoonnummer : {{$lead->telefoonnummer}}</p>
      <p class="font-bold">Email : {{$lead->email}}</p>
      <p class="font-bold">Omschrijving : {{$lead->omschrijving}}</p>
    </div>
  </div>
</x-layout>