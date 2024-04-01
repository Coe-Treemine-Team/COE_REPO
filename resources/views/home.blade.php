<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Additional styles */
        .banner-placeholder, .selling-points, .services-offered, .products {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            text-align: center;
        }
        .banner-placeholder {
            height: 963px;
            background-color: #D9D9D9;
        }
        .selling-points {
            height: 150px;
            background-color: #EFEFEF;
        }
        .services-offered {
            height: 524px;
            background-color: #F5F5F5;
        }
        .products {
            height: 524px;
            background-color: #FBFBFB;
        }
        .service-card {
            margin: 20px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <!-- Banner Placeholder -->
    <div class="banner-placeholder">
        <p>Banner Placeholder</p>
    </div>

    <!-- Selling Points -->
    <div class="selling-points">
        <p>Selling Points Placeholder</p>
    </div>

    <!-- Services Offered -->
    <div class="services-offered">
        <!-- PCB Order Customization Section -->
<div class="service-card bg-white shadow-md rounded-lg p-6 mx-auto my-8">
    <h3 class="text-xl font-semibold text-center mb-4">PCB Order Customization</h3>
    <div class="tabs mb-4 flex justify-center">
        <button class="tablinks active px-4 py-2 bg-blue-500 text-black rounded-lg mr-2" onclick="openTab(event, 'Prototype')">Prototype</button>
        <button class="tablinks px-4 py-2 bg-blue-500 text-black rounded-lg" onclick="openTab(event, 'PCBAssembly')">PCB Assembly</button>
    </div>

    <!-- Prototype Form -->
    <div id="Prototype" class="tabcontent" style="display: block;">
        <form class="space-y-4">
            <div>
                <label for="dimensions" class="block text-sm font-medium text-gray-700">Dimensions (length x width):</label>
                <input type="text" id="dimensions" name="dimensions" placeholder="100mm x 100mm" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
                <select id="quantity" name="quantity" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @for ($i = 5; $i <= 100; $i += 5)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label for="layers" class="block text-sm font-medium text-gray-700">Layers:</label>
                <select id="layers" name="layers" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @for ($i = 2; $i <= 14; $i += 2)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Submit
            </button>
        </form>
    </div>

    <!-- PCB Assembly Form -->
<div id="PCBAssembly" class="tabcontent" style="display: none;">
    <form class="space-y-4">
        <div>
            <label for="assembly-quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
            <input type="number" id="assembly-quantity" name="assembly_quantity" placeholder="Enter quantity" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>

        <div>
            <label for="unique-parts" class="block text-sm font-medium text-gray-700">Number of Unique Parts:</label>
            <input type="number" id="unique-parts" name="unique_parts" placeholder="Enter number of unique parts" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>

        <div>
            <label for="smt-pads" class="block text-sm font-medium text-gray-700">SMT Pads:</label>
            <input type="number" id="smt-pads" name="smt_pads" placeholder="Enter number of SMT pads" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>

        <div>
            <label for="thru-holes" class="block text-sm font-medium text-gray-700">Thru-Holes:</label>
            <input type="number" id="thru-holes" name="thru_holes" placeholder="Enter number of thru-holes" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>

        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Submit
        </button>
    </form>
</div>

</div>

    <!-- Products Section Wrapper to Control Width -->
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"> <!-- Adjust the max width as needed -->
    <div class="bg-gray-200 py-8">
        <h2 class="text-center text-2xl font-bold mb-6">Our Products</h2>
        <!-- Scrollable Container for Products -->
        <div class="flex overflow-x-auto scroll-smooth py-4 gap-4" style="scrollbar-width: none;" id="scrollable-products">
            <!-- Products -->
            @for ($i = 1; $i <= 10; $i++)
            <div class="flex-none shrink-0 w-60 bg-white rounded-lg shadow-md hover:shadow-xl transition-transform duration-300 ease-in-out" style="min-width: 240px;">
                <img src="path_to_image/product{{$i}}.jpg" alt="Product {{$i}}" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Product {{$i}}</h3>
                    <p class="text-sm text-gray-600">Description of product {{$i}}...</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

</div>

    </div>

    @include('components.footer')
    <script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</body>
</html>
