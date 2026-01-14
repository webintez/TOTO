<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center mb-6">
                    <span class="text-2xl font-bold text-white tracking-tighter">SERVAITAL</span>

                </div>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    {{ $globalSettings['site_description'] ?? 'Lords Mobility is committed to providing eco-friendly and high-performance electric vehicles.' }}
                </p>
                <!-- Social Links -->
                <div class="flex space-x-4">
                    @if(!empty($globalSettings['social_facebook']))
                    <a href="{{ $globalSettings['social_facebook'] }}" target="_blank" class="text-gray-400 hover:text-primary transition duration-150">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg>
                    </a>
                    @endif
                    @if(!empty($globalSettings['social_instagram']))
                    <a href="{{ $globalSettings['social_instagram'] }}" target="_blank" class="text-gray-400 hover:text-primary transition duration-150">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465C9.673 2.013 10.03 2 12.484 2h.08zM12.483 3.657c-2.628 0-2.946.012-3.98.058-.934.042-1.442.195-1.778.33-.448.175-.767.382-1.1.715-.333.332-.54.652-.715 1.1-.132.336-.285.844-.33 1.778-.046 1.034-.058 1.352-.058 4.093v.04c0 2.213.003 2.583.023 3.328a9.49 9.49 0 00.194 1.83c.092.42.235.815.428 1.177.305.57.73 1.05 1.295 1.295.362.193.757.336 1.177.428.745.02 1.115.023 3.328.023h.04c2.74 0 3.059-.012 4.093-.058.934-.046 1.442-.195 1.778-.33.448-.175.767-.382 1.1-.715.333-.332.54-.652.715-1.1.132-.336.285-.844.33-1.778.046-1.034.058-1.352.058-4.093v-.04c0-2.213-.003-2.583-.023-3.328a9.49 9.49 0 00-.194-1.83 4.293 4.293 0 00-.428-1.177 4.293 4.293 0 00-1.295-1.295 4.293 4.293 0 00-1.177-.428c-.745-.02-1.115-.023-3.328-.023H12.483z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M12.315 7.155a5.16 5.16 0 100 10.32 5.16 5.16 0 000-10.32zm0 8.665a3.505 3.505 0 110-7.01 3.505 3.505 0 010 7.01z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M17.426 5.25a1.103 1.103 0 100 2.206 1.103 1.103 0 000-2.206z" clip-rule="evenodd"/></svg>
                    </a>
                    @endif
                    @if(!empty($globalSettings['social_twitter']))
                    <a href="{{ $globalSettings['social_twitter'] }}" target="_blank" class="text-gray-400 hover:text-primary transition duration-150">
                       <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    @endif
                     @if(!empty($globalSettings['social_linkedin']))
                    <a href="{{ $globalSettings['social_linkedin'] }}" target="_blank" class="text-gray-400 hover:text-primary transition duration-150">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-primary transition duration-150">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-primary transition duration-150">About Us</a></li>
                    <li><a href="{{ route('career') }}" class="text-gray-400 hover:text-primary transition duration-150">Career</a></li>
                    <li><a href="{{ route('news.index') }}" class="text-gray-400 hover:text-primary transition duration-150">Media & News</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-primary transition duration-150">Contact Us</a></li>
                </ul>
            </div>

            <!-- Vehicles -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">Our Vehicles</h3>
                <ul class="space-y-3">
                    @foreach(\App\Models\ProductCategory::where('is_active', true)->take(5)->get() as $category)
                        <li><a href="{{ route('products.index', ['category' => $category->slug]) }}" class="text-gray-400 hover:text-primary transition duration-150">{{ $category->name }}</a></li>
                    @endforeach
                    <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-primary transition duration-150 font-semibold mt-2 inline-block">View All Products &rarr;</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-primary mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-gray-400">{{ $globalSettings['contact_address'] ?? '123, Industrial Area, New Delhi' }}</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-6 w-6 text-primary mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span class="text-gray-400">{{ $globalSettings['contact_phone'] ?? '+91 12345 67890' }}</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-6 w-6 text-primary mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-gray-400">{{ $globalSettings['contact_email'] ?? 'info@lordsmobility.com' }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center sm:flex sm:justify-between">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} {{ config('app.name', 'Lords Mobility') }}. All rights reserved.</p>
            <p class="text-gray-600 text-xs mt-1">Developed by <a href="https://webintez.com/" target="_blank" class="text-gray-500 hover:text-primary transition duration-150">Webintez</a></p>
            <div class="mt-4 sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-white text-sm mr-6">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-white text-sm">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
