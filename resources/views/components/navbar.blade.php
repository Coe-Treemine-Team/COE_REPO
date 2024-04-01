<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a class="font-bold text-xl text-gray-600" href="{{ url('/') }}">LOGO</a>

        <!-- Navigation Links -->
        <div class="flex-grow flex items-center justify-center space-x-4">
            <a href="{{ url('/') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('/') ? 'bg-gray-200' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('about') ? 'bg-gray-200' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100 {{ Request::is('contact') ? 'bg-gray-200' : '' }}">Contact</a>
        </div>

        <!-- Authentication Links -->
        @if (Route::has('login'))
            <div class="flex">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-3 py-2 rounded text-gray-600 text-sm font-medium hover:bg-gray-100">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</nav>
