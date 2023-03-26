<x-layout>
	<x-card class="mx-auto mt-24 max-w-lg rounded p-10">
		<header class="text-center">
			<h2 class="mb-1 text-2xl font-bold uppercase">
				Register
			</h2>
			<p class="mb-4">Maak een account aan om door Leads heen te kijken</p>
		</header>

		<form method="POST" action="/create-user">
			@csrf
			<div class="mb-6">
				<label for="name" class="mb-2 inline-block text-lg">
					Naam
				</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="name" value="{{old('name')}}"/>

				@error('name')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="email" class="mb-2 inline-block text-lg">Email</label>
				<input type="email" class="w-full rounded border border-gray-200 p-2" name="email" value="{{old('email')}}"/>
				@error('email')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="password" class="mb-2 inline-block text-lg">
					Wachtwoord
				</label>
				<input type="password" class="w-full rounded border border-gray-200 p-2" name="password" value="{{old('password')}}"/>
				@error('password')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="password_confirmation" class="mb-2 inline-block text-lg">
					Bevestig Wachtwoord
				</label>
				<input type="password" class="w-full rounded border border-gray-200 p-2" name="password_confirmation" value="{{old('password_confirmation')}}"/>
				@error('password_confirmation')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button type="submit" class="bg-red-500 rounded py-2 px-4 text-white hover:bg-black">
					Sign Up
				</button>
			</div>

			<div class="mt-8">
				<p>
					Heb je al een account?
					<a href="/login" class="text-red-500 hover:text-black">Login</a>
				</p>
			</div>
		</form>
	</x-card>
</x-layout>
