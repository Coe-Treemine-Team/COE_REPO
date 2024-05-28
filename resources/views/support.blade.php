<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Existing styles from the homepage */
    </style>
</head>
<body class="bg-gray-100 h-screen bg-blue-50">
    @include('components.navbar')


    

        <!-- Accessibility Features -->
        <!-- Implement accessibility features across the page -->

        @include('components.footer')

    <script>
        
    </script>
</body>
</html>
