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
            height: 963px;
            background-color: #D9D9D9;
        }
        .banner-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .selling-points {
            height: 150px;
            background-color: #EFEFEF;
            margin: 32px 0;
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
        <img src="https://via.placeholder.com/960x600" alt="Banner Image">
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
                        <label for="dimensions" class="block text-sm font-medium text-gray-700">PCB Dimensions:</label>
                        <select id="dimensions" name="dimensions" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div>
                        <label for="base_material" class="block text-sm font-medium text-gray-700">PCB Base Material:</label>
                        <select id="base_material" name="base_material" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="FR-4">FR-4 (Standard)</option>
                            <option value="Aluminum">Aluminum</option>
                        </select>
                    </div>

                    <!-- PCB Components Selection Card for Prototype -->
                    <div class="grid-container">
                        <div class="grid-item">
                            <h4 class="text-lg font-semibold text-gray-800">PCB Components Selection (Prototype)</h4>
                            <div class="space-y-4">
                                @foreach (['Resistors', 'Capacitors', 'Diodes'] as $component)
                                    <div class="flex items-center">
                                        <label class="block text-sm font-medium text-gray-700 mr-2">{{ $component }} (Through-hole / SMD):</label>
                                        <div class="flex items-center">
                                            <input type="radio" id="{{ strtolower($component) }}-include" name="{{ strtolower($component) }}_include" value="include" class="mr-1">
                                            <label for="{{ strtolower($component) }}-include" class="text-sm font-medium text-gray-700 mr-2">Include</label>
                                            <input type="radio" id="{{ strtolower($component) }}-exclude" name="{{ strtolower($component) }}_include" value="exclude" class="mr-1">
                                            <label for="{{ strtolower($component) }}-exclude" class="text-sm font-medium text-gray-700 mr-2">Exclude</label>
                                        </div>
                                        <input type="number" id="{{ strtolower($component) }}-quantity" name="{{ strtolower($component) }}_quantity" placeholder="Quantity" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Submit Order</button>
                </form>
            </div>

            <!-- PCB Assembly Form -->
            <div id="PCBAssembly" class="tabcontent" style="display: none;">
                <form class="space-y-4">
                    <div>
                        <label for="pcb_dimensions_assembly" class="block text-sm font-medium text-gray-700">PCB Dimensions:</label>
                        <select id="pcb_dimensions_assembly" name="pcb_dimensions_assembly" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div>
                        <label for="pcb_base_material_assembly" class="block text-sm font-medium text-gray-700">PCB Base Material:</label>
                        <select id="pcb_base_material_assembly" name="pcb_base_material_assembly" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="FR-4">FR-4 (Standard)</option>
                            <option value="Aluminum">Aluminum</option>
                        </select>
                    </div>

                    <!-- PCB Components Selection Card for Assembly -->
                    <div class="grid-container">
                        <div class="grid-item">
                            <h4 class="text-lg font-semibold text-gray-800">PCB Components Selection (Assembly)</h4>
                            <div class="space-y-4">
                                @foreach (['Microcontrollers', 'ICs', 'Transistors'] as $component)
                                    <div class="flex items-center">
                                        <label class="block text-sm font-medium text-gray-700 mr-2">{{ $component }} (Through-hole / SMD):</label>
                                        <div class="flex items-center">
                                            <input type="radio" id="{{ strtolower($component) }}-include" name="{{ strtolower($component) }}_include" value="include" class="mr-1">
                                            <label for="{{ strtolower($component) }}-include" class="text-sm font-medium text-gray-700 mr-2">Include</label>
                                            <input type="radio" id="{{ strtolower($component) }}-exclude" name="{{ strtolower($component) }}_include" value="exclude" class="mr-1">
                                            <label for="{{ strtolower($component) }}-exclude" class="text-sm font-medium text-gray-700 mr-2">Exclude</label>
                                        </div>
                                        <input type="number" id="{{ strtolower($component) }}-quantity" name="{{ strtolower($component) }}_quantity" placeholder="Quantity" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-24 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Submit Order</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Product Scroll Container -->
    <div class="product-scroll-container">
        @for ($i = 0; $i < 10; $i++)
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Product Image">
                <h3 class="text-lg font-semibold mt-2">Product Title</h3>
                <p class="text-gray-600">Short description of the product. Price: $100</p>
                <button class="mt-2 w-full bg-blue-500 text-white py-1 px-2 rounded-md">Add to Cart</button>
            </div>
        @endfor
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
