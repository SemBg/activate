<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Styling -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])

	<style>
		body {
			font-family: 'Nunito', sans-serif;
		}
	</style>
</head>

<body>
  <main>
    {{$slot}}
  </main>
</body>

</html>
