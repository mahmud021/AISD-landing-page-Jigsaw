<section id="leadership" class="py-16 bg-white" data-spy>
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="inline-block py-1.5 px-4 bg-[#373968]/10 text-[#373968] rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Our Leadership
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#373968] mb-4 teachers-font">
                Strategic <span class="underline decoration-[#373968]/40 underline-offset-4">Guidance for Impact</span>
            </h2>
            <p class="text-lg text-[#373968]/80 max-w-3xl mx-auto">
                While we proudly highlight our leadership team here, we're deeply grateful for our entire staff of
                dedicated professionals who work tirelessly behind the scenes to make our mission possible every day.
            </p>
        </div>

        <!-- Leadership Avatars -->
        <section class="py-4 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid gap-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <!-- Member Card -->
                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="/assets/images/team/draudu.webp" alt="Dr. Audu Liman" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Dr. Audu Liman</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Executive Chairman</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="/assets/images/team/salisu.webp" alt="Dr. Salisu Lawal" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Dr. Salisu Lawal</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Executive Director</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="/assets/images/team/mohammed.webp" alt="Mohammed Adamu" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Mohammed Adamu</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Director, HR & Admin</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="https://api.dicebear.com/9.x/initials/svg?seed=HM" alt="Hamza Mohammed" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Hamza Mohammed</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Senior Finance Officer</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="/assets/images/team/gambo.webp" alt="Musa Gambo" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Musa Gambo</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Head of Programs</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-[#373968]/10 p-6 text-center shadow-md hover:shadow-xl transition-transform duration-300 hover:scale-105">
                        <img loading="lazy" src="https://api.dicebear.com/9.x/initials/svg?seed=AB" alt="Dr. Aminu Bichi" class="mb-4 h-32 w-32 rounded-xl mx-auto ring-2 ring-[#373968]/10 hover:ring-[#0203f9] transition">
                        <h4 class="teachers-font text-lg md:text-xl font-bold text-[#373968] mb-1">Dr. Aminu Bichi</h4>
                        <p class="uppercase text-xs tracking-wider text-[#373968]/60">Head of Assessments</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Scrolling Marquee for Broader Team -->
        <div class="pt-20">
            <h3 class="text-center text-xl font-semibold text-[#373968] mb-6">Our Broader Team</h3>

            @php
                $staff = [
                  ['name' => 'Abdulkadir Ahmed', 'role' => 'Finance Officer'],
                  ['name' => 'Dr Salisu Mohmmed Lawal', 'role' => 'Executive Director'],
                  ['name' => 'Dr. Yahaya Danmaraya', 'role' => 'Research and Education Specialist'],
                  ['name' => 'Abdullahi Umar Adamu', 'role' => 'M&E Officer'],
                  ['name' => 'Abdulsalam Sabiu Liman', 'role' => 'Research Officer'],
                  ['name' => 'Aisha Muhammad Adam', 'role' => 'NYSC Intern'],
                  ['name' => 'Hafsat Abba Danmaraya', 'role' => 'NYSC Intern'],
                  ['name' => 'Zainab Umar Chedi', 'role' => 'Volunteer'],
                  ['name' => 'Rabiu Dakata', 'role' => 'Logistic Officer'],
                  ['name' => 'Mahjuba Nuruddeen Maisikeli', 'role' => 'Education Officer'],
                  ['name' => 'Haruna Aliyu Obida', 'role' => 'Vocational Skills Training Officer'],
                  ['name' => 'Muyiwa Oluwe', 'role' => 'Head Systems Strengthening'],
                  ['name' => 'Haladu Mohammed', 'role' => 'Head of Education'],
                  ['name' => 'Nafisa Ado', 'role' => 'Head of Partnerships'],
                  ['name' => 'Musa Usman Dibal', 'role' => 'TPD Advisor'],
                  ['name' => 'Isiaka Alfa', 'role' => 'Head of Security'],
                  ['name' => 'Dr. Nasir Baba', 'role' => 'Associate - iTPD'],
                  ['name' => 'Razi Abdullahi', 'role' => 'Associate - Partnership'],
                  ['name' => 'Yusuf Kolo Yaro', 'role' => 'Associate'],
                  ['name' => "Fatima Ma'aji", 'role' => 'Heads of Operations'],
                  ['name' => 'Prince Effah', 'role' => 'Head of Logistics'],
                  ['name' => 'Zainab Magaji Ahmed', 'role' => 'Volunteer HR Assistant'],
                  ['name' => 'Lyra Samuel Zirawara', 'role' => 'Volunteer Education Officer'],
                  ['name' => 'Ahmed Muhammad', 'role' => 'Office Manager, Kaduna'],
                  ['name' => 'Umar Aminu', 'role' => 'Office Manager, Zamfara'],
                  ['name' => 'Shlam Thabit', 'role' => 'Livelihood Coordinator'],
                  ['name' => 'Bulama Algoni', 'role' => 'GBV/Livelihood Officer'],
                  ['name' => 'Nathaniel Odeh', 'role' => 'M&E Specialist'],
                  ['name' => 'Bukar Alhaji Dogo', 'role' => 'Training Center Manager (Ngala)'],
                  ['name' => 'Ibrahim Mohammad', 'role' => 'Training Center Manager (Bama)'],
                  ['name' => 'Usman Sani Chironari', 'role' => 'Head of Field Office'],
                  ['name' => 'Abdulkadir Jajare', 'role' => 'M&E Officer'],
                ];

                $chunks = array_chunk($staff, ceil(count($staff) / 3));
            @endphp

            @foreach($chunks as $index => $group)
                <div class="overflow-hidden mb-10 relative">
                    <div class="flex gap-4 w-max animate-marquee-slow {{ $index % 2 === 1 ? 'marquee-reverse' : '' }}">
                        @foreach($group as $member)
                            <div class="min-w-[220px] flex-none bg-white rounded-xl border border-[#373968]/10 shadow hover:shadow-lg transition p-4">
                                <div class="text-sm font-semibold text-[#373968]">{{ $member['name'] }}</div>
                                <div class="text-xs text-[#373968]/80 mt-1">{{ $member['role'] }}</div>
                            </div>
                        @endforeach
                        @foreach($group as $member)
                            <div class="min-w-[220px] flex-none bg-white rounded-xl border border-[#373968]/10 shadow hover:shadow-lg transition p-4">
                                <div class="text-sm font-semibold text-[#373968]">{{ $member['name'] }}</div>
                                <div class="text-xs text-[#373968]/80 mt-1">{{ $member['role'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center pt-10">
            <p class="text-[#373968]/80 mb-6 max-w-2xl mx-auto">
                Every member of our team plays a vital role in creating change. We appreciate their commitment and service.
            </p>
        </div>
    </div>
</section>

<style>
    @keyframes marquee-slow {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee-slow {
        animation: marquee-slow 60s linear infinite;
    }
    .marquee-reverse {
        animation-direction: reverse;
    }
</style>