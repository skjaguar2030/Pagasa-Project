<div>
  <div>
    <footer class="bg-slate-800 text-white" 
        x-data="{ 
            showSuccess: @entangle('isSubscribed'),
            contactForm: {
                name: '',
                email: '',
                message: '',
                submit() {
                    alert('Contact form submitted!');
                    this.name = '';
                    this.email = '';
                    this.message = '';
                }
            }
        }">


        <!-- Footer Links -->
        <div class="bg-slate-800 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Our Firm -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-300 mb-6">Our Agency</h3>
                        <nav class="space-y-3">
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">About Us</a>
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">Careers</a>
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">News</a>
                        </nav>
                    </div>

                    <!-- Information -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-300 mb-6">Information</h3>
                        <nav class="space-y-3">
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">FAQ</a>
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">Support</a>
                            <a href="#" class="block text-gray-400 hover:text-sky-400 transition-colors duration-200">Resources</a>
                        </nav>
                    </div>

                    <!-- Social Media -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-300 mb-6">Follow Us</h3>
                        <nav class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-sky-400 transition-colors duration-200">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-sky-400 transition-colors duration-200">
                                <i class="fab fa-youtube text-2xl"></i>
                            </a>
                        </nav>
                    </div>

                    <!-- Contact -->
                    <div class="space-y-4">
                        <button wire:click="openContactModal" 
                                class="bg-sky-500 hover:bg-sky-600 px-6 py-2 rounded-lg transition-colors">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bg-slate-900 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between">
                <div class="text-5xl font-bold text-white tracking-wider mb-4 lg:mb-0">
                    Pagasa
                </div>
                <div class="text-center lg:text-right text-sm text-gray-400 max-w-2xl">
                    <p class="mb-2">© 2025 Pagasa. All Rights Reserved.</p>
                    <p>
                        Not intended for visitors. 
                        <a href="#" class="text-sky-400 hover:text-sky-300 underline">Click here</a> 
                        for Middle East market information.
                    </p>
                </div>
            </div>
        </div>

        <!-- Success Toast -->
        <div x-show="showSuccess" 
             x-transition 
             class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg max-w-sm z-50"
             style="display: none;"
             x-init="$watch('showSuccess', v => { if(v) setTimeout(() => showSuccess = false, 5000) })">
            <div class="flex items-center space-x-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M5 13l4 4L19 7"></path>
                </svg>
                <div>
                    <p class="font-semibold">Successfully Subscribed!</p>
                    <p class="text-sm">{{ $subscriptionMessage }}</p>
                </div>
            </div>
        </div>

        <!-- Contact Modal -->
        {{-- <div x-show="@entangle('showContactModal')" 
             x-transition 
             class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4"
             style="display: none;">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md"
                 @click.outside="$wire.closeContactModal()">
                <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Contact Us</h3>
                    <button wire:click="closeContactModal" class="text-gray-400 hover:text-gray-600">
                        ✕
                    </button>
                </div>
                <form @submit.prevent="contactForm.submit()" class="p-6 space-y-4">
                    <input type="text" x-model="contactForm.name" placeholder="Your Name"
                           class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-sky-500" required>
                    <input type="email" x-model="contactForm.email" placeholder="Your Email"
                           class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-sky-500" required>
                    <textarea x-model="contactForm.message" rows="4" placeholder="Message"
                              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-sky-500" required></textarea>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" wire:click="closeContactModal" 
                                class="px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                        <button type="submit" 
                                class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-2 rounded-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div> --}}
    </footer>
</div>

</div>
