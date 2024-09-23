<!DOCTYPE html>
<html lang="{{ str_replace ('_','-', app ()->getlocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>{{ config('app.name','laravel')}}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    @vite (['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="mim-h-screen bg-gray-100">
        @include('components.landing-header')

        <main>
            {{$slot}}
        </main>
    </div>
    @include('sweetalert::alert')
</body>
</html>
