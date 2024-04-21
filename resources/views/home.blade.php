<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
            height: 1700px;
            background-color: #F5F5F5;
        }
/* General container styling */
.products {
    max-width: 100%;
    overflow: hidden;
}

/* Horizontal scrolling container */
.product-scroll-container {
    display: flex;
    flex-direction: row;
    overflow-x: auto;
    white-space: nowrap;
    padding: 20px 0;
    gap: 20px;
}

/* Individual product card styling */
.product-card {
    flex: 0 0 auto;
    width: 300px;
    background: #FFF; /* Optional: for better visibility */
    border: 1px solid #ddd; /* Optional: adds border for better visibility */
    box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Optional: adds shadow for better visibility */
}

/* Product image styling */
.product-image {
    width: 100%;
    height: auto;
}

/* Product info section within card */
.product-info {
    padding: 16px;
}

/* Styling for the 'Buy now' button */
.buy-now {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
    .product-card {
        width: 250px;
    }
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

<!-- Products Section -->
<div class="products mx-auto my-8">
    <div class="product-scroll-container">
        <!-- Product Card 1 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 1" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 1</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$110.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size1" value="xs">XS
                    <input type="radio" name="size1" value="s">S
                    <input type="radio" name="size1" value="m">M
                    <input type="radio" name="size1" value="l">L
                    <input type="radio" name="size1" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 2 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 2</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$120.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size2" value="xs">XS
                    <input type="radio" name="size2" value="s">S
                    <input type="radio" name="size2" value="m">M
                    <input type="radio" name="size2" value="l">L
                    <input type="radio" name="size2" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Additional Product Cards similarly -->
        <!-- Product Card 3 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 2</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$120.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size2" value="xs">XS
                    <input type="radio" name="size2" value="s">S
                    <input type="radio" name="size2" value="m">M
                    <input type="radio" name="size2" value="l">L
                    <input type="radio" name="size2" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 4 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 2</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$120.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size2" value="xs">XS
                    <input type="radio" name="size2" value="s">S
                    <input type="radio" name="size2" value="m">M
                    <input type="radio" name="size2" value="l">L
                    <input type="radio" name="size2" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 5 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 2</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$120.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size2" value="xs">XS
                    <input type="radio" name="size2" value="s">S
                    <input type="radio" name="size2" value="m">M
                    <input type="radio" name="size2" value="l">L
                    <input type="radio" name="size2" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 7 -->
        <div class="product-card">
            <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Product Name 2</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$120.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <div class="sizes">
                    <input type="radio" name="size2" value="xs">XS
                    <input type="radio" name="size2" value="s">S
                    <input type="radio" name="size2" value="m">M
                    <input type="radio" name="size2" value="l">L
                    <input type="radio" name="size2" value="xl">XL
                </div>
                <button type="button" class="buy-now">Buy now</button>
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