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
        <div class="space-y-20">
            <!-- Board -->
            <div class="text-center">
                <h3 class="text-xl font-semibold text-[#373968] mb-8 relative inline-block">
                    <span class="relative z-10 px-4 bg-white">Board of Trustees</span>
                    <span class="absolute left-0 right-0 top-1/2 h-px bg-[#373968]/20 -z-0"></span>
                </h3>
                <div class="flex justify-center">
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#373968]/20 to-[#373968]/40 rounded-full blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <div class="relative bg-white p-1 rounded-full">
                            <img class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg"
                                 src='/assets/images/team/draudu.webp'
                                 alt="Dr. Audu Liman"
                                 loading="lazy" />
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-lg font-medium text-[#373968]">Dr. Audu Liman</p>
                            <p class="text-sm text-[#373968]/80 font-medium">Executive Chairman</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Executive Team -->
            <div class="text-center">
                <h3 class="text-xl font-semibold text-[#373968] mb-8 relative inline-block">
                    <span class="relative z-10 px-4 bg-white">Executive Team</span>
                    <span class="absolute left-0 right-0 top-1/2 h-px bg-[#373968]/20 -z-0"></span>
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 max-w-4xl mx-auto">
                    @foreach([
                      ['img' => '/assets/images/team/salisu.webp', 'name' => 'Dr. Salisu Lawal', 'role' => 'Executive Director'],
                      ['img' => '/assets/images/team/mohammed.webp', 'name' => 'Mohammed Adamu', 'role' => 'Director, HR & Admin'],
                      ['img' => 'https://api.dicebear.com/9.x/initials/svg?seed=HM', 'name' => 'Hamza Mohammed', 'role' => 'Senior Finance Officer'],
                    ] as $member)
                        <div class="group">
                            <div class="relative bg-white p-1 rounded-full w-32 h-32 mx-auto mb-4">
                                <img class="w-full h-full rounded-full object-cover border-4 border-white shadow-lg"
                                     src="{{ $member['img'] }}"
                                     alt="{{ $member['name'] }}"
                                     loading="lazy" />
                                <div class="absolute inset-0 rounded-full border-2 border-[#373968] opacity-0 group-hover:opacity-100 transition duration-300"></div>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-medium text-[#373968]">{{ $member['name'] }}</p>
                                <p class="text-sm text-[#373968]/80">{{ $member['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Program Heads -->
            <div class="text-center">
                <h3 class="text-xl font-semibold text-[#373968] mb-8 relative inline-block">
                    <span class="relative z-10 px-4 bg-white">Program Leadership</span>
                    <span class="absolute left-0 right-0 top-1/2 h-px bg-[#373968]/20 -z-0"></span>
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    @foreach([
                      ['img' => '/assets/images/team/gambo.webp', 'name' => 'Musa Gambo', 'role' => 'Head of Programs'],
                      ['img' => 'https://api.dicebear.com/9.x/initials/svg?seed=AB', 'name' => 'Dr. Aminu Bichi', 'role' => 'Head of Assessments'],
                    ] as $member)
                        <div class="group">
                            <div class="relative bg-white p-1 rounded-full w-28 h-28 mx-auto mb-4">
                                <img class="w-full h-full rounded-full object-cover border-4 border-white shadow-lg"
                                     src="{{ $member['img'] }}"
                                     alt="{{ $member['name'] }}"
                                     loading="lazy" />
                                <div class="absolute inset-0 rounded-full border-2 border-[#373968] opacity-0 group-hover:opacity-100 transition duration-300"></div>
                            </div>
                            <div class="text-center">
                                <p class="font-medium text-[#373968]">{{ $member['name'] }}</p>
                                <p class="text-xs text-[#373968]/80">{{ $member['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

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