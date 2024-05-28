<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a class="font-bold text-xl text-gray-600" href="{{ url('/') }}">LOGO</a>

        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a href="{{ url('/') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('/') ? 'bg-gray-200' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('about') ? 'bg-gray-200' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('contact') ? 'bg-gray-200' : '' }}">Contact</a>
            
            <!-- Support Dropdown -->
            <div class="relative group">
                <button class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 focus:outline-none focus:bg-gray-200">Support</button>
                <div class="absolute hidden bg-white rounded-md shadow-lg z-10">
                    <a href="{{ url('/support/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">FAQ</a>
                    <a href="{{ url('/how-to-shop') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">How to Shop</a>
                    <a href="{{ url('/support/reviews') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Reviews</a>
                    <!-- Add more nested menu items as needed -->
                </div>
            </div>
        </div>

        <!-- Authentication Links -->
        <div class="flex items-center space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Dashboard</a>
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