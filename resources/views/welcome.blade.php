<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar') <!-- If you have a navbar partial -->
    <h1>Hello World</h1>
</body>
</html>
