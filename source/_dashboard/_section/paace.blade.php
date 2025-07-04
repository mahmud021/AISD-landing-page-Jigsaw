<!-- PAACE Vision Section -->
<section id="paace" class="py-16 bg-white sm:py-20 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Our Strategic Framework
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] mb-4 teachers-font">
                The <span class="text-[#373968]">PAAC Vision</span>
            </h2>
            <p class="text-lg text-[#373968]/80 max-w-3xl mx-auto">
                At AISD, our mission is to drive transformative change in health. We achieve this through our comprehensive
                <strong class="text-[#373968]">PAAC Vision</strong>, a strategic framework that guides every innovation, policy reform, and community
                engagement we undertake. It's our commitment to creating a healthier future for all.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 mt-12 gap-y-12 text-center sm:grid-cols-2 sm:gap-x-12 md:grid-cols-4 md:gap-y-16 xl:mt-20">
            @foreach([
              ['letter' => 'P', 'title' => 'Promoting Health Advancement', 'desc' => 'Championing innovations and inclusive systems to improve health outcomes and quality of life for all.', 'icon' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/>'],
              ['letter' => 'A', 'title' => 'Accountability', 'desc' => 'Fostering transparency and evidence-driven action in public and community health engagement.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/>'],
              ['letter' => 'A', 'title' => 'Advancement', 'desc' => 'Driving forward policies, practices, and platforms that elevate public health equity and reach.', 'icon' => '<path d="M7 7h10v10"/><path d="M7 17 17 7"/>'],
              ['letter' => 'C', 'title' => 'Citizen Engagement', 'desc' => 'Empowering communities to take part in shaping solutions and holding systems accountable.', 'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>' ]
            ] as $item)
                <div class="md:px-4 @if(!$loop->first) md:border-l md:border-[#373968]/10 @endif relative">
                    <div class="absolute text-[100px] font-black text-[#373968]/5 top-2 right-4 pointer-events-none z-0">
                        {{ $item['letter'] }}
                    </div>
                    <div class="relative z-10 flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-[#373968] rounded-full shadow-md outline outline-[3px] outline-[#373968]/20 transition-transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-[#373968]" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>
                    <h3 class="mt-8 text-xl font-bold text-[#373968]">{{ $item['title'] }}</h3>
                    <p class="mt-4 text-base text-[#373968]/80">
                        {{ $item['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>