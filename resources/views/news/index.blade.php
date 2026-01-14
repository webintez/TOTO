<x-app-layout>
    @section('title', 'Media & News | Lords Mobility')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-900 mb-12">Latest News & Media</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $article)
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    @if($article->image)
                        <img src="{{ url(Storage::url($article->image)) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    @else
                        <img src="https://placehold.co/400x250/e1e1e1/333333?text={{ urlencode($article->title) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-2">{{ $article->published_at->format('M d, Y') }}</p>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary"><a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a></h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $article->excerpt }}</p>
                        <a href="{{ route('news.show', $article->slug) }}" class="text-primary font-bold hover:underline">Read Full Story &rarr;</a>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-12 text-gray-500">
                    No news articles available.
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $news->links() }}
            </div>
        </div>
    </section>
</x-app-layout>
