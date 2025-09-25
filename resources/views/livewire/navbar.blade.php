<div>
    <nav class="bg-white shadow-lg sticky top-0 z-50" x-data="{ mobileOpen: false, showNotification: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">

                    <span class="ml-2 text-3xl font-bold text-sky-500">Pagasa</span>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-1">
                    @foreach($navItems as $item)
                        <button 
                            wire:click="setActive('{{ $item['key'] }}')"
                            class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center space-x-2
                                {{ $activeItem === $item['key'] 
                                    ? 'bg-blue-100 text-blue-700 shadow-sm' 
                                    : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50' }}"
                            x-data="{ tooltip: false }"
                            @mouseenter="tooltip = true"
                            @mouseleave="tooltip = false"
                        >
                            <!-- Icon -->
                            @if($item['icon'] === 'home')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            @elseif($item['icon'] === 'user')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            @elseif($item['icon'] === 'briefcase')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path>
                                </svg>
                            @else
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            @endif
                            
                            <span>{{ $item['label'] }}</span>
                            
                            <!-- Active indicator -->
                            @if($activeItem === $item['key'])
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            @endif

                            <!-- Tooltip -->
                            <div x-show="tooltip" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform scale-95"
                                 x-transition:enter-end="opacity-100 transform scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="opacity-100 transform scale-100"
                                 x-transition:leave-end="opacity-0 transform scale-95"
                                 class="absolute top-full mt-2 px-2 py-1 text-xs text-white bg-gray-800 rounded shadow-lg whitespace-nowrap"
                                 style="display: none;">
                                Navigate to {{ $item['label'] }}
                            </div>
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Right side items -->
            <div class="hidden md:flex items-center space-x-4">
            

                <!-- This feature is reserved for later when backend of User inscription will be established -->
                <!-- Profile -->
                {{-- <div x-data="{ profileOpen: false }" class="relative">
                    <button @click="profileOpen = !profileOpen" 
                            class="flex items-center space-x-2 p-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                        <img class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500" 
                             src="https://via.placeholder.com/32x32/8B5CF6/FFFFFF?text=U" alt="Profile">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button> --}}
                    
                    <!-- Profile dropdown -->
                    {{-- <div x-show="profileOpen" 
                         x-transition
                         @click.outside="profileOpen = false"
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200"
                         style="display: none;">
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <hr class="my-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div> 
                </div> --}}

                 <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center space-x-2 text-white bg-gradient-to-r from-sky-500 to-blue-700 shadow-sm hover:bg-gray-50 transition-colors duration-200">Login</a>
                </div>
                
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="mobileOpen = !mobileOpen" 
                        class="p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              x-show="!mobileOpen" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              x-show="mobileOpen" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:hidden bg-white border-t border-gray-200"
         style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @foreach($navItems as $item)
                <button 
                    wire:click="setActive('{{ $item['key'] }}')"
                    @click="mobileOpen = false"
                    class="w-full text-left flex items-center space-x-3 px-3 py-2 rounded-lg text-base font-medium transition-colors
                        {{ $activeItem === $item['key'] 
                            ? 'bg-blue-100 text-blue-700' 
                            : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50' }}">
                    <!-- Mobile icons (same as desktop) -->
                    @if($item['icon'] === 'home')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    @elseif($item['icon'] === 'user')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    @elseif($item['icon'] === 'briefcase')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path>
                        </svg>
                    @else
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    @endif
                    <span>{{ $item['label'] }}</span>
                </button>
            @endforeach
        </div>
    </div>

    <!-- Notification Toast -->
    <div x-show="showNotification" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform translate-x-full"
         x-init="$watch('showNotification', value => { if(value) setTimeout(() => showNotification = false, 3000) })"
         class="fixed top-20 right-4 bg-white rounded-lg shadow-lg border border-gray-200 p-4 max-w-sm z-50"
         style="display: none;">
        <div class="flex items-start space-x-3">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="flex-1">
                <p class="text-sm font-medium text-gray-900">Navigation Updated</p>
                <p class="text-sm text-gray-500">Active item changed to: <span class="font-semibold">{{ ucfirst($activeItem) }}</span></p>
            </div>
            <button @click="showNotification = false" class="flex-shrink-0 text-gray-400 hover:text-gray-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Wire listener for navigation changes -->
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('navItemChanged', item => {
            // You can add custom JavaScript here when navigation changes
            console.log('Navigation changed to:', item);
        });
    });
</script>
</div>
