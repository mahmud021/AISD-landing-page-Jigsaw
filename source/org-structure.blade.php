---
title: Organizational Structure
description: Meet the full team behind our work
layout: layouts.main
permalink: /org-structure/
---
@extends('_layouts.main')

@section('body')
    <section id="team" class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">Our Team</h2>
                <p class="text-3xl sm:text-4xl font-bold text-gray-800">
                    Meet the People Driving Our Mission Forward
                </p>
            </div>

            <!-- Tabs Navigation -->
            <div class="w-full mx-auto mb-8">
                <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b border-gray-200">
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-100">
                        <a id="default-tab" href="#leadership">Leadership</a>
                    </li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                        <a href="#department-heads">Department Heads</a>
                    </li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                        <a href="#technical">Technical Leads</a>
                    </li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                        <a href="#operations">Operations</a>
                    </li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                        <a href="#volunteers">Volunteers</a>
                    </li>
                </ul>
            </div>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <!-- 1. Leadership Tab -->
                <div id="leadership" class="p-4">
                    <div class="flex flex-col items-center space-y-16">
                        <!-- Board of Trustees -->
                        <div class="text-center w-full">
                            <h3 class="text-lg font-semibold text-gray-700 mb-6">Board of Trustees</h3>
                            <div class="flex justify-center">
                                <div class="mx-4">
                                    <img class="w-24 h-24 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/draudu.webp' alt="Dr. Audu Liman" />
                                    <p class="mt-3 text-sm font-medium text-gray-800">Dr. Audu Liman</p>
                                    <p class="text-xs text-gray-500">Chairman, Board of Trustees</p>
                                </div>
                            </div>
                        </div>

                        <!-- Executive Leadership -->
                        <div class="text-center w-full">
                            <h3 class="text-lg font-semibold text-gray-700 mb-6">Executive Leadership</h3>
                            <div class="flex flex-wrap justify-center gap-8">
                                <div class="mx-4">
                                    <img class="w-24 h-24 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/salisu.webp' alt="Dr. Salisu Lawal" />
                                    <p class="mt-3 text-sm font-medium text-gray-800">Dr. Salisu Lawal</p>
                                    <p class="text-xs text-gray-500">Executive Director</p>
                                </div>
                                <div class="mx-4">
                                    <img class="w-24 h-24 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/mohammed.webp' alt="Mohammed Adamu" />
                                    <p class="mt-3 text-sm font-medium text-gray-800">Mohammed Adamu</p>
                                    <p class="text-xs text-gray-500">Director, HR & Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Department Heads Tab -->
                <div id="department-heads" class="hidden p-4">
                    <div class="text-center">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/musagambo.webp' alt="Musa Gambo" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Musa Gambo</p>
                                <p class="text-xs text-gray-500">Head of Programs</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/muyiwa.webp' alt="Muyiwa Oluwe" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Muyiwa Oluwe</p>
                                <p class="text-xs text-gray-500">Head, Systems Strengthening (Abuja)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/haladu.webp' alt="Haladu Mohammed" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Haladu Mohammed</p>
                                <p class="text-xs text-gray-500">Head of Education</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/nafisa.webp' alt="Nafisa Ado" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Nafisa Ado</p>
                                <p class="text-xs text-gray-500">Head of Partnerships (Abuja)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/aminu.webp' alt="Dr. Aminu Bichi" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Dr. Aminu Bichi</p>
                                <p class="text-xs text-gray-500">Head of Assessments (Abuja)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/isiaka.webp' alt="Isiaka Alfa" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Isiaka Alfa</p>
                                <p class="text-xs text-gray-500">Head of Security</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/prince.webp' alt="Prince Effah" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Prince Effah</p>
                                <p class="text-xs text-gray-500">Head of Logistics (Abuja)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Technical Leads Tab -->
                <div id="technical" class="hidden p-4">
                    <div class="text-center">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/yahaya.webp' alt="Dr. Yahaya Danmaraya" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Dr. Yahaya Danmaraya</p>
                                <p class="text-xs text-gray-500">Research and Education Specialist</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/abdulsalam.webp' alt="Abdulsalam Sabiu Liman" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Abdulsalam Sabiu Liman</p>
                                <p class="text-xs text-gray-500">Research Officer</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/abdullahi.webp' alt="Abdullahi Umar Adamu" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Abdullahi Umar Adamu</p>
                                <p class="text-xs text-gray-500">M&E Officer</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/haruna.webp' alt="Haruna Aliyu Obida" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Haruna Aliyu Obida</p>
                                <p class="text-xs text-gray-500">Vocational Skills Training Officer</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/musa.webp' alt="Musa Usman Dibal" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Musa Usman Dibal</p>
                                <p class="text-xs text-gray-500">TPD Advisor</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/nasir.webp' alt="Dr. Nasir Baba" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Dr. Nasir Baba</p>
                                <p class="text-xs text-gray-500">Associate-iTPD</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/razi.webp' alt="Razi Abdullahi" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Razi Abdullahi</p>
                                <p class="text-xs text-gray-500">Associate - Partnerships</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/yusuf.webp' alt="Yusuf Kolo Yaro" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Yusuf Kolo Yaro</p>
                                <p class="text-xs text-gray-500">Associate</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/siham.webp' alt="Siham Thabit" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Siham Thabit</p>
                                <p class="text-xs text-gray-500">Associate - Livelihood Coordinator</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/bulama.webp' alt="Bulama Algoni" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Bulama Algoni</p>
                                <p class="text-xs text-gray-500">Associate - GBV/Livelihood Officer</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/nathaniel.webp' alt="Nathaniel Odeh" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Nathaniel Odeh</p>
                                <p class="text-xs text-gray-500">Associate - M&E Specialist</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/bukar.webp' alt="Bukar Alhaji Dogo" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Bukar Alhaji Dogo</p>
                                <p class="text-xs text-gray-500">Associate - Training Center Manager (Ngala)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Operations Tab -->
                <div id="operations" class="hidden p-4">
                    <div class="text-center">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/rabiu.webp' alt="Rabiu Dakata" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Rabiu Dakata</p>
                                <p class="text-xs text-gray-500">Logistic Officer</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/fatima.webp' alt="Fatima Ma'aji" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Fatima Ma'aji</p>
                                <p class="text-xs text-gray-500">Office Manager, Abuja</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/umar.webp' alt="Umar Aminu" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Umar Aminu</p>
                                <p class="text-xs text-gray-500">Office Manager, Zamfara</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/ahmed.webp' alt="Ahmed Muhammad" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Ahmed Muhammad</p>
                                <p class="text-xs text-gray-500">Office Manager, Kaduna</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/support.webp' alt="Support Staff" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Janitors, Drivers, Admin Assistant</p>
                                <p class="text-xs text-gray-500">(Support Roles)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/procurement.webp' alt="Procurement Team" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Procurement/Assets Officers</p>
                                <p class="text-xs text-gray-500">(Role Listed)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Volunteers Tab -->
                <div id="volunteers" class="hidden p-4">
                    <div class="text-center">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/aisha.webp' alt="Aisha Muhammad Adam" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Aisha Muhammad Adam</p>
                                <p class="text-xs text-gray-500">NYSC Intern (Kano)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/hafsat.webp' alt="Hafsat Abba Danmaraya" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Hafsat Abba Danmaraya</p>
                                <p class="text-xs text-gray-500">NYSC Intern (Kano)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/zainab.webp' alt="Zainab Umar Chedi" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Zainab Umar Chedi</p>
                                <p class="text-xs text-gray-500">Volunteer Intern (Kano)</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/zainabm.webp' alt="Zainab Magaji Ahmed" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Zainab Magaji Ahmed</p>
                                <p class="text-xs text-gray-500">Volunteer HR-Assistant</p>
                            </div>
                            <div>
                                <img class="w-20 h-20 mx-auto rounded-full object-cover border-2 border-white shadow" src='/assets/images/team/lyra.webp' alt="Lyra Samuel Zirawara" />
                                <p class="mt-3 text-sm font-medium text-gray-800">Lyra Samuel Zirawara</p>
                                <p class="text-xs text-gray-500">Volunteer Senior Education Program Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let tabsContainer = document.querySelector("#tabs");
        let tabTogglers = tabsContainer.querySelectorAll("a");

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                // Hide all tab contents and deactivate all tabs
                for (let i = 0; i < tabContents.children.length; i++) {
                    tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b-2", "-mb-px", "opacity-100");
                    tabTogglers[i].parentElement.classList.add("opacity-50");
                    tabContents.children[i].classList.add("hidden");
                }

                // Show the selected tab content and activate the tab
                document.querySelector(tabName).classList.remove("hidden");
                this.parentElement.classList.add("border-blue-400", "border-b-2", "-mb-px", "opacity-100");
                this.parentElement.classList.remove("opacity-50");
            });
        });

        // Activate the default tab on page load
        document.getElementById("default-tab").click();
    </script>
@endsection