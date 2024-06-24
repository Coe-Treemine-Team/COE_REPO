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
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Existing styles from the homepage */
    </style>
</head>
<body class="bg-gray-100 h-screen bg-blue-50">
@include('components.navbar')

<div class="container mx-auto px-4 py-8">
    <!-- Search Button -->
    <div class="flex justify-between items-center mb-4">
        <form class="flex items-center">
            <input type="text"  name="keyword" id="keyword" onkeyup="myFunction()" placeholder="Search..." class="form-input mr-4 rounded-l-md">
            <button  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-r-md">Search</button>
        </form>
        <button class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md">View Cart</button>
    </div>

    <!-- Product Listing -->
    <div class="grid grid-cols-5 sm:grid-cols-5 md:grid-cols-4 lg:grid-cols-5 gap-4">
    @foreach ($products as $data)
        <div class="group block bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
            <img src="{{asset('storage/photos_products/' .$data->images)}}" alt="Product Image" class="w-full group-hover:opacity-75 transition duration-300">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">{{$data->product_name}}</h2>
                <p class="text-gray-700 mb-2">{{$data->description}}</p>
                <p class="text-gray-500 text-sm">Rp.{{$data->price}}</p>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $data->id }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md mt-4">Add to Cart</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
        <div class="my-8 inline-flex -space-x-px text-base h-10 ">
          {{$products->withQueryString()->links()}}
        </div>
</div>
@include('components.footer')
</body>
</html>
