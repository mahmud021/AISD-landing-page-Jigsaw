<!-- About Section with Static Spread Cards and Orange Borders -->
<section id="about" data-spy>

    <section class="w-full py-12 md:py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-8 md:gap-12">
            <!-- Cards Container -->
            <div class="w-full lg:w-[45%]">
                <!-- Mobile Stack -->
                <div class="lg:hidden space-y-6">
                    <!-- Main Card -->
                    <div class="rounded-2xl bg-white shadow-lg border-4 border-[#373968] overflow-hidden transition-transform hover:scale-[1.02]">
                        <div class="p-4">
                            <img src='/assets/images/2.webp' alt="AISD community health initiative"
                                 class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                        </div>
                        <div class="px-4 pb-4">
                            <h3 class="font-semibold text-[#373968]">AISD in Action</h3>
                            <h4 class="text-sm font-medium text-[#373968]/80">Community Health Initiatives</h4>
                        </div>
                    </div>

                    <!-- Secondary Cards -->
                    <div class="rounded-2xl bg-white shadow-md border-4 border-[#373968]/20 overflow-hidden">
                        <div class="p-4">
                            <img src='/assets/images/5.webp' alt="AISD educational activity"
                                 class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white shadow-md border-4 border-[#373968]/20 overflow-hidden">
                        <div class="p-4">
                            <img src='/assets/images/4.webp' alt="AISD field work"
                                 class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                        </div>
                    </div>
                </div>

                <!-- Desktop Overlap -->
                <div class="hidden lg:block relative min-h-[360px]">
                    <div class="grid grid-cols-1 grid-rows-1 h-full">
                        <!-- Left Card -->
                        <div class="col-start-1 row-start-1 flex justify-start items-start">
                            <div class="w-[90%] -rotate-6 rounded-2xl bg-white shadow-lg border-4 border-[#373968]/20 transition-transform hover:scale-105 hover:z-10">
                                <div class="p-4">
                                    <img src='/assets/images/5.webp' alt="AISD activity"
                                         class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <!-- Right Card -->
                        <div class="col-start-1 row-start-1 flex justify-end items-start">
                            <div class="w-[90%] rotate-6 rounded-2xl bg-white shadow-lg border-4 border-[#373968] transition-transform hover:scale-105 hover:z-10">
                                <div class="p-4">
                                    <img src='/assets/images/4.webp' alt="AISD community work"
                                         class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                                </div>
                                <div class="px-4 pb-4">
                                    <h3 class="font-semibold text-[#373968]">AISD in Action</h3>
                                    <h4 class="text-sm font-medium text-[#373968]/80">Community Health Initiatives</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Center Card -->
                        <div class="col-start-1 row-start-1 flex justify-center items-start">
                            <div class="w-[90%] rounded-2xl bg-white shadow-xl border-4 border-[#373968]/20 transition-transform hover:scale-[1.03] hover:z-20">
                                <div class="p-4">
                                    <img src='/assets/images/2.webp' alt="AISD main initiative"
                                         class="w-full aspect-4/3 rounded-xl object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div class="w-full lg:w-[55%] space-y-4 md:space-y-6">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-teachers leading-tight md:leading-snug text-[#373968]">
                    A Commitment to Stronger
                   African Nations
                    Through Healthier Communities
                </h2>
                <p class="text-[#373968]/90 text-base md:text-lg leading-relaxed">
                    The Alliance for International Health and Development (AISD) is dedicated to strengthening health systems and enhancing well-being across Africa. As the development arm of the Maryam Abacha American University of Nigeria (MAAUN), AISD translates academic knowledge into real-world impact.
                </p>
                <p class="text-[#373968]/90 text-base md:text-lg leading-relaxed">
                    Our core philosophy is that healthier communities are the foundation of stronger nations. We are committed to developing sustainable, evidence-based, and locally-driven health solutions.
                </p>
            </div>
        </div>
    </section>


    <!-- Second Section (unchanged) -->
    <section class="overflow-hidden bg-white pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="-mx-4 flex flex-wrap items-center justify-between">

                <!-- Left: Enhanced Image Gallery -->
                <div class="w-full px-4 lg:w-6/12">
                    <div class="-mx-3 flex items-center sm:-mx-4">

                        <!-- Left Column -->
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <!-- Top Image -->
                            <!-- Top Image (Now Video) -->
                            <div class="py-3 sm:py-4 group relative">
                                <div class="overflow-hidden rounded-2xl border-4 border-white shadow-2xl
      transition-all duration-500 group-hover:border-[#373968]
      group-hover:shadow-lg group-hover:-translate-y-1">

                                    <!-- Click-to-Play Video Container -->
                                    <div class="aspect-video w-full relative cursor-pointer bg-black"
                                         onclick="this.innerHTML = `<iframe class='w-full h-full' src='https://www.youtube.com/embed/7oX7ZfvgCC4?autoplay=1&rel=0&modestbranding=1' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>`">

                                        <!-- YouTube Thumbnail (Auto-generated) -->
                                        <img src="https://img.youtube.com/vi/7oX7ZfvgCC4/maxresdefault.jpg"
                                             alt="Video thumbnail"
                                             class="w-full h-full object-cover opacity-90 hover:opacity-80 transition-opacity"
                                             onerror="this.src='https://img.youtube.com/vi/7oX7ZfvgCC4/hqdefault.jpg'">

                                        <!-- Play Button Overlay -->
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="h-16 w-16 bg-[#373968]/90 rounded-full flex items-center justify-center hover:bg-[#373968] transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-8 h-8 ml-1">
                                                    <path d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kept your decorative circle -->
                                <div class="absolute -bottom-3 -right-3 h-16 w-16 rounded-full bg-[#373968]/20
      group-hover:bg-[#373968]/30 transition-opacity duration-300"></div>
                            </div>
                            <!-- Bottom Image -->
                            <div class="py-3 sm:py-4 group relative">
                                <div class="overflow-hidden rounded-2xl border-4 border-white shadow-2xl
                transition-all duration-500 group-hover:border-[#373968]
                group-hover:shadow-lg group-hover:-translate-y-1">
                                    <img src='/assets/images/4.webp' alt="Field research work"
                                         class="w-full transform transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                                </div>
                                <div class="absolute -top-3 -left-3 h-12 w-12 rounded-lg bg-[#373968]/20 rotate-12
                group-hover:bg-[#373968]/30 transition-opacity duration-300"></div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="relative z-10 my-4 group">
                                <div class="overflow-hidden rounded-2xl border-8 border-white shadow-[0_25px_50px_-15px_rgba(0,0,0,0.3)]
                transition-all duration-500 group-hover:border-[#373968]/90 group-hover:shadow-xl">
                                    <img src='/assets/images/3.webp' alt="Team collaboration"
                                         class="w-full transform transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                                </div>
                                <span class="absolute -bottom-6 -right-6 z-[-1] h-14 w-14 rounded-full bg-[#373968]/20
                group-hover:bg-[#373968]/30 transition-all duration-500"></span>
                                <span class="absolute -top-6 -left-6 z-[-1] h-10 w-10 rotate-45 bg-[#373968]/20
                group-hover:bg-[#373968]/30 transition-all duration-500"></span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right: Content Section -->
                <div class="w-full lg:w-1/2 px-4 mt-10 lg:mt-0">
                    <div class="text-center mb-12">
          <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
            About Us
          </span>

                        <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] mb-4 teachers-font">
                            Learn About OurMission and Work
                        </h2>

                        <p class="text-lg text-[#373968]/80 max-w-3xl mx-auto">
                            To improve health outcomes and well-being across Nigeria and Africa through people-centered innovation, evidence-based advocacy, and community-led solutions.
                        </p>
                    </div>

                    <!-- Info Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Item 1 -->
                        <div class="bg-white p-6 rounded-xl border-l-4 border-[#373968] shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex items-start">
                                <span class="text-4xl font-bold text-[#373968] mr-4">1.</span>
                                <div>
                                    <h4 class="text-xl font-bold text-[#373968] mb-2">Our Mission</h4>
                                    <p class="text-[#373968]/80 text-sm leading-relaxed">
                                        We focus on four key areas: conducting applied research, engaging communities in co-designing solutions, collaborating with institutions, and strengthening capacity.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="bg-white p-6 rounded-xl border-l-4 border-[#373968]/60 shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex items-start">
                                <span class="text-4xl font-bold text-[#373968] mr-4">2.</span>
                                <div>
                                    <h4 class="text-xl font-bold text-[#373968] mb-2">Our Health Strategy</h4>
                                    <p class="text-[#373968]/80 text-sm leading-relaxed">
                                        We help by using evidence-based research, community-centered design, institutional collaboration, and strategic capacity strengthening.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="bg-white p-6 rounded-xl border-l-4 border-[#373968]/80 shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex items-start">
                                <span class="text-4xl font-bold text-[#373968] mr-4">3.</span>
                                <div>
                                    <h4 class="text-xl font-bold text-[#373968] mb-2">Collaborative Approach</h4>
                                    <p class="text-[#373968]/80 text-sm leading-relaxed">
                                        We are creating a future where all communities are empowered to lead healthier lives through accountable health systems.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="bg-white p-6 rounded-xl border-l-4 border-[#373968] shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex items-start">
                                <span class="text-4xl font-bold text-[#373968] mr-4">4.</span>
                                <div>
                                    <h4 class="text-xl font-bold text-[#373968] mb-2">Our Vision</h4>
                                    <p class="text-[#373968]/80 text-sm leading-relaxed">
                                        A future where health equity is driven by data, strengthened institutions, and empowered local leadership.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</section>
