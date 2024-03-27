<nav class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon for menu button here -->
                    </button>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-8" src="/path/to/your/logo.svg" alt="Your Logo">
                </div>
                <div class="hidden md:block md:ml-6">
                    <div class="flex space-x-4">
                        <a href="/" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Home</a>
                        <a href="/about" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">About</a>
                        <a href="/contact" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Contact</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">EN/ID</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="px-3 py-2 rounded-md text-sm font-medium">User</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Home</a>
            <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">About</a>
            <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Contact</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">EN/ID</a>
        </div>
    </div>
</nav>
