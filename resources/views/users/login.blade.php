<x-layout>
	<x-card class="mx-auto mt-24 max-w-lg rounded p-10">
		<header class="text-center">
			<h2 class="mb-1 text-2xl font-bold uppercase">
				Login
			</h2>
			<p class="mb-4">Login om door alle Leads te scrollen</p>
		</header>

		<form method="POST" action="/users/authenticate">
			@csrf
			<div class="mb-6">
				<label for="email" class="mb-2 inline-block text-lg">Email</label>
				<input type="email" class="w-full rounded border border-gray-200 p-2" name="email" value="{{ old('email') }}" />
				@error('email')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="password" class="mb-2 inline-block text-lg">
					Wachtwoord
				</label>
				<input type="password" class="w-full rounded border border-gray-200 p-2" name="password"
					value="{{ old('password') }}" />
				@error('password')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button type="submit" class="bg-red-500 rounded py-2 px-4 text-white hover:bg-black">
					Login
				</button>
			</div>

			<div class="mt-8">
				<p>
					Heb je nog geen account?
					<a href="/register" class="text-red-500 hover:text-black">Registreer</a>
				</p>
			</div>
		</form>
	</x-card>
</x-layout>
