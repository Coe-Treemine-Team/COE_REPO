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
<div class="services-offered mx-auto my-8">
    <!-- PCB Order Customization Section -->
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
</div>


</div>

</div>

    </div>

    @include('components.footer')
    <script>
    // JavaScript for handling tab switching
    function openTab(evt, serviceName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(serviceName).style.display = "block";
        evt.currentTarget.className += " active";
    }
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
