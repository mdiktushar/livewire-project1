<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <title>{{ $title ?? 'Page Title' }}</title>
    @fluxAppearance

    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <div>
            <h1>My Book Reviews</h1>
            <a wire:navigate @class(['active' => request()->is('/')]) href="/">
                Book List
            </a>
            <a wire:navigate @class(['active' => request()->is('/create')]) href="/create">
                Add a Book
            </a>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>

    @fluxScripts
</body>

</html>
