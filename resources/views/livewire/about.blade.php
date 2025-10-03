<div>
    <div class="min-h-screen bg-gray-50">
        <livewire:aler-ticker />
        <livewire:navbar /> 
    <!-- Hero Section with Questions -->
    <div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                When it comes to selecting an immigration partner, what traits do you look for?
                <span class="text-blue-600">
                    Unparalleled knowledge and experience? An innovative spirit? A worldwide footprint? An unrelenting commitment to compliance? 
                </span>
            </h1>
            <p class="text-2xl font-semibold text-gray-800">
                The answer is: "all of the above"!
            </p>
        </div>
    </div>

        <!-- About Us Section -->
        <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">ABOUT US</h2>
                
                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold">At PAGASA</a>, we are a team of more than 
                        <span class="text-blue-600 font-semibold">6,000 immigration-focused professionals and staff spanning more than 60 offices worldwide.</span> spanning more 
                        than <span class="text-blue-600 font-semibold">80 offices nationwide</span>. Immigration has been our sole focus
                        <span class="text-blue-600 font-semibold">over 75 years</span>, and today we offer support in more than 170 countries. We are problem-solvers, innovators and established thought leaders in immigration—and our firm is recognized year after year by Chambers, Best Lawyers and Who’s Who. We contribute to conferences and seminars around the world, gather vast amounts of immigration data and leverage it for clients, author respected publications, and never stop working to design the future of our industry. As immigration around the world becomes more and more complex, we rely on many of our professionals’ years of experience working in government agencies and in-house corporate immigration departments to advance world-class, compliant immigration solutions.
                    </p>

                    <p>
                        No matter where you are, where you’re headed or how your immigration needs evolve over time, there is a place for you as a Pagasa client. Whether you’re interested in immigration-related strategic planning, efficiency, quality management, compliance, government relations, reporting, or case management and processing, you can trust Fragomen as your strategic immigration partner.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mission and Core Values Section with Image Slider -->
        <livewire:image-slider/>

        <!-- Statistics Section -->
        <div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach($statistics as $stat)
                        <div class="text-center" x-data="{ inView: false }" x-intersect="inView = true">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 transform scale-50"
                                x-transition:enter-end="opacity-100 transform scale-100">
                                @if($stat['icon'] === 'location')
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                @elseif($stat['icon'] === 'calendar')
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                @else
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                @endif
                            </div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">{{ $stat['number'] }}</div>
                            <div class="text-sm text-gray-600">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- History Section -->
        <div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">OUR HISTORY</h2>
                
                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p>
                        Established in <span class="text-blue-600 font-semibold">1951, PAGASA has grown from a modest domestic weather observation service 
                        to a truly global organization</span>. Our expansion has been a direct result of our strategic decision to establish stations in the 
                        regions where our citizens would benefit from our on-the-ground presence.
                    </p>

                    <p>
                        We intend to maintain our status as the largest and leading meteorological services provider by extending our service capabilities 
                        and our nationwide presence to meet our citizens' needs and the nation's demands.
                    </p>
                </div>

                <!-- Timeline -->
                <div class="mt-12 space-y-8">
                    <div class="flex items-start space-x-4" x-data="{ show: false }" x-intersect="show = true">
                        <div class="flex-shrink-0 w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center"
                            x-show="show"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 transform scale-50"
                            x-transition:enter-end="opacity-100 transform scale-100">
                            <span class="text-2xl font-bold text-blue-600">1951</span>
                        </div>
                        <div class="flex-1 pt-2">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Foundation</h3>
                            <p class="text-gray-600">PAGASA was established as the national meteorological agency of the Philippines</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4" x-data="{ show: false }" x-intersect="show = true">
                        <div class="flex-shrink-0 w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center"
                            x-show="show"
                            x-transition:enter="transition ease-out duration-500 delay-150"
                            x-transition:enter-start="opacity-0 transform scale-50"
                            x-transition:enter-end="opacity-100 transform scale-100">
                            <span class="text-2xl font-bold text-blue-600">1972</span>
                        </div>
                        <div class="flex-1 pt-2">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Modernization</h3>
                            <p class="text-gray-600">Introduction of computer systems and satellite technology for weather forecasting</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4" x-data="{ show: false }" x-intersect="show = true">
                        <div class="flex-shrink-0 w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center"
                            x-show="show"
                            x-transition:enter="transition ease-out duration-500 delay-300"
                            x-transition:enter-start="opacity-0 transform scale-50"
                            x-transition:enter-end="opacity-100 transform scale-100">
                            <span class="text-2xl font-bold text-blue-600">2025</span>
                        </div>
                        <div class="flex-1 pt-2">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Digital Transformation</h3>
                            <p class="text-gray-600">Leading the way with AI-powered forecasting and real-time mobile alerts for all Filipinos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-sky-500 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Ready to partner with PAGASA?
                </h2>
                <p class="text-xl text-white/90 mb-8">
                    Join thousands of organizations and individuals who trust us for accurate weather information
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" 
                    class="bg-white text-black hover:bg-gray-100 font-semibold px-8 py-3 rounded-lg transition-all duration-200 hover:scale-105">
                        Contact Us
                    </a>
                    <a href="/services" 
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-semibold px-8 py-3 rounded-lg transition-all duration-200">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </div>
    <livewire:footer />
</div>
