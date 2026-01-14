<x-app-layout>
    @section('title', 'Our Vehicles | Lords Mobility')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">Our Electric Vehicles</h1>
            
            <!-- Category Filter -->
            <div class="flex justify-center flex-wrap gap-4 mb-12">
                <a href="{{ route('products.index') }}" class="px-6 py-2 rounded-full font-bold transition duration-300 {{ !request('category') ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-200' }}">All</a>
                @foreach($categories as $category)
                    <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="px-6 py-2 rounded-full font-bold transition duration-300 {{ request('category') == $category->slug ? 'bg-primary text-white' : 'bg-white text-gray-700 hover:bg-gray-200' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($products as $product)
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <div class="relative h-64 overflow-hidden bg-gray-200">
                        @if($product->featured_image)
                            <img src="{{ Storage::url($product->featured_image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        @else
                            <img src="https://placehold.co/400x300/e1e1e1/333333?text={{ urlencode($product->name) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition duration-300">{{ $product->name }}</h3>
                            @if($product->category)
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $product->category->name }}</span>
                            @endif
                        </div>
                        <p class="text-gray-500 mb-4 line-clamp-2">{{ $product->short_description }}</p>
                        
                        <!-- Mini Specs Preview (if available) -->
                        @if(isset($product->specifications) && count($product->specifications) > 0)
                         <div class="grid grid-cols-3 gap-2 text-center text-sm text-gray-600 mb-6 bg-gray-50 p-2 rounded">
                            @foreach($product->specifications->take(3) as $spec)
                            <div>
                                <span class="block font-bold text-gray-900">{{ $spec->value }}</span>
                                <span class="text-xs">{{ $spec->key }}</span>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="h-16 mb-6"></div> <!-- Spacer to keep cards aligned -->
                        @endif

                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-primary">₹ {{ number_format($product->price, 0) }}</span>
                            <a href="{{ route('products.show', ['slug' => $product->slug]) }}" class="inline-block bg-gray-900 hover:bg-primary text-white font-bold py-2 px-6 rounded-full transition duration-300">View Details</a>
                        </div>
                    </div>
                </div>
                @empty
                 <div class="col-span-3 text-center py-12">
                    <p class="text-xl text-gray-500">No products found in this category.</p>
                    <a href="{{ route('products.index') }}" class="text-primary hover:underline mt-2 inline-block">View all products</a>
                 </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $products->withQueryString()->links() }}
            </div>
        </div>
    </section>
</x-app-layout>
