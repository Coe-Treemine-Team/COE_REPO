<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a class="font-bold text-xl text-gray-600" href="{{ url('/') }}">LOGO</a>

        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a href="{{ url('/') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('/') ? 'bg-gray-200' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('about') ? 'bg-gray-200' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('contact') ? 'bg-gray-200' : '' }}">Contact</a>
            <a href="{{ url('/products') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('contact') ? 'bg-gray-200' : '' }}">products</a>
            
            <!-- Support Dropdown -->
            <div class="relative">
                <button 
                    class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 focus:outline-none focus:bg-gray-200"
                    onclick="document.getElementById('dropdown').classList.toggle('hidden')"
                >
                    <span class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span>Support</span>
                    </span>
                            </button>
                <div id="dropdown" class="absolute hidden bg-white rounded-md shadow-lg z-10 fade-enter w-48" v-on:leave="fadeOut">
                    <a href="/support/faq" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>FAQ</span>
                        </span>
                        <p class="text-gray-500 text-sm pl-6">Frequently Asked Questions</p>
                    </a>
                    <a href="/how-to-shop" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <span>How to Shop</span>
                        </span>
                        <p class="text-gray-500 text-sm pl-6">Learn how to shop with us</p>
                    </a>
                    <a href="/support/reviews" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                        <span class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Reviews</span>
                        </span>
                        <p class="text-gray-500 text-sm pl-6">See what our customers say</p>
                    </a>
                    <!-- Add more nested menu items as needed -->
                </div>
            </div>
        </div>

        <!-- Authentication Links -->
        <div class="flex items-center space-x-4">
            @auth
              
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Register</a>
                @endif
            @endauth
        </div>
    </div>
</nav>

<script>
    // JavaScript to toggle dropdown visibility
    document.querySelectorAll('.group').forEach(function(element) {
        element.addEventListener('mouseenter', function() {
            this.querySelector('.absolute').classList.remove('hidden');
        });
        element.addEventListener('mouseleave', function() {
            this.querySelector('.absolute').classList.add('hidden');
        });
    });
</script>