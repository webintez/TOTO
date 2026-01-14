<x-app-layout>
    @section('title', $article->title . ' | Lords Mobility News')

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
                            <a href="{{ route('news.index') }}" class="hover:text-primary ml-1 md:ml-2">News & Media</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
                            <span class="ml-1 md:ml-2 font-medium text-gray-900 truncate max-w-xs md:max-w-md">{{ $article->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
                @if($article->image)
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-96 object-cover">
                @endif
                
                <div class="p-8 md:p-12">
                    <div class="mb-6 flex items-center text-sm text-gray-500">
                        <span class="mr-4">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            {{ $article->published_at->format('F d, Y') }}
                        </span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $article->title }}</h1>

                    <div class="prose prose-lg max-w-none text-gray-700">
                        {!! $article->content !!}
                    </div>

                     <div class="mt-12 pt-8 border-t border-gray-200">
                        <a href="{{ route('news.index') }}" class="inline-flex items-center font-bold text-primary hover:text-blue-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            Back to All News
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
