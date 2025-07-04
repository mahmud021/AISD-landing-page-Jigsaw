<section id="gallery" class="relative bg-white py-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute -left-20 -top-20 w-96 h-96 rounded-full bg-[#0203f9]/5 blur-3xl"></div>
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-[#373968]/5 blur-3xl"></div>
    </div>

    <!-- Header -->
    <div class="text-center mb-16 relative z-20 px-4">
        <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
            Our Gallery
        </span>
        <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] max-w-2xl mx-auto leading-tight teachers-font">
            Visual <span class="text-[#0203f9]">Highlights</span> From Our Work
        </h2>
        <p class="text-lg text-[#373968]/80 max-w-2xl mx-auto mt-4">
            A look into our events, outreach, and field work across Nigeria and beyond.
        </p>
    </div>

    <!-- Marquee Rows -->
    <div class="relative z-10 space-y-12">
        <!-- Row 1 -->
        <div class="overflow-hidden py-4">
            <div class="flex w-max animate-marquee-slow hover:paused">
                @foreach([1,2,3,4,5] as $i)
                    <div class="mx-4 w-64 md:w-96 h-56 md:h-72 flex-shrink-0 rounded-2xl overflow-hidden border-4 border-white shadow-lg relative">
                        <img src="{{ url('/assets/images/' . $i . '.webp') }}"
                             class="absolute inset-0 w-full h-full object-cover"
                             loading="lazy"
                             alt="Project highlight {{ $i }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white font-medium translate-y-4 hover:translate-y-0 transition-transform duration-300">
                                Project Highlight #{{ $i }}
                            </p>
                        </div>
                    </div>
                @endforeach
                @foreach([1,2,3,4,5] as $i)
                    <div class="mx-4 w-64 md:w-96 h-56 md:h-72 flex-shrink-0 rounded-2xl overflow-hidden border-4 border-white shadow-lg relative" aria-hidden="true">
                        <img src="{{ url('/assets/images/' . $i . '.webp') }}"
                             class="absolute inset-0 w-full h-full object-cover"
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Row 2 -->
        <div class="overflow-hidden py-4">
            <div class="flex w-max animate-marquee-fast hover:paused">
                @foreach([6,7,8,9,10] as $i)
                    <div class="mx-4 w-48 md:w-64 h-40 md:h-52 flex-shrink-0 rounded-xl overflow-hidden border-4 border-white shadow-md">
                        <img src="{{ url('/assets/images/' . $i . '.webp') }}"
                             class="w-full h-full object-cover"
                             loading="lazy"
                             alt="Gallery image {{ $i }}">
                    </div>
                @endforeach
                @foreach([6,7,8,9,10] as $i)
                    <div class="mx-4 w-48 md:w-64 h-40 md:h-52 flex-shrink-0 rounded-xl overflow-hidden border-4 border-white shadow-md" aria-hidden="true">
                        <img src="{{ url('/assets/images/' . $i . '.webp') }}"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Fades -->
    <div class="pointer-events-none absolute inset-y-0 left-0 w-32 h-full bg-gradient-to-r from-white via-white/50 to-transparent z-20"></div>
    <div class="pointer-events-none absolute inset-y-0 right-0 w-32 h-full bg-gradient-to-l from-white via-white/50 to-transparent z-20"></div>
</section>
