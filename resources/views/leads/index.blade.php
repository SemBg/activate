<x-layout>
  @unless(count($leads) == 0)
    @foreach($leads AS $lead)
      <div class="bg-gray-300 w-64 h-28 m-4">
        <p class="text-red-500">ID : {{$lead->id}}</p>
        <p class="text-green-500">Voornaam : {{$lead->voornaam}}</p>
        <p class="text-green-500">Achternaam : {{$lead->achternaam}}</p>
        <a href="/lead/{{$lead->id}}" class="bg-red-500 rounded py-1 px-2 text-white hover:bg-black">
					Details
				</a>
      </div>
    @endforeach
  @else
    <p>No leads available, start creating some new leads!</p>
  @endunless
</x-layout>