<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ env('APP_NAME') }} | @yield('title')
    </title>

    {{-- # CDNS --}}
    @yield('cdns')

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        @yield('main')
    </main>
</body>

</html>
