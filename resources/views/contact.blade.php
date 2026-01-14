<x-app-layout>
    @section('title', 'Contact Us | Lords Mobility')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-900 mb-4">Contact Us</h1>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Get in touch with us for any queries about our vehicles, dealership opportunities, or services.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="bg-white rounded-xl shadow-md p-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900">Get In Touch</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-50 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Head Office</h3>
                                <p class="text-gray-600">A-123, Industrial Area Phase II,</p>
                                <p class="text-gray-600">New Delhi, Delhi 110020</p>
                            </div>
                        </div>

                         <div class="flex items-start">
                             <div class="bg-blue-50 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Phone</h3>
                                <p class="text-gray-600">+91 98765 43210</p>
                                <p class="text-gray-600">+91 11 2345 6789</p>
                            </div>
                        </div>

                         <div class="flex items-start">
                             <div class="bg-blue-50 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Email</h3>
                                <p class="text-gray-600"><a href="mailto:info@lordsmobility.com" class="hover:text-primary">info@lordsmobility.com</a></p>
                                <p class="text-gray-600"><a href="mailto:sales@lordsmobility.com" class="hover:text-primary">sales@lordsmobility.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-md p-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900">Send us a Message</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" required>
                        </div>
                         <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white font-bold py-3 px-4 rounded-md hover:bg-blue-600 transition duration-300">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="mt-12 bg-white rounded-xl shadow-md p-4 h-96">
                <!-- Placeholder for Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.0688975472578!3d28.52728034389636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1705307000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg"></iframe>
            </div>
        </div>
    </section>
</x-app-layout>
