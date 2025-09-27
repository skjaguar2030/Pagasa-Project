<div>
<div class="bg-gray-100 border-b border-gray-200">
  <div 
    x-data="{
      alerts: @js($alerts),
      index: 0,
      interval: null,
      start() {
        this.interval = setInterval(() => {
          this.index = (this.index + 1) % this.alerts.length;
        }, 2000); // 2 seconds
      },
      stop() {
        clearInterval(this.interval);
      }
    }"
    x-init="start()"
    @mouseenter="stop()"
    @mouseleave="start()"
    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between py-2"
  >
    <!-- LEFT: Orange bell + label -->
    <div class="flex items-center flex-shrink-0 mr-4 border-r border-gray-300 border-h pr-4">
      <svg class="h-5 w-5 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 17H9" stroke="#FB923C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 3C9.2 3 7 5.2 7 8V11C7 13.6 5.5 15.8 3 16.5V18H21V16.5C18.5 15.8 17 13.6 17 11V8C17 5.2 14.8 3 12 3Z" stroke="#FB923C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <span class="ml-2 text-sm font-semibold text-gray-800">Important Updates</span>
    </div>

    <!-- MIDDLE: Carousel text -->
    <div class="flex-1 text-center overflow-hidden relative h-10">
        <template x-for="(alert, i) in alerts" :key="i">
            <a 
                x-show="index === i" 
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-500"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                :href="alert.url" 
                class="absolute inset-0 flex flex-col items-center justify-center text-sm text-gray-700 hover:text-orange-600"
            >
                <span x-text="alert.title"></span>
                <span x-text="alert.date" class="text-xs text-gray-500 mt-0.5"></span>
            </a>
        </template>
    </div>

    <!-- RIGHT: Subscribe button -->
    {{-- <div class="ml-4 flex-shrink-0">
      <button class="bg-orange-500 text-white text-sm font-medium px-4 py-1.5 rounded hover:bg-orange-600 transition">
        Subscribe
      </button>
    </div>
  </div> --}}
</div>

</div>