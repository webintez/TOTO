<x-app-layout>
    @section('title', 'Careers | Lords Mobility')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Join Our Team</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Be a part of the electric revolution. We are looking for passionate individuals to join us in our mission to transform urban mobility.</p>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:w-48" src="https://placehold.co/300x300/e1e1e1/333333?text=Hiring" alt="Hiring">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-primary font-bold">Work Culture</div>
                        <h2 class="block mt-1 text-lg leading-tight font-medium text-black">Why Work With Us?</h2>
                        <p class="mt-2 text-gray-500">At Lords Mobility, we foster a culture of innovation, collaboration, and growth. We offer competitive salaries, comprehensive benefits, and opportunities for professional development.</p>
                    </div>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-8">Current Openings</h2>

            <div class="space-y-6">
                <!-- Job Position 1 -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition duration-300 border-l-4 border-primary">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Senior Sales Manager</h3>
                            <p class="text-gray-500 text-sm mb-2">New Delhi | Full Time</p>
                            <p class="text-gray-600 mt-2">We are seeking an experienced Sales Manager to lead our expansion in North India...</p>
                        </div>
                        <a href="{{ route('contact') }}" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-300 ml-4">Apply Now</a>
                    </div>
                </div>

                 <!-- Job Position 2 -->
                 <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition duration-300 border-l-4 border-primary">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">R&D Engineer (Electrical)</h3>
                            <p class="text-gray-500 text-sm mb-2">Manesar Plant | Full Time</p>
                            <p class="text-gray-600 mt-2">Looking for a talented electrical engineer to work on our next-gen battery management systems...</p>
                        </div>
                        <a href="{{ route('contact') }}" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-300 ml-4">Apply Now</a>
                    </div>
                </div>

                 <!-- Job Position 3 -->
                 <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition duration-300 border-l-4 border-primary">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Digital Marketing Executive</h3>
                            <p class="text-gray-500 text-sm mb-2">Remote/Hybrid | Full Time</p>
                            <p class="text-gray-600 mt-2">Manage our social media presence and drive digital campaigns for brand awareness...</p>
                        </div>
                        <a href="{{ route('contact') }}" class="bg-primary text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-300 ml-4">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 bg-blue-50 p-8 rounded-xl">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Don't see a suitable role?</h3>
                <p class="text-gray-600 mb-6">Send your resume to us, and we will contact you when a position opens up.</p>
                <a href="mailto:hr@lordsmobility.com" class="text-primary font-bold text-lg hover:underline">hr@lordsmobility.com</a>
            </div>
        </div>
    </section>
</x-app-layout>
