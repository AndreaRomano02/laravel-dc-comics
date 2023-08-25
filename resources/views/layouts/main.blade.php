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
    <header>
        <nav class="px-5 navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <a href="{{ route('home') }}" class="navbar-brand">Homepage</a>
            <a href="{{ route('comics.index') }}" class="navbar-brand">Comics</a>
        </nav>
    </header>
    <main class="container py-5">
        @yield('main')
    </main>
</body>

</html>
