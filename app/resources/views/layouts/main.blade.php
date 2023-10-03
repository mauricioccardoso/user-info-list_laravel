<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Avantsoft</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header  class="bg-white ps-4" style="height: 4rem">
        <img src="{{ asset("img/avantsoft-logo.png") }}" alt="Avantsoft logo" class="h-100">
    </header>

    <main  class="container p-3">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
