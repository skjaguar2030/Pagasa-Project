<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
  {{-- <livewire:aler-ticker />
  <livewire:navbar />
  <livewire:header />
  <livewire:spotlight-section /> 



  <livewire:employers-individuals />
  <livewire:insights />--}}
  <livewire:about />

  <!-- Newsletter Section -->
  <div class="bg-sky-500 py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col lg:flex-row items-center justify-between">
              
              <!-- Left Content -->
              <div class="text-center lg:text-left mb-8 lg:mb-0">
                  <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                      Stay in touch
                  </h2>
                  <p class="text-xl text-white/90">
                      Subscribe to receive our latest immigration alerts
                  </p>
              </div>

              <!-- Subscription Form -->
              <div class="w-full lg:w-auto">
                  <form wire:submit.prevent="subscribe" 
                        class="flex flex-col sm:flex-row gap-4 lg:min-w-[400px]">
                      
                      <div class="flex-1">
                          <input 
                              type="email" 
                              wire:model="email"
                              placeholder="Enter your email address"
                              class="w-full px-4 py-3 rounded-lg text-gray-900 bg-white placeholder-gray-500 focus:ring-4 focus:ring-white/30 focus:outline-none transition-all duration-200"
                          >
                          @error('email') 
                              <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
                          @enderror
                      </div>

                      <button 
                          type="submit"
                          wire:loading.attr="disabled"
                          class="bg-slate-700 hover:bg-slate-600 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center"
                      >
                          <span wire:loading.remove>Subscribe</span>
                          <span wire:loading class="flex items-center">
                              <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                  <circle class="opacity-25" cx="12" cy="12" r="10" 
                                          stroke="currentColor" stroke-width="4"></circle>
                                  <path class="opacity-75" fill="currentColor" 
                                        d="M4 12a8 8 0 018-8V0C5.37 0 0 5.37 0 12h4zm2 
                                            5.29A7.96 7.96 0 014 12H0c0 3.04 1.13 5.82 
                                            3 7.94l3-2.65z"></path>
                              </svg>
                              Subscribing...
                          </span>
                      </button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <livewire:footer /> 
</div>

