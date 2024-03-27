<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My New Page - Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Assuming you're using Laravel Mix for Tailwind -->
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <h1 class="text-3xl font-bold">
            Welcome to My New Page!
        </h1>
    </div>
</body>
</html>
