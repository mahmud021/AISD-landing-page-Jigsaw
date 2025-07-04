<section id="contact" class="relative bg-white py-20 lg:py-32 overflow-hidden">
    <!-- Floating Background -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center gap-3 mb-4">
                <span class="h-px w-12 bg-aisd-orange"></span>
                <span class="inline-block py-1.5 px-4 bg-aisd-orange-light text-aisd-orange rounded-full text-xs font-bold uppercase tracking-wider">
            Contact Us
        </span>
                <span class="h-px w-12 bg-aisd-orange"></span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold font-teachers text-gray-800 mb-4">
                Get in Touch with <span class="text-aisd-orange">AISD</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We'd love to hear from you. Reach out through any of the channels below.
            </p>
        </div>

        <!-- Contact + Map Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mt-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Item -->
                <div class="flex items-start gap-4 border-l-4 border-[#FF7F50] pl-5">
                    <div class="w-10 h-10 flex items-center justify-center bg-white border-2 border-[#FF7F50] rounded-full shadow outline outline-[3px] outline-[#ff7f5044]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7F50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">General Inquiries</h3>
                        <p class="text-gray-600">info@aisd.org</p>
                        <p class="text-gray-600">+234 000 000 0000</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex items-start gap-4 border-l-4 border-blue-500 pl-5">
                    <div class="w-10 h-10 flex items-center justify-center bg-white border-2 border-blue-500 rounded-full shadow outline outline-[3px] outline-blue-200/50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-500">
                            <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/>
                            <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                            <line x1="12" x2="12" y1="19" y2="22"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Press & Media</h3>
                        <p class="text-gray-600">press@aisd.org</p>
                        <p class="text-gray-600">+234 000 000 0000</p>
                    </div>
                </div>

                <!-- Item -->
                <!-- Updated Head Office & Branches -->
                <div class="flex items-start gap-4 border-l-4 border-gray-400 pl-5">
                    <div class="w-10 h-10 flex items-center justify-center bg-white border-2 border-gray-400 rounded-full shadow outline outline-[3px] outline-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-600">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Head Office</h3>
                        <p class="text-gray-600">No. 12 Unity Street, Maitama, Abuja, Nigeria</p>

                        <h4 class="mt-4 text-sm font-semibold text-gray-700 uppercase tracking-wide">Branch Offices</h4>
                        <ul class="mt-2 space-y-1 text-gray-600 text-sm">
                            <li><strong>FCT:</strong> Plot 22 Garki Area 2, Abuja</li>
                            <li><strong>Kano:</strong> 15 Ahmadu Bello Way, Kano City</li>
                            <li><strong>Kaduna:</strong> 27 Independence Road, Kaduna</li>
                            <li><strong>Zamfara:</strong> No. 8 Government House Road, Gusau</li>
                            <li><strong>Maiduguri:</strong> 13 Shehu Laminu Way, Maiduguri</li>
                            <li><strong>Damaturu:</strong> Block 4, Gujba Road, Damaturu</li>
                            <li><strong>Bama:</strong> Health Centre Lane, Bama</li>
                            <li><strong>Ngala:</strong> Main Street Opposite Central Market, Ngala</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- SVG Map -->
            <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" x-show="show"
                 x-transition.opacity.duration.1000ms
                 class="relative transition-opacity duration-700 opacity-0"
                 :class="{ 'opacity-100': show }">
                <div class="relative z-10 max-w-md mx-auto">
                    <div class="relative">
                        <img src="/assets/images/africa.svg" alt="Africa Map"
                             class="w-full h-auto transition-transform duration-500 hover:scale-105" />

                        <div class="absolute left-[41%] top-[30%]">
                            <div class="w-3 h-3 bg-orange-500 rounded-full animate-ping"> </div>
                            <div class="w-2 h-2 bg-orange-500 rounded-full absolute top-0 left-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
