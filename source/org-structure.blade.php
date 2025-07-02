---
title: Organizational Structure
description: Meet the full team behind our work
layout: layouts.main
permalink: /org-structure/
---
@extends('_layouts.main')

@section('body')
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-sm font-bold uppercase tracking-widest text-blue-700 mb-2">Organizational Structure</h2>
                <p class="text-3xl sm:text-4xl font-bold text-gray-800">Meet the Entire AISD Team</p>
            </div>

            <!-- 1. Board of Trustees -->
            <div class="mb-16">
                <h3 class="text-lg font-semibold text-gray-700 mb-6">Board of Trustees</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Dr. Audu Liman" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Dr. Audu Liman</p>
                        <p class="text-xs text-gray-500">Executive Chairman / Chair of Board</p>
                    </div>
                </div>
            </div>

            <!-- 2. Executive Leadership -->
            <div class="mb-16">
                <h3 class="text-lg font-semibold text-gray-700 mb-6">Executive Leadership</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Dr. Salisu Lawal" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Dr. Salisu Lawal</p>
                        <p class="text-xs text-gray-500">Executive Director</p>
                    </div>
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Mohammed Adamu" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Mohammed Adamu</p>
                        <p class="text-xs text-gray-500">Director, HR & Admin</p>
                    </div>
                </div>
            </div>

            <!-- 3. Department Heads -->
            <div class="mb-16">
                <h3 class="text-lg font-semibold text-gray-700 mb-6">Department Heads</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Musa Gambo" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Musa Gambo</p>
                        <p class="text-xs text-gray-500">Head of Programs</p>
                    </div>
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Haladu Mohammed" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Haladu Mohammed</p>
                        <p class="text-xs text-gray-500">Head of Education</p>
                    </div>
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Dr. Aminu Bichi" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Dr. Aminu Bichi</p>
                        <p class="text-xs text-gray-500">Head of Assessments</p>
                    </div>
                    <div>
                        <img class="w-20 h-20 mx-auto rounded-full object-cover" src="https://via.placeholder.com/80" alt="Prince Effah" />
                        <p class="mt-3 text-sm font-medium text-gray-800">Prince Effah</p>
                        <p class="text-xs text-gray-500">Head of Logistics</p>
                    </div>
                </div>
            </div>

            <!-- You can continue adding other groups if needed (Program Leads, Interns, etc) -->

        </div>
    </section>
@endsection
