<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How To Shop - COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Existing styles from the homepage */
    </style>
</head>
<body class="bg-gray-100 h-screen bg-blue-50">
@include('components.navbar')
    <!-- Your content will go here -->
    <div class="container mx-auto py-8">
    <h1 class="text-3xl mb-6">How to Shop</h1>
    <div class="max-w-3xl mx-auto">
        <!-- Step 1 -->
        <div class="flex items-center mb-8">
            <div class="rounded-full bg-blue-500 text-white w-12 h-12 flex items-center justify-center mr-4">
                1
            </div>
            <div>
                <h2 class="text-lg font-bold">Browse Products</h2>
                <p class="text-gray-700">Explore our wide range of products and find what you need.</p>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="flex items-center mb-8">
            <div class="rounded-full bg-blue-500 text-white w-12 h-12 flex items-center justify-center mr-4">
                2
            </div>
            <div>
                <h2 class="text-lg font-bold">Add to Cart</h2>
                <p class="text-gray-700">Select the items you want to purchase and add them to your cart.</p>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex items-center mb-8">
            <div class="rounded-full bg-blue-500 text-white w-12 h-12 flex items-center justify-center mr-4">
                3
            </div>
            <div>
                <h2 class="text-lg font-bold">Checkout</h2>
                <p class="text-gray-700">Proceed to checkout and complete your purchase.</p>
            </div>
        </div>
    </div>
    @include('components.footer')
</div>

</body>
</html>