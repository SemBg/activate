<x-layout>
	<x-card class="mx-auto mt-24 max-w-lg bg-gray-50 p-10">
		<header class="text-center">
			<h2 class="mb-2 text-2xl font-bold uppercase">
				Maak een lead aan
			</h2>
		</header>

		<form method="POST" action="/store-lead" enctype="multipart/form-data">
			@csrf
			<div class="mb-6">
				<label for="voornaam" class="mb-2 inline-block text-lg">Voornaam</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="compvoornaamany"
        placeholder="John" value="{{ old('voornaam') }}" />

				@error('voornaam')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="achternaam" class="mb-2 inline-block text-lg">Achternaam</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="achternaam"
					placeholder="Doe" value="{{ old('achternaam') }}" />

				@error('achternaam')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="telefoonnummer" class="mb-2 inline-block text-lg">Telefoonnummer</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="telefoonnummer"
					placeholder="0612345678" value="{{ old('telefoonnummer') }}" />

				@error('telefoonnummer')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="email" class="mb-2 inline-block text-lg">Email</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="email"
        placeholder="johndoe@gmail.com" value="{{ old('email') }}" />

				@error('email')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="bijlage" class="mb-2 inline-block text-lg">
					Bijlage
				</label>
				<input type="file" class="w-full rounded border border-gray-200 p-2" name="bijlage" />
				@error('bijlage')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="omschrijving" class="mb-2 inline-block text-lg">
					Omschrijving
				</label>
				<textarea class="w-full rounded border border-gray-200 p-2" name="omschrijving" rows="10"
				placeholder="Dit is een mooie lead!">{{ old('omschrijving') }}</textarea>

				@error('omschrijving')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button class="bg-red-500 rounded py-2 px-4 text-white hover:bg-black">
					Sla Lead op
				</button>

				<a href="/" class="ml-4 text-black"> Back </a>
			</div>

      <div class="mb-6">
				<label for="toestemming" class="mb-2 inline-block text-lg">Algemene voorwaarden</label>
				<input type="checkbox" class="p-2 rounded border border-gray-200" name="toestemming"
        value="{{ old('toestemming') }}" />

				@error('toestemming')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>
		</form>
	</x-card>
</x-layout>
