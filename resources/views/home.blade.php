<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>COE TREEMINE</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        .banner-placeholder, .selling-points, .services-offered {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            text-align: center;
        }
        .banner-placeholder {
            height: 600px; /* Adjust this value to change the height */
            background-color: #D9D9D9;
            margin-bottom: 0;
        }
        .banner-placeholder iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .selling-points {
            height: 150px;
            background-color: #EFEFEF;
            /* Remove margin to eliminate space between banner and selling points */
        }
        .services-offered {
            background-color: #F5F5F5;
            padding: 32px;
            margin: 32px 0;
        }
        .product-scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 24px;
            padding: 16px;
            scroll-snap-type: x mandatory;
        }
        .product-card {
            border-radius: 8px;
            padding: 16px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            scroll-snap-align: start;
            flex: 0 0 auto;
            width: 200px;
            margin: 8px;
        }
        .product-card img {
            border-radius: 8px;
            max-width: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <!-- Banner Placeholder -->
    <div class="banner-placeholder">
        <iframe src="https://my.spline.design/interactiveaistartupheropage-ca9618519ff1573c140f232d4b8f67f4/" frameborder="0"></iframe>
    </div>

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

                <!-- Money Back Guarantee Card -->
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
    <div class="service-card bg-white shadow-md rounded-md p-6 mx-auto my-8">
        <h3 class="text-xl font-semibold text-center mb-4">PCB Order Customization</h3>
        <div class="tabs mb-4 flex justify-center">
            <button class="tablinks active px-4 py-2 bg-blue-500 text-black rounded-md mr-2" onclick="openTab(event, 'Prototype')">Prototype</button>
            <button class="tablinks px-4 py-2 bg-blue-500 text-black rounded-md" onclick="openTab(event, 'PCBAssembly')">PCB Assembly</button>
        </div>

        <!-- Prototype Form -->
        <div id="Prototype" class="tabcontent rounded-md" style="display: block;">
            <form class="space-y-4" action="{{ route('detailed.order') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-md bg-gray-100 p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="dimensions" class="block text-sm font-medium text-gray-700">PCB Dimensions:</label>
                                <select id="dimensions" name="dimensions" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                </select>
                                <small class="text-gray-500">Select the dimensions of the PCB in inches.</small>
                            </div>

                            <div>
                                <label for="base_material" class="block text-sm font-medium text-gray-700">PCB Base Material:</label>
                                <select id="base_material" name="base_material" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="FR-4">FR-4 (Standard)</option>
                                    <option value="Aluminum">Aluminum</option>
                                    <option value="Polyimide">Polyimide</option>
                                    <option value="Rogers">Rogers</option>
                                </select>
                                <small class="text-gray-500">Choose the base material for the PCB.</small>
                            </div>

                            <div>
                                <label for="layer_count" class="block text-sm font-medium text-gray-700">Layer Count:</label>
                                <select id="layer_count" name="layer_count" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                </select>
                                <small class="text-gray-500">Select the number of layers for the PCB.</small>
                            </div>

                            <div>
                                <label for="finish_type" class="block text-sm font-medium text-gray-700">Finish Type:</label>
                                <select id="finish_type" name="finish_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="HASL">HASL</option>
                                    <option value="ENIG">ENIG</option>
                                    <option value="Immersion Silver">Immersion Silver</option>
                                    <option value="OSP">OSP</option>
                                </select>
                                <small class="text-gray-500">Choose the finish type for the PCB.</small>
                            </div>

                            <div>
                                <label for="solder_mask_color" class="block text-sm font-medium text-gray-700">Solder Mask Color:</label>
                                <select id="solder_mask_color" name="solder_mask_color" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="Green">Green</option>
                                    <option value="Red">Red</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                </select>
                                <small class="text-gray-500">Select the color of the solder mask.</small>
                            </div>
                        </div>
                    </div>

                    <!-- PCB Components Selection Card for Prototype -->
                    <div class="rounded-md bg-gray-100 p-4">
                        <h4 class="text-lg font-semibold text-gray-800">PCB Components Selection (Prototype)</h4>
                        <div class="space-y-4">
                            @foreach (['Resistors', 'Capacitors', 'Diodes', 'Inductors', 'Transistors'] as $component)
                                <div class="flex items-center">
                                    <label class="block text-sm font-medium text-gray-700 mr-2">{{ $component }} (Through-hole / SMD):</label>
                                    <div class="flex items-center">
                                        <input type="radio" id="{{ strtolower($component) }}-include" name="{{ strtolower($component) }}_include" value="include" class="mr-1">
                                        <label for="{{ strtolower($component) }}-include" class="text-sm font-medium text-gray-700 mr-2">Include</label>
                                        <input type="radio" id="{{ strtolower($component) }}-exclude" name="{{ strtolower($component) }}_include" value="exclude" class="mr-1">
                                        <label for="{{ strtolower($component) }}-exclude" class="text-sm font-medium text-gray-700 mr-2">Exclude</label>
                                    </div>
                                    <input type="number" id="{{ strtolower($component) }}-quantity" name="{{ strtolower($component) }}_quantity" placeholder="Quantity" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <small class="text-gray-500 ml-2">Enter quantity if included.</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Submit Order</button>
            </form>
        </div>

        <!-- PCB Assembly Form -->
        <div id="PCBAssembly" class="tabcontent rounded-md" style="display: none;">
            <form class="space-y-4" action="{{ route('detailed.order') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <!-- PCB Assembly Form Fields Similar to Prototype -->
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Submit Order</button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Tabs -->
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



<!-- JavaScript for Tab Functionality -->
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

<!-- Product Section -->
<!-- <div class="product-section text-center">
    <h2 class="text-2xl font-bold mb-4">Featured Products</h2> -->

    <!-- Product Scroll Container -->
    <!-- <div class="product-scroll-container overflow-x-auto flex flex-nowrap gap-4 py-4">
        @for ($i = 0; $i < 10; $i++)
            <div class="product-card bg-white shadow-md rounded-lg p-4 flex-none" style="width: 300px;">
                <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full rounded-lg">
                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-center">Product Title</h3>
                    <p class="text-gray-600">Short description of the product. Price: $100</p>
                    <button class="mt-2 w-full bg-blue-500 text-white py-2 px-4 rounded-md">Add to Cart</button>
                </div>
            </div>
        @endfor
    </div>
</div> -->

<!-- Product Section -->
<div class="product-section text-center">
    <h2 class="text-2xl font-bold mb-4">Featured Products</h2>

    <!-- Product Scroll Container -->
    <div class="product-scroll-container overflow-x-auto flex flex-nowrap gap-4 py-4" style="scrollbar-width: thin; scrollbar-color: rgba(155, 155, 155, 0.5) rgba(255, 255, 255, 0.5);">
        @for ($i = 0; $i < 10; $i++)
            <div class="product-card bg-white shadow-md rounded-lg p-4 flex-none" style="width: 300px;">
                <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full rounded-lg">
                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-center">Product Title</h3>
                    <p class="text-gray-600">Short description of the product. Price: $100</p>
                    <button class="mt-2 w-full bg-blue-500 text-white py-2 px-4 rounded-md">Add to Cart</button>
                </div>
            </div>
        @endfor
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
    <script>

    </script>
</body>
</html>