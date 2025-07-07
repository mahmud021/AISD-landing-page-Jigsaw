@extends('_layouts.main')
@section('title', 'African Institute for Solutions and Development')
@section('description', 'Empowering African communities through innovative, evidence-based health solutions and partnerships. AISD drives health equity and sustainable development across Africa.')

@section('body')

    <nav
            x-data="{ open: false, active: '' }"
            x-init="
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    active = entry.target.id;
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('[data-spy]').forEach(section => observer.observe(section));
    "
            class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-white/60 shadow-sm border-b border-white/30"
    >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo + AISD Name -->
                <a href="#hero" class="flex items-center space-x-2 group">
                    <img src="/assets/images/logo.webp" alt="AISD Logo" class="h-8 w-auto">
                    <span class="text-lg font-bold text-[#373968] group-hover:text-[#0203f9] transition">
                    AISD
                </span>
                </a>

                <!-- Desktop Nav -->
                <div class="hidden sm:flex space-x-6">
                    <template x-for="item in [
                    { id: 'hero', label: 'Home' },
                    { id: 'about', label: 'About' },
                    { id: 'paace', label: 'PAACE Vision' },
                    { id: 'partners', label: 'Partners' },
                    { id: 'projects', label: 'Projects' },
                    { id: 'volunteers', label: 'The Team' },
                    { id: 'gallery', label: 'Gallery' },
                    { id: 'contact', label: 'Contact' },
                ]" :key="item.id">
                        <a
                                :href="`#${item.id}`"
                                :class="active === item.id
                            ? 'text-[#0203f9] font-semibold nav-link'
                            : 'text-[#373968] hover:text-[#0203f9] nav-link'"
                                class="transition px-1 py-2"
                                x-text="item.label"
                        ></a>
                    </template>
                </div>

                <!-- Mobile toggle -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = !open" class="text-[#373968] hover:text-[#0203f9] focus:outline-none">
                        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div x-show="open" x-transition class="sm:hidden bg-white/70 backdrop-blur-md border-t border-white/30">
            <div class="px-4 pt-4 pb-6 space-y-2">
                <template x-for="item in [
                { id: 'hero', label: 'Home' },
                { id: 'about', label: 'About' },
                { id: 'paace', label: 'PAACE Vision' },
                { id: 'partners', label: 'Partners' },
                { id: 'projects', label: 'Projects' },
                { id: 'volunteers', label: 'The Team' },
                { id: 'gallery', label: 'Gallery' },
                { id: 'contact', label: 'Contact' },
            ]" :key="item.id">
                    <a
                            :href="`#${item.id}`"
                            @click="open = false"
                            :class="active === item.id
                        ? 'text-[#0203f9] font-semibold nav-link'
                        : 'text-[#373968] hover:text-[#0203f9] nav-link'"
                            class="block px-1 py-2"
                            x-text="item.label"
                    ></a>
                </template>
            </div>
        </div>
    </nav>


    @include('_dashboard._section.hero')
    @include('_dashboard._section.about')
    @include('_dashboard._section.livelihood&education')
    @include('_dashboard._section.news')
    @include('_dashboard._section.paace')
    @include('_dashboard._section.partners')
    @include('_dashboard._section.projects')
    @include('_dashboard._section.stats')
    @include('_dashboard._section.volunteers')
    @include('_dashboard._section.testimonial')
    @include('_dashboard._section.gallery')
    @include('_dashboard._section.contact-us')
    @include('_dashboard._section.footer')

@endsection
