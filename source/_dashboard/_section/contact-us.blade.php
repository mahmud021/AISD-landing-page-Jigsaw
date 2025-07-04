<section id="contact" class="relative bg-white py-20 lg:py-32 overflow-hidden">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Contact Us
            </span>
            <h1 class="text-4xl lg:text-5xl font-bold teachers-font text-[#373968] mb-4">
                Get in Touch with <span class="text-[#0203f9]">AISD</span>
            </h1>
            <p class="text-lg text-[#373968]/80 max-w-2xl mx-auto">
                We'd love to hear from you. Reach out through any of the channels below.
            </p>
        </div>

        <!-- Contact + Map Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mt-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- General Inquiries -->
                <div class="flex items-start gap-4 border-l-4 border-[#0203f9] pl-5">
                    <div class="w-10 h-10 flex items-center justify-center bg-white border-2 border-[#0203f9] rounded-full shadow outline outline-[3px] outline-[#0203f944]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0203f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#373968]">General Inquiries</h3>
                        <p class="text-[#373968]/80">ed.aisd@maaun.edu.ng</p>
                        <p class="text-[#373968]/80">+2348083130614</p>
                    </div>
                </div>

                <!-- Head Office -->
                <div class="flex items-start gap-4 border-l-4 border-[#373968]/30 pl-5">
                    <div class="w-10 h-10 flex items-center justify-center bg-white border-2 border-[#373968]/40 rounded-full shadow outline outline-[3px] outline-[#373968]/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#373968" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#373968]">Head Office</h3>
                        <p class="text-[#373968]/80">
                            No. 2 Ibrahim Ali Street, Off Alfa Wali Street, Asokoro new Extension, Guzape, Abuja, Nigeria
                        </p>

                        <h4 class="mt-4 text-sm font-semibold text-[#373968] uppercase tracking-wide">Branch Offices</h4>
                        <ul class="mt-2 space-y-1 text-sm text-[#373968]/80">
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

            <!-- Map -->
            <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" x-show="show"
                 x-transition.opacity.duration.1000ms
                 class="relative transition-opacity duration-700 opacity-0"
                 :class="{ 'opacity-100': show }">
                <div class="relative z-10 max-w-md mx-auto">
                    <div class="relative">
                        <img src="/assets/images/africa.svg" alt="Africa Map"
                             class="w-full h-auto transition-transform duration-500 hover:scale-105" />
                        <div class="absolute left-[41%] top-[30%]">
                            <div class="w-3 h-3 bg-[#0203f9] rounded-full animate-ping"></div>
                            <div class="w-2 h-2 bg-[#0203f9] rounded-full absolute top-0 left-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
