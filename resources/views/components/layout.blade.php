<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quotes</title>
    @vite('resources/js/app.js')
</head>

<body>
    <x-nav-bar />
    <main style="margin-top: 3.5rem; height: calc(100vh - 3.5rem)">{{ $slot }}</main>
</body>

</html>