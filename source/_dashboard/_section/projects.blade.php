<!-- Projects (Ongoing Activities) Section -->
<section id="projects">
    <!-- Ongoing Projects -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-16">
            <!-- Section Header -->
            <div class="text-center">
                <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Current Activities
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] mb-4 teachers-font">
                    Ongoing <span class="text-[#0203f9]">Projects & Field Engagements</span>
                </h2>
                <p class="text-[#373968]/80 text-lg max-w-3xl mx-auto">
                    From education and health to youth empowerment, AISD is actively implementing community-rooted projects across Nigeria.
                </p>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white border border-[#373968]/10 rounded-2xl shadow-md overflow-hidden flex flex-col hover:shadow-lg transition">
                    <img src="{{ url('/assets/images/6.webp') }}" alt="Out-of-School Study" class="w-full h-40 object-cover">
                    <div class="p-5 flex flex-col gap-4">
                        <span class="inline-block w-fit px-2 py-0.5 bg-[#373968]/10 text-[#373968] text-xs font-semibold rounded">
                            Access to Education
                        </span>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-base font-bold text-[#373968] leading-snug">Out-of-School Children Study</h3>
                            <p class="text-sm text-[#373968]/80 leading-relaxed">
                                Investigating drivers of out-of-school children in Kano State to inform recommendations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white border border-[#373968]/10 rounded-2xl shadow-md overflow-hidden flex flex-col hover:shadow-lg transition">
                    <img src="{{ url('/assets/images/7.webp') }}" alt="Child Labor Study" class="w-full h-40 object-cover">
                    <div class="p-5 flex flex-col gap-4">
                        <span class="inline-block w-fit px-2 py-0.5 bg-[#373968]/10 text-[#373968] text-xs font-semibold rounded">
                            Child Protection
                        </span>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-base font-bold text-[#373968] leading-snug">Child Labor Study</h3>
                            <p class="text-sm text-[#373968]/80 leading-relaxed">
                                Examining factors of child labor to propose actionable solutions and mitigate practices.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white border border-[#373968]/10 rounded-2xl shadow-md overflow-hidden flex flex-col hover:shadow-lg transition">
                    <img src="{{ url('/assets/images/8.webp') }}" alt="Diabetes Study" class="w-full h-40 object-cover">
                    <div class="p-5 flex flex-col gap-4">
                        <span class="inline-block w-fit px-2 py-0.5 bg-[#373968]/10 text-[#373968] text-xs font-semibold rounded">
                            Public Health
                        </span>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-base font-bold text-[#373968] leading-snug">Diabetes Study</h3>
                            <p class="text-sm text-[#373968]/80 leading-relaxed">
                                Researching rising diabetes incidences in Northern Nigeria to offer prevention strategies.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white border border-[#373968]/10 rounded-2xl shadow-md overflow-hidden flex flex-col hover:shadow-lg transition">
                    <img src="{{ url('/assets/images/9.webp') }}" alt="Drug Vigilance Study" class="w-full h-40 object-cover">
                    <div class="p-5 flex flex-col gap-4">
                        <span class="inline-block w-fit px-2 py-0.5 bg-[#373968]/10 text-[#373968] text-xs font-semibold rounded">
                            Substance Control
                        </span>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-base font-bold text-[#373968] leading-snug">Drug Vigilance Study</h3>
                            <p class="text-sm text-[#373968]/80 leading-relaxed">
                                Assessing drug misuse among youth to guide government remediation actions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Projects -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Projects We Have Done
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] mb-4 teachers-font">
                    Holistic Development: <span class="text-[#0203f9]">Community-Led Transformation</span>
                </h2>
                <p class="text-[#373968]/80 text-lg max-w-3xl mx-auto">
                    Our past interventions have laid the foundation for resilient communities, sustainable progress, and inclusive growth.
                </p>
            </div>

            <!-- Project Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['img' => '10.webp', 'title' => 'Girl Child Education Program', 'desc' => 'Empowers JSS3 and SS3 girls to excel in exit exams through after-school tutoring by MAAUN student mentors.'],
                    ['img' => '11.webp', 'title' => 'Hygiene Promotion Campaign', 'desc' => 'MAAUN students educate communities on waste management and environmental cleanliness.'],
                    ['img' => '12.webp', 'title' => 'Out-of-School Children Program', 'desc' => 'Provides alternative schooling and daily nutrition to street hawkers and child laborers.'],
                    ['img' => '13.webp', 'title' => 'Conflict Management and Peacebuilding', 'desc' => 'Equipping individuals with communication and mediation skills for conflict resolution.'],
                    ['img' => '14.webp', 'title' => 'Livelihood Training Centers', 'desc' => 'Training centers in Maiduguri, Bama, and Ngala for vocational skills.'],
                    ['img' => '15.webp', 'title' => 'Economic Empowerment Initiative', 'desc' => 'Boot camps for women and youth traders focused on business and financial skills.']
                ] as $project)
                    <div class="relative overflow-hidden rounded-2xl shadow-md group hover:shadow-lg transition">
                        <!-- Project Image -->
                        <img src="{{ url('/assets/images/' . $project['img']) }}" alt="{{ $project['title'] }}"
                             class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <!-- Text Content -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-bold drop-shadow-md">{{ $project['title'] }}</h3>
                            <p class="text-sm mt-1 drop-shadow-md">{{ $project['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
