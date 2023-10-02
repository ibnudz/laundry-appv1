<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-18b48142.css') }}">
    @vite('resources/js/app.js')
</head>

<body class="bg-light bg-gradient">
    @yield('body')

    @stack('script')
    <script src="{{ asset('build/assets/app-4ed993c7.js') }}"></script>
    <script src="{{ asset('build/assets/app-51dca533.js') }}"></script>
</body>

</html>
