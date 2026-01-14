<x-app-layout>
    @section('title', 'About Us | Lords Mobility')
    
    <!-- Hero Section -->
    <section class="bg-gray-100 py-20 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">About Lords Mobility</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">We are driving the future of sustainable transportation with our innovative electric vehicles.</p>
    </section>

    <!-- Vision, Mission, Values -->
    <section class="py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center border-t-4 border-primary">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Our Vision</h3>
                    <p class="text-gray-600">To be the global leader in electric mobility by providing sustainable, efficient, and affordable transport solutions.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center border-t-4 border-primary">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Our Mission</h3>
                    <p class="text-gray-600">To accelerate the adoption of electric vehicles through continuous innovation, superior quality, and customer-centric approach.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center border-t-4 border-primary">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Our Values</h3>
                    <p class="text-gray-600">Integrity, Innovation, Sustainability, and Excellence are at the core of everything we do.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Management Team -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Our Leadership Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                @forelse($teamMembers as $member)
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm group">
                        <div class="relative h-64 bg-gray-200">
                             @if($member->image)
                                <img src="{{ Storage::url($member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://placehold.co/400x400/e1e1e1/333333?text={{ urlencode($member->name) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="text-lg font-bold">{{ $member->name }}</h4>
                            <p class="text-primary text-sm font-medium mb-3">{{ $member->designation }}</p>
                            @if($member->bio)
                                <p class="text-gray-500 text-sm line-clamp-3">{{ $member->bio }}</p>
                            @endif
                            
                            @if($member->social_links)
                                <div class="flex justify-center mt-4 space-x-3">
                                    @foreach($member->social_links as $platform => $link)
                                        <a href="{{ $link }}" target="_blank" class="text-gray-400 hover:text-primary">
                                            <span class="sr-only">{{ ucfirst($platform) }}</span>
                                            <!-- Simple icon placeholder, in real app use specific icons based on platform key -->
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 5.523 4.477 10 10 10s10-4.477 10-10c0-5.523-4.477-10-10-10zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"/></svg>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-8 text-gray-500">
                        Team members information coming soon.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Awards Section (New) -->
    @if($awards->count() > 0)
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Awards & Recognition</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($awards as $award)
                    <div class="text-center group">
                        <div class="bg-gray-50 rounded-lg p-6 mb-4 h-48 flex items-center justify-center transition duration-300 group-hover:shadow-md">
                            @if($award->image)
                                <img src="{{ Storage::url($award->image) }}" alt="{{ $award->title }}" class="max-h-full max-w-full">
                            @else
                                <div class="text-gray-400 font-bold text-xl">{{ $award->year }}</div>
                            @endif
                        </div>
                        <h4 class="font-bold text-gray-900">{{ $award->title }}</h4>
                        <p class="text-sm text-gray-500">{{ $award->year }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</x-app-layout>
