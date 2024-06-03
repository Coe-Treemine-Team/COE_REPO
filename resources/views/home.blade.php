<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>COE TREEMINE</title>
    <link rel="icon" type="image/png" href="favicon.png" >
    <style>
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
        display: flex;  /* Center the image vertically and horizontally */
        align-items: center;
        justify-content: center;
    }
    .banner-placeholder img {
        width: 100%;   /* Full width of the container */
        height: 100%;  /* Full height of the container */
        object-fit: cover;  /* Cover the container without distorting */
    }
    .selling-points {
        height: 150px;
        background-color: #EFEFEF;
    }
    .services-offered {
        height: 1700px;
        background-color: #F5F5F5;
    }
        .selling-points {
            height: 150px;
            background-color: #EFEFEF;
        }
        .services-offered {
            height: 1700px;
            background-color: #F5F5F5;
        }
        .products {
            max-width: 100%;
            overflow: hidden;
        }
        .product-scroll-container {
            display: flex;
            flex-direction: row;
            overflow-x: auto;
            white-space: nowrap;
            padding: 20px 0;
            gap: 20px;
        }
        .product-card {
            flex: 0 0 auto;
            width: 300px;
            background: #FFF;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-image {
            width: 100%;
            height: auto;
        }
        .product-info {
            padding: 16px;
        }
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
        <!-- Replace the paragraph tag with an image tag below -->
        <img src="https://via.placeholder.com/960x600" alt="Banner Image">
    </div>
    <!-- Further content goes here -->


    <!-- Selling Points -->
    <div class="selling-points">
        
    <div class="2xl:container 2xl:mx-auto">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-24 md:gap-10 gap-12 lg:px-20 md:py-12 md:px-6 py-9 px-4">
                <!-- Free Shipping Grid Card -->
                <div class="flex space-x-4">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg1.svg" alt="Free Shipping">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg1dark.svg" alt="Free Shipping">
                    <div>
                        <p class="text-xl dark:text-white leading-5 font-semibold text-gray-800">Free Shipping</p>
                        <p class="text-base leading-6 dark:text-gray-400 font-normal text-gray-600 mt-3">Free shipping on orders above $100</p>
                    </div>
                </div>
    
                <!-- Support Grid Card -->
    
                <div class="flex space-x-4">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg2.svg" alt="Support 24/7">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg2dark.svg" alt="Support 24/7">
                    <div>
                        <p class="text-xl dark:text-white leading-5 font-semibold text-gray-800">Support 24/7</p>
                        <p class="text-base leading-6 dark:text-gray-400 font-normal text-gray-600 mt-3">Contact us 24 hours a day at care@supprt.com</p>
                    </div>
                </div>
    
                <!-- MonyBack Guarantee card -->
    
                <div class="flex space-x-4">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg3.svg" alt="Money Back Guarantee">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-4-svg3dark.svg" alt="Money Back Guarantee">
                    <div>
                        <p class="text-xl dark:text-white leading-5 font-semibold text-gray-800">Money Back Guarantee</p>
                        <p class="text-base leading-6 dark:text-gray-400 font-normal text-gray-600 mt-3">You can return the product within 30 days.</p>
                    </div>
                </div>
            </div>
        </div>
    
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
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 1" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">$110.00</span>
                    <span class="text-sm">In stock</span>
                </div>
                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 2 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">IDR 999.99</span>
                    <span class="text-sm">In stock</span>
                </div>

                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Additional Product Cards similarly -->
        <!-- Product Card 3 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">IDR 999.99</span>
                    <span class="text-sm">In stock</span>
                </div>

                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 4 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">IDR 999.99</span>
                    <span class="text-sm">In stock</span>
                </div>

                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 5 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">IDR 999.99</span>
                    <span class="text-sm">In stock</span>
                </div>

                <button type="button" class="buy-now">Buy now</button>
            </div>
        </div>
        <!-- Product Card 7 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/960x720.png?text=Your+Text+Here" alt="Product Image 2" class="product-image">
            <div class="product-info">
                <h1 class="text-xl font-semibold">Lorep Ipsum</h1>
                <div class="price-stock">
                    <span class="text-xl font-semibold">IDR 999.99</span>
                    <span class="text-sm">In stock</span>
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