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
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Creates four equal columns */
    gap: 20px; /* Adds space between the grid items */
    padding: 10px;
    background-color: #FBFBFB;
    margin: auto; /* Centers the grid within the section */
    max-width: 1200px; /* Optional: restrict the maximum width of the grid */
}

.product-card {
    background-color: #FFFFFF;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center; /* Align items to center within each card */
}



        .product-image {
            width: 100%;
            height: auto;
            aspect-ratio: 1;
        }
        .product-info {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        @media (max-width: 768px) {
            .products {
                flex-direction: column;
                align-items: center;
            }
            .product-card {
                max-width: 100%; /* Full width on smaller screens */
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

    <div class="services-offered mx-auto my-8">
        <div class="service-card bg-white shadow-md rounded-lg p-6 mx-auto">
            <h3 class="text-xl font-semibold text-center mb-4">PCB Order Customization</h3>
            <div class="tabs mb-4 flex justify-center">
                <button class="tablinks active px-4 py-2 bg-blue-500 text-black rounded-lg mr-2" onclick="openTab(event, 'Prototype')">Prototype</button>
                <button class="tablinks px-4 py-2 bg-blue-500 text-black rounded-lg" onclick="openTab(event, 'PCBAssembly')">PCB Assembly</button>
            </div>

            <div id="PCBAssembly" class="tabcontent" style="display: none;">
                <form class="space-y-4">
                    <div>
                        <label for="assembly-quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
                        <input type="number" id="assembly-quantity" name="assembly_quantity" aria-label="Quantity" placeholder="Enter quantity" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md placeholder-gray-400 text-gray-700" required>
                    </div>

                    <!-- Repeat similar changes for other input fields for consistency -->

                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:py-3 sm:px-6 md:py-4 md:px-8">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

<!-- Products Section -->
<div class="products mx-auto my-8">
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
        <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 1" class="product-image">
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
    <!-- Product Card 3 -->
    <div class="product-card">
        <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 1" class="product-image">
        <div class="product-info">
            <h1 class="text-xl font-semibold">Product Name 3</h1>
            <div class="price-stock">
                <span class="text-xl font-semibold">$130.00</span>
                <span class="text-sm">In stock</span>
            </div>
            <div class="sizes">
                <input type="radio" name="size3" value="xs">XS
                <input type="radio" name="size3" value="s">S
                <input type="radio" name="size3" value="m">M
                <input type="radio" name="size3" value="l">L
                <input type="radio" name="size3" value="xl">XL
            </div>
            <button type="button" class="buy-now">Buy now</button>
        </div>
    </div>
    <!-- Product Card 4 -->
    <div class="product-card">
        <img src="https://cdn.pixabay.com/photo/2013/07/13/14/07/apparel-162180_960_720.png" alt="Product Image 1" class="product-image">
        <div class="product-info">
            <h1 class="text-xl font-semibold">Product Name 4</h1>
            <div class="price-stock">
                <span class="text-xl font-semibold">$140.00</span>
                <span class="text-sm">In stock</span>
            </div>
            <div class="sizes">
                <input type="radio" name="size4" value="xs">XS
                <input type="radio" name="size4" value="s">S
                <input type="radio" name="size4" value="m">M
                <input type="radio" name="size4" value="l">L
                <input type="radio" name="size4" value="xl">XL
            </div>
            <button type="button" class="buy-now">Buy now</button>
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