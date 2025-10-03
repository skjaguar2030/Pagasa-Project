<div>
    <!-- Mission and Core Values Section with Image Slider -->
    <div class="bg-white px-2 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 border gap-8">
                <!-- Mission Column -->
                <div class="text-white col-span-1 md:col-span-2 py-16 relative" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-sky-500/30"></div>
                    <div class="relative z-10 flex items-center justify-center px-4">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">
                            Our mission and core values
                        </h2>
                    </div>
                </div>

                <div class="border col-span-2 border grid md:grid-rows-2 gap-4">

                    <!-- Quote Column -->
                    {{-- <div class="border border-red-500 text-white row-span-3 flex items-center md:row-span-1 mb-6 md:mb-0" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop'); background-size: cover; background-position: center;"> --}}
                    <div class="border border-red-500 text-sky-500 row-span-3 flex items-center md:row-span-1 mb-6 md:mb-0 bg-white" >
                        <blockquote class="text-lg md:text-xl italic leading-relaxed">
                            "We strive to be an integral part of our clients’ success by providing representation, services and strategic advice to facilitate the hiring and movement of skilled talent globally."
                        </blockquote>
                    </div>

                    <div class="border border-green-500 row-span-1 md:row-span-1">

                        <!-- Image Slider Column -->
                        <div class="relative" x-data="{ 
                            currentIndex: @entangle('currentSlide'),
                            autoplay: null,
                            init() {
                                this.startAutoplay();
                            },
                            startAutoplay() {
                                this.autoplay = setInterval(() => {
                                    $wire.nextSlide();
                                }, 5000);
                            },
                            stopAutoplay() {
                                clearInterval(this.autoplay);
                            },
                            restartAutoplay() {
                                this.stopAutoplay();
                                this.startAutoplay();
                            }
                        }" 
                        @mouseenter="stopAutoplay()" 
                        @mouseleave="startAutoplay()">
                            
                            <!-- Image Container -->
                            <div class="relative h-80 bg-white rounded-lg overflow-hidden shadow-2xl">
                                @foreach($teamImages as $index => $image)
                                    <div x-show="currentIndex === {{ $index }}"
                                        x-transition:enter="transition ease-out duration-500"
                                        x-transition:enter-start="opacity-0 transform translate-x-full"
                                        x-transition:enter-end="opacity-100 transform translate-x-0"
                                        x-transition:leave="transition ease-in duration-500"
                                        x-transition:leave-start="opacity-100 transform translate-x-0"
                                        x-transition:leave-end="opacity-0 transform -translate-x-full"
                                        class="absolute inset-0"
                                        style="display: none;">
                                        <img src="{{ $image['url'] }}" 
                                            alt="{{ $image['title'] }}" 
                                            class="w-full h-full object-cover">
                                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                            <h3 class="text-white text-xl font-bold mb-1">{{ $image['title'] }}</h3>
                                            <p class="text-white/90 text-sm">{{ $image['description'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
    
                                <!-- Navigation Arrows -->
                                <button wire:click="previousSlide" 
                                        @click="restartAutoplay()"
                                        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all duration-200 hover:scale-110 z-10">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button wire:click="nextSlide" 
                                        @click="restartAutoplay()"
                                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all duration-200 hover:scale-110 z-10">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
    
                                <!-- Dots Indicator -->
                                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                                    @foreach($teamImages as $index => $image)
                                        <button wire:click="goToSlide({{ $index }})"
                                                @click="restartAutoplay()"
                                                class="w-2 h-2 rounded-full transition-all duration-200"
                                                :class="currentIndex === {{ $index }} ? 'bg-white w-8' : 'bg-white/50 hover:bg-white/75'">
                                        </button>
                                    @endforeach
                                </div>
                            </div>
    
                            <!-- Slide Counter -->
                            {{-- <div class="mt-4 text-center text-white/80 text-sm">
                                <span x-text="currentIndex + 1"></span> / {{ count($teamImages) }}
                            </div> --}}
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
