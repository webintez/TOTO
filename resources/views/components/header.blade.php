<header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-primary tracking-tighter">LORDS</span>
                    <span class="ml-1 text-2xl font-bold text-gray-800 tracking-tighter">MOBILITY</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary font-medium transition duration-150 ease-in-out {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary font-medium transition duration-150 ease-in-out {{ request()->routeIs('about') ? 'text-primary' : '' }}">About Us</a>
                
                <div class="relative group">
                    <button class="text-gray-700 group-hover:text-primary font-medium flex items-center transition duration-150 ease-in-out">
                        Vehicles
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <!-- Dropdown -->
                    <div class="absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200 transform z-50">
                        <div class="py-1" role="menu" aria-orientation="vertical">
                            <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-primary" role="menuitem">All Vehicles</a>
                            @foreach(\App\Models\ProductCategory::where('is_active', true)->get() as $category)
                                <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-primary" role="menuitem">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <a href="{{ route('career') }}" class="text-gray-700 hover:text-primary font-medium transition duration-150 ease-in-out {{ request()->routeIs('career') ? 'text-primary' : '' }}">Career</a>
                <a href="{{ route('news.index') }}" class="text-gray-700 hover:text-primary font-medium transition duration-150 ease-in-out {{ request()->routeIs('news.*') ? 'text-primary' : '' }}">Media</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary font-medium transition duration-150 ease-in-out {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact Us</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex md:items-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-primary hover:bg-blue-700 transition duration-150 ease-in-out shadow-md hover:shadow-lg">
                    ENQUIRE NOW
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-primary focus:outline-none transition duration-150 ease-in-out" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak class="md:hidden bg-white border-t border-gray-100" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">About Us</a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Vehicles</a>
            <a href="{{ route('career') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Career</a>
            <a href="{{ route('news.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Media</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Contact Us</a>
            
            <a href="{{ route('contact') }}" class="block w-full text-center mt-4 px-6 py-3 border border-transparent text-base font-bold rounded-md text-white bg-primary hover:bg-blue-700 transition duration-150 ease-in-out">
                ENQUIRE NOW
            </a>
        </div>
    </div>
</header>
