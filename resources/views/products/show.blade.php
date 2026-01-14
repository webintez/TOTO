<x-app-layout>
    @section('title', 'Lords Ignite | Lords Mobility')

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex text-gray-500 text-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                            <a href="{{ route('products.index') }}" class="hover:text-primary ml-1 md:ml-2">Vehicles</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                            <span class="ml-1 md:ml-2 font-medium text-gray-900">{{ $product->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Product Hero -->
    <section class="bg-white py-12" x-data="{ showLightbox: false, lightboxImage: '' }">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Images -->
                <div>
                     <div class="swiper myProductSwiper rounded-lg shadow-lg overflow-hidden border border-gray-100 group">
                        <div class="swiper-wrapper">
                            @if($product->images->count() > 0)
                                @foreach($product->images as $image)
                                    <div class="swiper-slide cursor-zoom-in" @click="showLightbox = true; lightboxImage = '{{ url(Storage::url($image->image)) }}'">
                                        <img src="{{ url(Storage::url($image->image)) }}" alt="{{ $image->title ?? $product->name }}" class="w-full h-auto">
                                    </div>
                                @endforeach
                            @elseif($product->featured_image)
                                <div class="swiper-slide cursor-zoom-in" @click="showLightbox = true; lightboxImage = '{{ url(Storage::url($product->featured_image)) }}'">
                                    <img src="{{ url(Storage::url($product->featured_image)) }}" alt="{{ $product->name }}" class="w-full h-auto">
                                </div>
                            @else    
                                <div class="swiper-slide">
                                    <img src="https://placehold.co/800x600/e1e1e1/333333?text={{ urlencode($product->name) }}" alt="{{ $product->name }}" class="w-full h-auto">
                                </div>
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        
                        <!-- Zoom Hint -->
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none z-10">
                            Click to Expand
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    @if($product->category)
                        <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">{{ $product->category->name }}</span>
                    @endif
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
                    <p class="text-xl text-gray-600 mb-6 font-light">{!! $product->description !!}</p>
                    
                    <div class="flex items-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-900 mr-4">₹ {{ number_format($product->price, 0) }}</h2>
                        <span class="text-sm text-gray-500">(Ex-showroom price)</span>
                    </div>

                    @if($product->specifications->count() > 0)
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        @foreach($product->specifications->take(4) as $spec)
                        <div class="text-center p-4 bg-gray-50 rounded-lg border border-gray-100">
                            <span class="block text-2xl font-bold text-gray-900">{{ $spec->value }}</span>
                            <span class="text-sm text-gray-500">{{ $spec->key }}</span>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <div class="flex space-x-4">
                        <a href="{{ route('contact') }}?product={{ urlencode($product->name) }}" class="flex-1 bg-primary text-white text-center font-bold py-3 px-6 rounded-full hover:bg-blue-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">Book Now</a>
                        @if($product->brochure)
                            <a href="{{ url(Storage::url($product->brochure)) }}" target="_blank" class="flex-1 border-2 border-primary text-primary font-bold py-3 px-6 rounded-full hover:bg-primary hover:text-white transition duration-300 text-center">Download Brochure</a>
                        @else
                            <button class="flex-1 border-2 border-primary text-gray-400 font-bold py-3 px-6 rounded-full cursor-not-allowed text-center" disabled>Brochure Needed</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="showLightbox" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4" 
             style="display: none;">
            <div @click.away="showLightbox = false" class="relative max-w-4xl max-h-full w-full">
                <button @click="showLightbox = false" class="absolute -top-10 right-0 text-white hover:text-gray-300 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <img :src="lightboxImage" alt="Product Image" class="w-full h-auto max-h-[90vh] object-contain rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Specifications -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Technical Specifications</h2>
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <div class="p-8">
                    @if($product->specifications->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($product->specifications as $spec)
                                <div class="flex justify-between border-b border-gray-100 pb-2">
                                    <dt class="text-gray-600 font-medium">{{ $spec->key }}</dt>
                                    <dd class="font-bold text-gray-900">{{ $spec->value }}</dd>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-500">Detailed specifications coming soon.</p>
                    @endif
                </div>
            </div>
            
            @if($product->features_list)
            <div class="mt-12">
                 <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Key Features</h2>
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto">
                     @foreach($product->features_list as $feature)
                        <div class="flex items-center bg-white p-4 rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-800 font-medium">{{ $feature }}</span>
                        </div>
                     @endforeach
                 </div>
            </div>
            @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const productSwiper = new Swiper('.myProductSwiper', {
                loop: true,
                 pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</x-app-layout>
