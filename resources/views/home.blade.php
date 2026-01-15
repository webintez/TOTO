<x-app-layout>
    @section('title', 'Electric Scooters & Vehicles | Lords Mobility')
    @section('meta_description', 'Lords Mobility offers high-performance electric scooters and vehicles. Join the green revolution with our eco-friendly transport solutions.')

    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @forelse($sliders as $slider)
                    <div class="swiper-slide relative">

                        @if($slider->image)
                            <img src="{{ url(Storage::url($slider->image)) }}" alt="{{ $slider->title }}" class="w-full h-[250px] md:h-[700px] object-cover">
                        @else
                            <img src="https://placehold.co/1920x800/005eb8/ffffff?text={{ urlencode($slider->title) }}" alt="{{ $slider->title }}" class="w-full h-[250px] md:h-[700px] object-cover">
                        @endif
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center px-4 max-w-4xl mx-auto z-10">
                                <h1 class="text-4xl md:text-6xl font-bold mb-4 tracking-tight" data-aos="fade-up">{{ $slider->title }}</h1>
                                <p class="text-lg md:text-xl mb-8 text-gray-200" data-aos="fade-up" data-aos-delay="100">{{ $slider->subtitle }}</p>
                                @if($slider->link)
                                    <a href="{{ $slider->link }}" class="inline-block bg-primary hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">{{ $slider->button_text ?? 'Explore' }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Fallback Slide -->
                     <div class="swiper-slide relative">

                        <img src="https://placehold.co/1920x800/005eb8/ffffff?text=Lords+Mobility+EVs" alt="Hero Banner" class="w-full h-[250px] md:h-[700px] object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center px-4 max-w-4xl mx-auto z-10">
                                <h1 class="text-4xl md:text-6xl font-bold mb-4 tracking-tight" data-aos="fade-up">Future of Urban Mobility</h1>
                                <p class="text-lg md:text-xl mb-8 text-gray-200" data-aos="fade-up" data-aos-delay="100">Experience the power of electric with Lords Mobility. Sustainable, Efficient, and Stylish.</p>
                                <a href="{{ route('products.index') }}" class="inline-block bg-primary hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">Explore Vehicles</a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About Lords Mobility</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Lords Mobility is a pioneer in the electric vehicle industry, dedicated to transforming the way people commute. Our mission is to provide affordable, eco-friendly, and high-quality electric two-wheelers and three-wheelers.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        With state-of-the-art manufacturing facilities and a commitment to innovation, we deliver vehicles that are not just efficient but also a joy to ride.
                    </p>
                    <a href="{{ route('about') }}" class="text-primary font-bold hover:underline inline-flex items-center">
                        Read More About Us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <div class="relative" data-aos="fade-left">
                    @if(!empty($aboutImage))
                        <img src="{{ url(Storage::url($aboutImage)) }}" alt="About Lords Mobility" class="rounded-lg shadow-xl w-full">
                    @else
                        <img src="https://placehold.co/600x400/e1e1e1/333333?text=About+Us+Image" alt="About Lords Mobility" class="rounded-lg shadow-xl w-full">
                    @endif
                    <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-lg hidden md:block">
                        <p class="text-4xl font-bold">25+</p>
                        <p class="text-sm uppercase tracking-wide">Years of Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <p class="text-4xl font-bold text-primary mb-2 counting" data-count="{{ $stats['dealers'] }}">0</p>
                    <p class="text-gray-600 font-medium">Dealers Across India</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <p class="text-4xl font-bold text-primary mb-2 counting" data-count="{{ $stats['states'] }}">0</p>
                    <p class="text-gray-600 font-medium">States Covered</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <p class="text-4xl font-bold text-primary mb-2 counting" data-count="{{ $stats['sold'] }}">0</p>
                    <p class="text-gray-600 font-medium">Vehicles Sold</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <p class="text-4xl font-bold text-primary mb-2 counting" data-count="{{ $stats['experience'] }}">0</p>
                    <p class="text-gray-600 font-medium">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Featured Vehicles</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Explore our range of high-performance electric vehicles designed for modern urban mobility.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProducts as $product)
                    <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            @if($product->featured_image)
                                <img src="{{ url(Storage::url($product->featured_image)) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            @else
                                <img src="https://placehold.co/400x300/e1e1e1/333333?text={{ urlencode($product->name) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            @endif
                            <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Featured</div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition duration-300">{{ $product->name }}</h3>
                            <p class="text-gray-500 mb-4 line-clamp-2">{{ $product->short_description }}</p>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="text-lg font-bold text-gray-900">₹ {{ number_format($product->price, 0) }}</span>
                                <a href="{{ route('products.show', $product->slug) }}" class="text-primary font-bold hover:underline">View Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8 text-gray-500">
                        No featured products available at the moment.
                    </div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('products.index') }}" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 px-8 rounded-full transition duration-300">View All Vehicles</a>
            </div>
        </div>
    </section>

     <!-- Latest News Section -->
     <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Latest News & Media</h2>
                    <p class="text-gray-600">Stay updated with the latest happenings at Lords Mobility.</p>
                </div>
                <a href="{{ route('news.index') }}" class="hidden md:inline-block text-primary font-bold hover:underline">View All News</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latestNews as $news)
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                        @if($news->image)
                            <img src="{{ url(Storage::url($news->image)) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                        @else
                             <img src="https://placehold.co/400x250/e1e1e1/333333?text=News" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-2">{{ $news->published_at->format('M d, Y') }}</p>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary"><a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a></h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $news->excerpt }}</p>
                            <a href="{{ route('news.show', $news->slug) }}" class="text-primary text-sm font-bold hover:underline">Read More</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8 text-gray-500">
                        No recent news updates.
                    </div>
                @endforelse
            </div>
            
            <div class="text-center mt-8 md:hidden">
                <a href="{{ route('news.index') }}" class="text-primary font-bold hover:underline">View All News</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 md:py-24 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-900 opacity-20"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Costumers Say</h2>
                <div class="w-24 h-1 bg-white mx-auto rounded"></div>
            </div>

            <div class="swiper myTestimonialSwiper">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="bg-white text-gray-900 p-8 rounded-xl shadow-lg max-w-2xl mx-auto text-center">
                                <div class="mb-6 flex justify-center text-yellow-500">
                                    @for($i = 0; $i < $testimonial->rating; $i++)
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                                <p class="text-xl italic mb-6">"{{ $testimonial->content }}"</p>
                                <h4 class="font-bold text-lg">{{ $testimonial->name }}</h4>
                                <p class="text-gray-500">{{ $testimonial->designation ? $testimonial->designation . ', ' : '' }}{{ $testimonial->company }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <div class="bg-white text-gray-900 p-8 rounded-xl shadow-lg max-w-2xl mx-auto text-center">
                                <p class="text-gray-500">No testimonials yet.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Init Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.mySwiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el:('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            
             const testimonialSwiper = new Swiper('.myTestimonialSwiper', {
                loop: true,
                autoplay: {
                    delay: 6000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
</x-app-layout>
