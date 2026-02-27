@extends('layouts.app')

@php
    $title = 'GO & Partners - About Us';
@endphp

@section('content')
    <section
        class="relative w-full min-h-[90vh] flex items-center justify-center overflow-hidden px-4 md:px-12 py-12 md:py-16 bg-[#F8FAFC] dark:bg-background-dark">
        <!-- Background Curved Lines (Perfectly framing the circle) -->
        <div class="absolute inset-0 pointer-events-none opacity-40 dark:opacity-20 z-0" data-reveal="fade-in">
            <svg class="w-full h-full" viewBox="0 0 1440 800" fill="none" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice">
                <path d="M1440 100C1200 300 1100 400 850 430C600 460 300 650 -100 700" stroke="#62C4C9" stroke-width="3" />
                <path d="M1440 300C1250 500 1100 600 850 630C600 660 300 850 -100 900" stroke="#62C4C9" stroke-width="3" />
                <path d="M1440 -100C1250 150 1000 250 750 280C500 310 300 500 -100 550" stroke="#62C4C9" stroke-width="1.5"
                    opacity="0.5" />
            </svg>
        </div>

        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center relative z-10">
            <div class="flex flex-col gap-6 md:gap-8 max-w-2xl px-2 md:px-0 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 mb-2" data-reveal="reveal-up"
                    style="animation-delay: 0.1s">
                    <span class="h-px w-8 bg-secondary"></span>
                    <p
                        class="uppercase tracking-widest text-[9px] md:text-[10px] font-black text-gray-500 dark:text-gray-400">
                        High-End Consulting
                    </p>
                </div>
                <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-light text-gray-400 dark:text-slate-500 leading-[1.1]"
                    data-reveal="reveal-up" style="animation-delay: 0.2s">
                    A SIMPLE <br class="hidden md:block" /> BUT <span
                        class="font-bold text-slate-800 dark:text-slate-300">PROFOUND BELIEF</span>
                </h1>
                <h2 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-[#19203d] dark:text-white leading-[1.1]"
                    data-reveal="reveal-up" style="animation-delay: 0.3s">
                    PASSION FOR PEOPLE
                </h2>
            </div>

            <div class="relative flex justify-center lg:justify-end items-center" data-reveal="reveal-up"
                style="animation-delay: 0.4s">
                <!-- Circular Decorative Ring (20s spin as requested) -->
                <div
                    class="absolute w-[280px] h-[280px] md:w-[360px] md:h-[360px] lg:w-[480px] lg:h-[480px] rounded-full border-[8px] md:border-[12px] border-secondary/20 border-t-secondary border-r-transparent rotate-45 animate-spin-slow">
                </div>
                <div
                    class="absolute w-[240px] h-[240px] md:w-[320px] md:h-[320px] lg:w-[420px] lg:h-[420px] rounded-full border-[1px] md:border-[2px] border-secondary/40">
                </div>

                <!-- Central Branding Focus -->
                <div
                    class="relative z-10 w-56 h-56 md:w-72 md:h-72 lg:w-80 lg:h-80 bg-primary rounded-full flex flex-col items-center justify-center shadow-2xl border-4 border-white dark:border-gray-800">
                    <div class="text-white flex flex-col items-center scale-90 md:scale-100 lg:scale-110">
                        <div class="mb-2 p-3 rounded-full border-2 border-secondary text-secondary">
                            <span class="material-icons-outlined text-3xl md:text-4xl">favorite</span>
                        </div>
                        <div class="flex items-end -space-x-4">
                            <span
                                class="material-icons-outlined text-5xl md:text-6xl opacity-70 transform -translate-y-1 md:-translate-y-2">person</span>
                            <span
                                class="material-icons-outlined text-6xl md:text-7xl z-10 text-white drop-shadow-md">person</span>
                            <span
                                class="material-icons-outlined text-5xl md:text-6xl opacity-70 transform -translate-y-1 md:-translate-y-2">person</span>
                        </div>
                    </div>
                </div>

                <!-- Glowing Accents -->
                <div
                    class="absolute -top-6 md:-top-10 right-10 w-16 md:w-20 h-16 md:h-20 bg-gradient-to-br from-secondary to-blue-400 rounded-full opacity-20 blur-lg md:blur-xl">
                </div>
                <div
                    class="absolute bottom-0 left-6 md:left-10 w-24 md:w-32 h-24 md:h-32 bg-primary rounded-full opacity-10 blur-xl md:blur-2xl">
                </div>
            </div>
        </div>

        <!-- Minimalist Scroll Indicator -->
        <div class="absolute bottom-8 md:bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center z-20"
            data-reveal="fade-in" style="animation-delay: 1.5s">
            <div
                class="w-px h-16 md:h-24 bg-gradient-to-b from-secondary/40 via-secondary to-transparent relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1/2 bg-white/60 animate-scroll"></div>
            </div>
        </div>
    </section>

    <!-- NEW CONTENT: Values Section -->
    <div class="relative overflow-hidden bg-[#F8FAFC] dark:bg-background-dark">
        <div class="floating-orb w-[200px] h-[200px] md:w-[400px] md:h-[400px] top-[10%] left-[-5%]"></div>
        <div class="floating-orb w-[250px] h-[250px] md:w-[500px] md:h-[500px] top-[40%] right-[-10%] bg-blue-400"></div>
        <div class="floating-orb w-[150px] h-[150px] md:w-[300px] md:h-[300px] bottom-[10%] left-[20%]"></div>

        <section class="min-h-screen pt-24 md:pt-40 pb-20 px-4 md:px-12 flex flex-col justify-center relative z-10">
            <div class="max-w-4xl mx-auto mb-16 md:mb-24 text-center">
                <h1
                    class="text-slate-400 dark:text-slate-500 uppercase tracking-[0.4em] font-bold text-[10px] md:text-xs mb-6">
                    Core Philosophy</h1>
                <p class="text-3xl md:text-5xl lg:text-6xl font-light text-slate-800 dark:text-white leading-tight px-2">
                    Our <span class="font-serif italic text-accent">approach</span> is defined by the
                    <span class="text-accent font-serif font-bold italic">actions</span> we take every single day.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-12 md:gap-y-32 max-w-7xl mx-auto w-full">
                <div class="phrase-container flex justify-center md:justify-start">
                    <div class="flex flex-col items-center md:items-start">
                        <span
                            class="font-serif text-2xl md:text-4xl italic text-slate-500 dark:text-slate-400 mb-1 md:mb-2">WE</span>
                        <span
                            class="text-4xl md:text-8xl font-black uppercase tracking-tighter dark:text-white text-background-dark">LISTEN</span>
                    </div>
                </div>
                <div class="phrase-container flex justify-center md:justify-end">
                    <div class="flex flex-col items-center md:items-end">
                        <span
                            class="font-serif text-2xl md:text-4xl italic text-slate-500 dark:text-slate-400 mb-1 md:mb-2">WE</span>
                        <span
                            class="text-4xl md:text-8xl font-black uppercase tracking-tighter outline-text-thin">CONNECT</span>
                    </div>
                </div>
                <div class="phrase-container col-span-1 md:col-span-2 flex flex-col items-center">
                    <div class="text-center">
                        <span
                            class="font-serif text-3xl md:text-6xl italic block mb-1 md:mb-2 dark:text-white text-background-dark">WE
                            FORGE</span>
                        <span
                            class="text-[11vw] sm:text-5xl md:text-9xl font-black uppercase tracking-tighter outline-text-thin block leading-[0.8]">RELATIONSHIPS</span>
                    </div>
                </div>
                <div class="phrase-container col-span-1 md:col-span-2 flex justify-center md:justify-end lg:pr-32">
                    <div class="flex flex-col items-center md:items-end">
                        <div class="flex items-baseline gap-2 md:gap-4">
                            <span class="font-serif text-3xl md:text-4xl italic dark:text-white text-background-dark">WE
                                PUT</span>
                            <span
                                class="text-5xl md:text-8xl font-black uppercase tracking-tighter dark:text-white text-background-dark">PEOPLE</span>
                        </div>
                        <span
                            class="text-5xl md:text-8xl font-black uppercase tracking-tighter outline-text-thin -mt-2 md:-mt-4">FIRST</span>
                    </div>
                </div>
                <div class="phrase-container flex justify-center md:justify-start lg:pl-20">
                    <div class="flex flex-col items-center md:items-start">
                        <span class="font-serif text-3xl md:text-4xl italic outline-text-thin mb-1 md:mb-2">WE FUEL</span>
                        <span
                            class="text-4xl md:text-7xl font-black uppercase tracking-tighter dark:text-white text-background-dark ml-0 md:ml-8">PROGRESS</span>
                    </div>
                </div>
                <div class="phrase-container flex justify-center">
                    <div class="flex flex-col items-center">
                        <span class="font-serif text-2xl md:text-3xl italic dark:text-slate-400 text-slate-500">WE</span>
                        <span
                            class="text-4xl md:text-7xl font-black uppercase tracking-tighter dark:text-white text-background-dark">UNLOCK</span>
                        <span
                            class="font-serif text-3xl md:text-6xl italic outline-text-thin -mt-1 md:-mt-2">POTENTIALS</span>
                    </div>
                </div>
                <div class="phrase-container col-span-1 md:col-span-2 flex justify-center py-6 md:py-10">
                    <div class="relative flex flex-col md:flex-row items-center gap-2 md:gap-12 text-center md:text-left">
                        <span class="font-serif text-4xl md:text-7xl italic dark:text-white text-background-dark">WE</span>
                        <span
                            class="font-serif text-6xl md:text-[10rem] font-bold italic text-accent leading-none">BRIDGE</span>
                        <span
                            class="text-5xl md:text-9xl font-black uppercase tracking-widest dark:text-white text-background-dark">GAPS</span>
                    </div>
                </div>
                <div class="phrase-container flex justify-center md:justify-start lg:pl-40">
                    <div class="flex flex-col items-center md:items-start">
                        <span class="font-serif text-3xl md:text-4xl italic dark:text-white text-background-dark">WE
                            ALIGN</span>
                        <span
                            class="text-4xl md:text-6xl font-black uppercase tracking-tighter outline-text-thin">VISIONS</span>
                    </div>
                </div>
                <div class="phrase-container flex justify-center md:justify-end lg:pr-40">
                    <div class="flex flex-col items-center md:items-end">
                        <span
                            class="text-4xl md:text-6xl font-black uppercase tracking-tighter dark:text-white text-background-dark">WE
                            INSPIRE</span>
                        <span class="font-serif text-3xl md:text-4xl italic text-accent">GROWTH</span>
                    </div>
                </div>
                <div class="phrase-container col-span-1 md:col-span-2 flex flex-col items-center md:items-end lg:pr-20">
                    <span class="font-serif text-3xl md:text-6xl italic outline-text-thin mb-1 md:mb-2">WE OPEN</span>
                    <span
                        class="text-[11vw] sm:text-5xl md:text-[9rem] font-black uppercase tracking-tighter dark:text-white text-background-dark leading-[0.8] text-center">POSSIBILITIES</span>
                </div>
            </div>
        </section>
    </div>

    <!-- NEW CONTENT: Who We Are Section -->
    <section class="relative min-h-screen w-full flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Professional corporate team collaborating"
                class="w-full h-full object-cover filter brightness-[0.7] dark:brightness-[0.4]" data-reveal="fade-in"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2NVrfgyaUou5-GGpryT4Ti0M0E2V3J2yhkIEnJOMS2kSompn4A1ZPTJtzxeoL7X46jLP92AK75E0RsIHLhSGQ7TOosVlwTtuu55v-oYvz9mZIvxldafzCzhUBhdXsPVaZIwxdJwwh4Wfi-mjZj-KPBPnXGP6X5AIzperCrrNEqWxjbZjRB0L7qtv1huNWvsB6QDENRiOJeC_HlVOTDTGYiUpI1EvV8F0NK9nbjp7-PULwqmV4mvTckJEoT8VRArhJsnYJNKatYR4" />
            <div class="absolute inset-0 bg-primary/20 backdrop-blur-[2px]"></div>
        </div>

        <div class="relative z-10 w-full max-w-4xl px-6">
            <div class="bg-primary/90 dark:bg-slate-900/95 backdrop-blur-md p-10 md:p-20 shadow-2xl rounded-tr-custom rounded-bl-custom rounded-tl-lg rounded-br-lg text-center transform transition-all hover:scale-[1.01] duration-700"
                data-reveal="reveal-up" style="animation-delay: 0.4s">
                <h1 class="font-display mb-10 tracking-tighter flex flex-col md:flex-row items-center justify-center gap-4">
                    <span class="outline-white text-6xl md:text-8xl font-light">WHO</span>
                    <span class="text-white text-6xl md:text-8xl font-bold">WE ARE</span>
                </h1>
                <p class="text-white/80 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto font-light reveal-up"
                    style="animation-delay: 0.6s">
                    We are <span class="text-secondary font-bold">a team of trusted advisors</span> who prioritize in
                    building long-term partnerships with our clients, with accumulated experience and specialized knowledge
                    enabling us to <span class="text-white font-semibold">help organizations identify & recruit outstanding
                        leaders</span> for today and the future.
                </p>
            </div>
        </div>
    </section>

    <!-- NEW CONTENT: Origin Story Section -->
    <main
        class="relative min-h-screen flex flex-col md:flex-row items-stretch overflow-visible bg-white dark:bg-background-dark">
        <!-- Animated Flowing Ribbon -->
        <svg class="absolute left-1/2 -translate-x-1/2 top-0 h-full w-[200px] z-10 pointer-events-none hidden lg:block"
            preserveAspectRatio="none" viewBox="0 0 100 800">
            <!-- Layer 1: Base Track -->
            <path class="animate-water-base" d="M50 0 Q 100 150 50 300 T 50 600 T 50 800" fill="none" stroke="#2dd4bf"
                stroke-linecap="round" stroke-width="4"></path>
            <!-- Layer 2: Main Stream -->
            <path class="animate-water-fast" d="M50 0 Q 100 150 50 300 T 50 600 T 50 800" fill="none" stroke="#2dd4bf"
                stroke-linecap="round" stroke-width="4" style="filter: drop-shadow(0 0 8px rgba(45, 212, 191, 0.5));">
            </path>
            <!-- Layer 3: Secondary Stream -->
            <path class="animate-water-slow" d="M50 0 Q 100 150 50 300 T 50 600 T 50 800" fill="none" stroke="#2dd4bf"
                stroke-linecap="round" stroke-width="4"></path>
        </svg>

        <section class="w-full md:w-1/2 min-h-screen flex flex-col justify-center px-8 md:px-16 lg:px-24 py-20 relative">
            <div class="mb-12 relative z-20" data-reveal="reveal-up" style="animation-delay: 0.2s">
                <h1 class="font-display leading-none mb-12">
                    <span class="block text-4xl md:text-6xl outline-text font-light tracking-tight mb-2">THE</span>
                    <span
                        class="block text-5xl md:text-7xl font-black text-primary dark:text-slate-100 tracking-tighter leading-[0.9]">ORIGIN<br />STORY</span>
                </h1>
                <div class="max-w-md space-y-6 text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                    <p>
                        <strong class="text-primary dark:text-slate-100">GO & Partners</strong> was founded by a team of
                        <strong class="text-primary dark:text-slate-100">thoughtful problem solvers</strong> who believe in
                        the strength of people. The team is guided by Gary Ong, a leader respected for his <strong
                            class="text-primary dark:text-slate-100">insight</strong> and <strong
                            class="text-primary dark:text-slate-100">unwavering commitment</strong> to people-centric
                    </p>
                    <p class="font-medium">Our passion is more than a philosophy</p>
                    <div data-reveal="reveal-up" style="animation-delay: 0.4s">
                        <h2
                            class="text-4xl md:text-5xl font-black text-primary dark:text-slate-100 mt-2 mb-4 tracking-tight uppercase">
                            IT'S A compass</h2>
                        <ul class="space-y-1 text-base md:text-lg border-l-2 border-secondary pl-6">
                            <li>Guiding every connection we make.</li>
                            <li>Every strategy we craft.</li>
                            <li>Every success we celebrate.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full md:w-1/2 min-h-[50vh] md:min-h-screen relative bg-slate-100 dark:bg-slate-900">
            <img alt="White and blue origami paper boats"
                class="absolute inset-0 w-full h-full object-cover grayscale-[20%] brightness-95 dark:brightness-50"
                data-reveal="fade-in" src="{{ asset('images/premium_origami_background.png') }}" />
            <div class="absolute inset-0 bg-gradient-to-r from-white/40 to-transparent dark:from-background-dark/40 z-10">
            </div>

            <!-- Anchor Wrapper: Prevents animation from overriding the -translate-x-1/2 centering -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 z-40 hidden md:block">
                <!-- Animation Wrapper -->
                <div class="flex items-center justify-center" data-reveal="reveal-up" style="animation-delay: 0.8s">
                    <div class="relative group animate-float">
                        <div
                            class="absolute inset-0 bg-secondary blur-3xl opacity-20 group-hover:opacity-40 transition-opacity rounded-full">
                        </div>
                        <div
                            class="w-48 h-48 md:w-56 md:h-56 bg-primary rounded-full border-4 border-slate-700/50 flex items-center justify-center shadow-2xl relative overflow-hidden">
                            <svg class="w-4/5 h-4/5 text-slate-100 opacity-90" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" fill="none" r="45" stroke="currentColor" stroke-dasharray="2 2"
                                    stroke-width="0.5"></circle>
                                <circle cx="50" cy="50" fill="none" r="38" stroke="currentColor" stroke-width="0.2">
                                </circle>
                                <text fill="currentColor" font-size="6" font-weight="bold" text-anchor="middle" x="50"
                                    y="10">N</text>
                                <text fill="currentColor" font-size="6" font-weight="bold" text-anchor="middle" x="50"
                                    y="94">S</text>
                                <text fill="currentColor" font-size="6" font-weight="bold" text-anchor="middle" x="6"
                                    y="52">W</text>
                                <text fill="currentColor" font-size="6" font-weight="bold" text-anchor="middle" x="94"
                                    y="52">E</text>
                                <path d="M50 15 L55 45 L85 50 L55 55 L50 85 L45 55 L15 50 L45 45 Z" fill="none"
                                    stroke="currentColor" stroke-width="1"></path>
                                <path d="M50 15 L50 50 L85 50" fill="none" stroke="currentColor" stroke-width="0.5"></path>
                                <path d="M50 85 L50 50 L15 50" fill="none" stroke="currentColor" stroke-width="0.5"></path>
                                <circle cx="50" cy="50" fill="#4fd1c5" r="2"></circle>
                                <circle class="animate-pulse-slow" cx="50" cy="50" fill="none" r="5" stroke="#4fd1c5"
                                    stroke-width="0.5"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile center compass -->
            <div class="absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 z-40 md:hidden">
                <div class="flex items-center justify-center" data-reveal="reveal-up" style="animation-delay: 0.8s">
                    <div class="relative group animate-float">
                        <div class="absolute inset-0 bg-secondary blur-3xl opacity-20 rounded-full"></div>
                        <div
                            class="w-32 h-32 bg-primary rounded-full border-4 border-slate-700/50 flex items-center justify-center shadow-2xl relative overflow-hidden">
                            <svg class="w-4/5 h-4/5 text-slate-100 opacity-90" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" fill="none" r="45" stroke="currentColor" stroke-dasharray="2 2"
                                    stroke-width="0.5"></circle>
                                <circle cx="50" cy="50" fill="none" r="38" stroke="currentColor" stroke-width="0.2">
                                </circle>
                                <path d="M50 15 L55 45 L85 50 L55 55 L50 85 L45 55 L15 50 L45 45 Z" fill="none"
                                    stroke="currentColor" stroke-width="1"></path>
                                <circle cx="50" cy="50" fill="#4fd1c5" r="2"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- NEW CONTENT: Milestones Section -->
    <section id="milestones-section"
        class="min-h-screen flex items-center justify-center py-32 px-6 md:px-12 lg:px-24 bg-background-light dark:bg-background-dark relative overflow-hidden">
        <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start relative">

            <div class="lg:col-span-4 sticky top-32 h-fit z-20">
                <h2 class="text-6xl md:text-8xl font-light outline-text uppercase tracking-tighter leading-none mb-2">OUR
                </h2>
                <h2
                    class="relative z-20 text-6xl md:text-7xl font-extrabold text-primary dark:text-white uppercase tracking-tight leading-[0.9]">
                    MILESTONES</h2>
                <div class="mt-8 w-24 h-1.5 bg-secondary rounded-full"></div>
            </div>
            <div class="lg:col-span-8 relative">
                <div class="lg:col-span-8 relative">

                    <!-- Elastic Straight Liquid Timeline (Zoom Proof) -->
                    <!-- Mobile: left-10 (40px) aligns with w-20 center. Desktop: left-[3.5rem] (56px) aligns with w-24 center + ml-4 margin -->
                    <div
                        class="absolute left-1/2 md:left-24 top-0 bottom-0 w-2 z-0 overflow-hidden rounded-full transform -translate-x-1/2">
                        <!-- Base Track -->
                        <div class="absolute inset-0 bg-secondary opacity-15"></div>
                        <!-- Liquid Flow Layer 1 (Fast, thin) -->
                        <div
                            class="absolute top-0 left-0 w-full h-[300%] bg-gradient-to-b from-transparent via-secondary to-transparent animate-liquid-flow opacity-60">
                        </div>
                        <!-- Liquid Flow Layer 2 (Slow, thick bright core) -->
                        <div
                            class="absolute top-0 left-0 w-full h-[200%] bg-gradient-to-b from-transparent via-white to-transparent animate-liquid-flow-slow opacity-40 mix-blend-overlay">
                        </div>
                        <!-- Liquid Flow Layer 3 (Pulse droplets) -->
                        <div
                            class="absolute top-0 left-0 w-full h-[50%] bg-white animate-liquid-pulse opacity-20 filter blur-[2px]">
                        </div>
                    </div>

                    <!-- Milestone Items Container -->
                    <div class="relative z-10 space-y-24 md:space-y-32 py-16">
                        <!-- Milestone 01 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12 relative md:ml-12"
                            data-reveal="reveal-up" style="transition-delay: 0.1s">
                            <div
                                class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-full bg-primary flex items-center justify-center shadow-2xl milestone-node border-8 border-background-light dark:border-background-dark ring-2 ring-primary relative z-10 transition-transform hover:scale-110 duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">01</span>
                                <!-- Liquid Connection Node Glow -->
                                <div
                                    class="absolute inset-0 rounded-full bg-secondary opacity-30 animate-pulse mix-blend-screen filter blur-md">
                                </div>
                            </div>
                            <div class="flex-1 md:pt-4 text-center md:text-left">
                                <p
                                    class="text-xs md:text-sm font-bold text-secondary uppercase tracking-[0.2em] mb-4 md:mb-6">
                                    1992 - 2022</p>
                                <h3 class="text-3xl md:text-4xl font-extrabold text-primary dark:text-white mb-4 md:mb-6">
                                    Boyden Indonesia</h3>
                                <p
                                    class="text-gray-600 dark:text-slate-400 max-w-xl leading-relaxed md:leading-loose text-base md:text-lg mx-auto md:mx-0">
                                    A local entity was established to work together with the Boyden World Corporation (BWC),
                                    a
                                    US premium global leadership and talent advisory firm. Thus, Boyden Indonesia was
                                    established.
                                </p>
                            </div>
                        </div>

                        <!-- Milestone 02 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12 relative md:ml-12"
                            data-reveal="reveal-up" style="transition-delay: 0.3s">
                            <div
                                class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-full bg-primary flex items-center justify-center shadow-2xl milestone-node border-8 border-background-light dark:border-background-dark ring-2 ring-primary relative z-10 transition-transform hover:scale-110 duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">02</span>
                                <div class="absolute inset-0 rounded-full bg-secondary opacity-30 animate-pulse mix-blend-screen filter blur-md"
                                    style="animation-delay: 1.5s;"></div>
                            </div>
                            <div class="flex-1 md:pt-4 text-center md:text-left">
                                <p
                                    class="text-xs md:text-sm font-bold text-secondary uppercase tracking-[0.2em] mb-4 md:mb-6">
                                    2023 - PRESENT</p>
                                <h3 class="text-3xl md:text-4xl font-extrabold text-primary dark:text-white mb-4 md:mb-6">GO
                                    &amp; Partners</h3>
                                <p
                                    class="text-gray-600 dark:text-slate-400 max-w-xl leading-relaxed md:leading-loose text-base md:text-lg mx-auto md:mx-0">
                                    In December 2022, we decided to terminate the working relationship with BWC, and the
                                    firm was rebranded as GO &amp; Partners to better serve our regional focus.
                                </p>
                            </div>
                        </div>

                        <!-- Milestone 03 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12 relative md:ml-12"
                            data-reveal="reveal-up" style="transition-delay: 0.5s">
                            <div
                                class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-full bg-primary flex items-center justify-center shadow-2xl milestone-node border-8 border-background-light dark:border-background-dark ring-2 ring-primary relative z-10 transition-transform hover:scale-110 duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">03</span>
                                <div class="absolute inset-0 rounded-full bg-secondary opacity-30 animate-pulse mix-blend-screen filter blur-md"
                                    style="animation-delay: 3s;"></div>
                            </div>
                            <div class="flex-1 md:pt-4 text-center md:text-left">
                                <p
                                    class="text-xs md:text-sm font-bold text-secondary uppercase tracking-[0.2em] mb-4 md:mb-6">
                                    SINCE 1992</p>
                                <h3 class="text-3xl md:text-4xl font-extrabold text-primary dark:text-white mb-4 md:mb-6">
                                    Executive Search Firm</h3>
                                <p
                                    class="text-gray-600 dark:text-slate-400 max-w-xl leading-relaxed md:leading-loose text-base md:text-lg mx-auto md:mx-0">
                                    GO &amp; Partners has earned a strong reputation as a trusted executive search firm in
                                    Indonesia, helping businesses find the right leadership to grow sustainably through
                                    decades of market changes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <!-- NEW CONTENT: Finding Your Leaders (Added from user HTML, moved to bottom) -->
    <main class="relative min-h-screen flex flex-col md:flex-row items-stretch bg-background-light dark:bg-background-dark">
        <div
            class="w-full md:w-1/2 flex items-center justify-center px-8 py-24 md:px-16 lg:px-24 bg-background-light dark:bg-background-dark relative z-10">
            <div class="max-w-xl">
                <div class="space-y-2 mb-12">
                    <h2 class="outline-text font-display text-5xl md:text-7xl lg:text-8xl font-light tracking-tight"
                        data-reveal="reveal-up">
                        FINDING
                    </h2>
                    <h1 class="text-primary dark:text-slate-100 font-display text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tighter leading-[0.9]"
                        data-reveal="reveal-up" style="animation-delay: 0.1s;">
                        YOUR<br />LEADERS
                    </h1>
                </div>
                <div class="space-y-6 text-lg leading-relaxed text-slate-600 dark:text-slate-400" data-reveal="reveal-up"
                    style="animation-delay: 0.2s;">
                    <p>
                        At <span class="font-semibold text-primary dark:text-slate-200">GO &amp; Partners</span>, we
                        specialize in
                        <span class="font-bold text-primary dark:text-white">senior executive strategic search</span>,
                        helping organizations identify and attract top-tier leadership talent.
                    </p>
                    <p>
                        With deep understanding that each organization has unique challenges, cultures, and strategic goals,
                        we take a tailored approach to every search.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 relative overflow-hidden min-h-[500px] md:min-h-screen z-0">
            <div class="absolute inset-0">
                <img alt="High-definition professional headshot of a confident Chinese-American business woman in her early 30s, wearing a premium navy blazer, smiling approachably in a bright modern corporate office with natural lighting and soft depth of field"
                    class="w-full h-full object-cover grayscale-[20%]"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRwiAY6AJQJAkRWeBb5Y6P2tiV-f4PWIwAcR76fMJ0Pk2zS3oFYXC5Mil_k0VwBUON7wKndcJxIpOVNrH7z-vJyjgxDVCLW11xFPew_6urJBp_hUvf2f9Hz93YV_ITG-tujHW4eg-WUud_MvasRlPF1Y6W3VpXmZbdyQgQoaosJoayCIIZMqIadb6XTA7xGphtWkXKSPyFKis80mpK2C3LiF80mGpJFPmYEXeeHMXhkMdR4pHymac7bJtHmizFp_0lyc4YsdG0aCQ" />
                <div class="absolute inset-0 bg-gradient-to-r from-background-light/40 to-transparent md:hidden"></div>
            </div>
            <svg class="absolute left-[-2px] top-0 h-full w-auto z-20 pointer-events-none hidden md:block"
                preserveAspectRatio="none" viewBox="0 0 300 1000">
                <!-- Layer 1: Base Track -->
                <path class="animate-water-base" d="M0,0 Q180,500 0,1000" fill="none" stroke="#2dd4bf"
                    stroke-linecap="round" stroke-width="8"></path>
                <!-- Layer 2: Main Stream (Pulsing Glow) -->
                <path class="animate-pulse-glow" d="M0,0 Q180,500 0,1000" fill="none" stroke="#2dd4bf"
                    stroke-linecap="round"
                    style="mix-blend-mode: screen; filter: drop-shadow(0 0 8px rgba(45, 212, 191, 0.5));"></path>
            </svg>
            <div
                class="absolute left-0 top-0 h-full w-[25%] bg-background-light dark:bg-background-dark curved-edge z-10 hidden md:block">
            </div>
        </div>
    </main>

    <!-- NEW CONTENT: Our DNA Section -->
    <section id="our-dna"
        class="relative min-h-screen py-24 flex items-center justify-center bg-primary dark:bg-background-dark overflow-hidden z-20">
        <!-- Background overlay -->
        <div class="absolute inset-0 z-0 pointer-events-none w-full h-full overflow-hidden">
            <img alt="Abstract staircase representing growth"
                class="staircase-overlay w-full h-full object-cover object-top"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFAAw1Sqdmkk5TojC02-xY_fdex4yPKvmVSrTRq0mhXk-YyT27B3ajKMdNFuYKicLJQGEBee7i7WajKRA929szE6ktGwZAagCoS7BBor5eyrQaI7qu3R3c7tWi2XzbuQMg5mPx6VWmhAcR1yfPSTV0GtIPFx0Ljf9V3QcluUfYDHURDyCKJXSZA6HjJIuS3tGB67e4Rj7eQa3ns-f_x5VRouNpqNR83Hdav5hrZ41rfOgTHiCDoj1VZiKoe1oiMBDDQ9FbdtUd-Ko" />
            <div
                class="absolute bottom-0 left-0 w-full h-2/3 bg-gradient-to-t from-primary dark:from-background-dark to-transparent">
            </div>
        </div>

        <div class="relative z-10 flex flex-col justify-center px-6 lg:px-16 py-12 max-w-7xl mx-auto w-full">
            <!-- Content from <main> -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20 items-start">
                <div class="lg:col-span-4" data-reveal="reveal-up" style="animation-delay: 0.1s">
                    <h2
                        class="text-6xl lg:text-8xl font-black tracking-tight leading-none mb-2 text-transparent bg-clip-text bg-gradient-to-br from-white to-gray-400 opacity-20 absolute select-none pointer-events-none transform -translate-y-8 -translate-x-4">
                        DNA
                    </h2>
                    <div class="relative">
                        <h1 class="text-4xl lg:text-5xl font-light tracking-wide text-white uppercase mb-1">Our</h1>
                        <h1
                            class="text-6xl lg:text-7xl font-extrabold tracking-tight text-white uppercase drop-shadow-[0_0_10px_rgba(255,255,255,0.3)]">
                            DNA</h1>
                    </div>
                </div>
                <div class="lg:col-span-8 lg:pl-12 flex flex-col justify-center h-full space-y-6" data-reveal="reveal-up"
                    style="animation-delay: 0.3s">
                    <p class="text-lg lg:text-xl text-gray-200 font-light leading-relaxed border-l-4 border-secondary pl-6">
                        We envision a future where everyone's purpose finds a home, aligned with their passion and
                        potential.
                        Our mission is to bridge those in-between gaps by nurturing their potential toward impactful
                        possibilities.
                    </p>
                    <div class="pl-6">
                        <span class="text-secondary font-semibold uppercase tracking-wider text-sm mb-1 block">Our Guiding
                            Principle</span>
                        <div class="h-0.5 w-12 bg-secondary/50 rounded-full"></div>
                    </div>
                </div>
            </div>

            <div class="relative w-full py-12 mt-4" data-reveal="reveal-up" style="animation-delay: 0.5s">
                <svg class="absolute top-1/2 left-0 w-full h-48 -translate-y-1/2 hidden lg:block pointer-events-none z-0"
                    preserveAspectRatio="none">
                    <defs>
                        <filter height="140%" id="glow" width="140%" x="-20%" y="-20%">
                            <feGaussianBlur result="blur" stdDeviation="4"></feGaussianBlur>
                            <feComposite in="SourceGraphic" in2="blur" operator="over"></feComposite>
                        </filter>
                        <linearGradient id="lineGradient" x1="0%" x2="100%" y1="0%" y2="0%">
                            <stop offset="0%" stop-color="#4FD1C5" stop-opacity="0"></stop>
                            <stop offset="10%" stop-color="#4FD1C5" stop-opacity="0.8"></stop>
                            <stop offset="90%" stop-color="#4FD1C5" stop-opacity="0.8"></stop>
                            <stop offset="100%" stop-color="#4FD1C5" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M0,100 Q150,150 300,100 T600,100 T900,100 T1200,100" fill="none"
                        stroke="rgba(79, 209, 197, 0.2)" stroke-width="4"></path>
                    <path class="animate-path"
                        d="M50,90 C150,160 200,40 350,90 C450,140 550,40 650,90 C750,140 850,40 950,90 C1050,140 1100,60 1250,90"
                        fill="none" filter="url(#glow)" stroke="url(#lineGradient)" stroke-linecap="round" stroke-width="3">
                    </path>
                </svg>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-4 relative z-10">
                    <div
                        class="group icon-container flex flex-col items-center justify-start lg:mt-8 cursor-pointer transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative mb-6">
                            <div
                                class="icon-circle w-24 h-24 lg:w-32 lg:h-32 rounded-full border-2 border-white/20 bg-primary dark:bg-background-dark flex items-center justify-center transition-all duration-300 z-10 relative overflow-hidden group-hover:bg-opacity-80">
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                </div>
                                <span
                                    class="material-icons-round text-5xl text-white group-hover:text-secondary transition-colors duration-300">groups</span>
                            </div>
                            <div
                                class="absolute inset-0 -m-2 border border-secondary/30 rounded-full scale-90 opacity-0 group-hover:scale-110 group-hover:opacity-100 transition-all duration-500 ease-out">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-secondary transition-colors">People
                        </h3>
                        <p
                            class="text-xs text-gray-400 text-center px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Building connections</p>
                    </div>
                    <div class="group icon-container flex flex-col items-center justify-start lg:mb-12 cursor-pointer transition-transform duration-300 hover:-translate-y-2"
                        style="transition-delay: 0.1s">
                        <div class="relative mb-6">
                            <div
                                class="icon-circle w-20 h-20 lg:w-28 lg:h-28 rounded-full border-2 border-white/20 bg-primary dark:bg-background-dark flex items-center justify-center transition-all duration-300 z-10 relative overflow-hidden group-hover:bg-opacity-80">
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                </div>
                                <span
                                    class="material-icons-round text-4xl text-white group-hover:text-secondary transition-colors duration-300">volunteer_activism</span>
                            </div>
                            <div
                                class="absolute inset-0 -m-2 border border-secondary/30 rounded-full scale-90 opacity-0 group-hover:scale-110 group-hover:opacity-100 transition-all duration-500 ease-out">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-secondary transition-colors">Passion
                        </h3>
                        <p
                            class="text-xs text-gray-400 text-center px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Driving engagement</p>
                    </div>
                    <div class="group icon-container flex flex-col items-center justify-start lg:mt-16 cursor-pointer transition-transform duration-300 hover:-translate-y-2"
                        style="transition-delay: 0.2s">
                        <div class="relative mb-6">
                            <div
                                class="icon-circle w-28 h-28 lg:w-36 lg:h-36 rounded-full border-2 border-white/20 bg-primary dark:bg-background-dark flex items-center justify-center transition-all duration-300 z-10 relative overflow-hidden group-hover:bg-opacity-80 shadow-[0_0_30px_rgba(79,209,197,0.1)]">
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                </div>
                                <span
                                    class="material-icons-round text-6xl text-white group-hover:text-secondary transition-colors duration-300">flag</span>
                            </div>
                            <div
                                class="absolute inset-0 -m-2 border border-secondary/30 rounded-full scale-90 opacity-0 group-hover:scale-110 group-hover:opacity-100 transition-all duration-500 ease-out">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-secondary transition-colors">Purpose
                        </h3>
                        <p
                            class="text-xs text-gray-400 text-center px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Finding meaning</p>
                    </div>
                    <div class="group icon-container flex flex-col items-center justify-start lg:mb-8 cursor-pointer transition-transform duration-300 hover:-translate-y-2"
                        style="transition-delay: 0.3s">
                        <div class="relative mb-6">
                            <div
                                class="icon-circle w-20 h-20 lg:w-28 lg:h-28 rounded-full border-2 border-white/20 bg-primary dark:bg-background-dark flex items-center justify-center transition-all duration-300 z-10 relative overflow-hidden group-hover:bg-opacity-80">
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                </div>
                                <span
                                    class="material-icons-round text-4xl text-white group-hover:text-secondary transition-colors duration-300">psychology</span>
                            </div>
                            <div
                                class="absolute inset-0 -m-2 border border-secondary/30 rounded-full scale-90 opacity-0 group-hover:scale-110 group-hover:opacity-100 transition-all duration-500 ease-out">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-secondary transition-colors">
                            Potential</h3>
                        <p
                            class="text-xs text-gray-400 text-center px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Unlocking ability</p>
                    </div>
                    <div class="group icon-container flex flex-col items-center justify-start lg:mt-4 cursor-pointer transition-transform duration-300 hover:-translate-y-2"
                        style="transition-delay: 0.4s">
                        <div class="relative mb-6">
                            <div
                                class="icon-circle w-24 h-24 lg:w-32 lg:h-32 rounded-full border-2 border-white/20 bg-primary dark:bg-background-dark flex items-center justify-center transition-all duration-300 z-10 relative overflow-hidden group-hover:bg-opacity-80">
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                                </div>
                                <span
                                    class="material-icons-round text-5xl text-white group-hover:text-secondary transition-colors duration-300">rocket_launch</span>
                            </div>
                            <div
                                class="absolute inset-0 -m-2 border border-secondary/30 rounded-full scale-90 opacity-0 group-hover:scale-110 group-hover:opacity-100 transition-all duration-500 ease-out">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-secondary transition-colors">
                            Possibility</h3>
                        <p
                            class="text-xs text-gray-400 text-center px-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Future impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection