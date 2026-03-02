{{-- Core Values Section - Restructured with Top Header & Bottom Grid --}}
<section id="core-values"
    class="relative bg-background-light dark:bg-background-dark py-24 px-8 md:px-16 lg:px-24 overflow-hidden transition-colors duration-300 border-t border-slate-200 dark:border-slate-800">
    <div class="container mx-auto">

        {{-- TOP: Title - Centered Block with Left Alignment --}}
        <header class="mb-20 md:mb-32 flex flex-col items-start px-4 md:px-0" data-reveal="reveal-up">
            <div class="flex flex-col select-none uppercase tracking-tighter font-display">
                <h2 class="outline-text text-6xl md:text-8xl lg:text-9xl font-light leading-none mb-2 md:mb-4">
                    OUR
                </h2>
                <h1
                    class="text-6xl md:text-8xl lg:text-9xl font-black text-primary dark:text-white leading-[0.85] tracking-tighter uppercase">
                    Core<br />Values
                </h1>
            </div>
            <div class="mt-8 md:mt-12 w-20 h-1.5 bg-secondary rounded-full"></div>
        </header>

        {{-- BOTTOM: Core Values Grid (2 Columns) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-32 md:gap-y-20 gap-x-20 lg:gap-x-32 px-4 md:px-0">

            {{-- Value 1: Personal Commitment --}}
            <article class="flex flex-col items-start text-left space-y-10 mb-16 md:mb-0" data-reveal="reveal-up"
                style="animation-delay: 0.2s;">
                <div
                    class="circular-graphic bg-primary dark:bg-slate-900 rounded-full shadow-2xl flex items-center justify-center group relative icon-nudge-up">
                    {{-- Professional Circular Border Accent --}}
                    <div
                        class="absolute inset-[-10px] md:inset-[-14px] rounded-full border-[6px] md:border-[8px] border-secondary/30 border-t-secondary border-r-transparent rotate-45 animate-spin-slow-icons">
                    </div>

                    {{-- Icon - Handshake (Forced Scale & Position CSS) --}}
                    <div
                        class="relative flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="material-symbols-outlined icon-large text-white group-hover:text-secondary transition-colors duration-300 font-light">handshake</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3
                        class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-primary dark:text-white tracking-tight leading-tight">
                        Personal Commitment
                    </h3>
                    <p
                        class="font-body text-slate-600 dark:text-slate-400 leading-relaxed text-base md:text-lg opacity-90 max-w-xl">
                        Each member of our team brings deep expertise and a personal commitment to every engagement,
                        ensuring a hands-on, tailored approach. Our legacy is built on the principle that the most
                        experienced and senior professionals personally oversee each search, fostering long-term
                        relationships and delivering exceptional results.
                    </p>
                </div>
            </article>

            {{-- Value 2: Trusted Advisor --}}
            <article class="flex flex-col items-start text-left space-y-10" data-reveal="reveal-up"
                style="animation-delay: 0.4s;">
                <div
                    class="circular-graphic bg-primary dark:bg-slate-900 rounded-full shadow-2xl flex items-center justify-center group relative icon-nudge-up">
                    {{-- Professional Circular Border Accent --}}
                    <div
                        class="absolute inset-[-10px] md:inset-[-14px] rounded-full border-[6px] md:border-[8px] border-secondary/30 border-t-secondary border-r-transparent rotate-[225deg] animate-spin-slow-icons">
                    </div>

                    {{-- Icon - Shield Person (Forced Scale & Position CSS) --}}
                    <div
                        class="relative flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="material-symbols-outlined icon-large text-white group-hover:text-secondary transition-colors duration-300 font-light">shield_person</span>
                        <div class="absolute inset-0 flex items-center justify-center">
                            {{-- Optional extra inner glow or detail --}}
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3
                        class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-primary dark:text-white tracking-tight leading-tight">
                        Trusted Advisor
                    </h3>
                    <p
                        class="font-body text-slate-600 dark:text-slate-400 leading-relaxed text-base md:text-lg opacity-90 max-w-xl">
                        With a strong track record of helping organizations thrive by identifying and securing top
                        leadership talent, GO & Partners has earned a reputation as a trusted advisor. Our deep industry
                        knowledge, strategic insights, and unwavering commitment make us an integral part of our
                        clients' success.
                    </p>
                </div>
            </article>

        </div>
    </div>
</section>

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <style>
        .circular-graphic {
            position: relative;
            width: 120px;
            height: 120px;
        }

        @media (min-width: 768px) {
            .circular-graphic {
                width: 160px;
                height: 160px;
            }
        }

        @keyframes spin-icons {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow-icons {
            animation: spin-icons 12s linear infinite;
        }

        .icon-large {
            font-size: 70px !important;
        }

        .icon-nudge-up {
            position: relative;
            top: -10px;
        }

        @media (min-width: 768px) {
            .icon-large {
                font-size: 90px !important;
            }

            .icon-nudge-up {
                top: -15px;
            }
        }

        .outline-text {
            -webkit-text-stroke: 1px #19203d;
            color: transparent;
        }

        .dark .outline-text {
            -webkit-text-stroke: 1px #f3f4f6;
        }
    </style>
@endpush