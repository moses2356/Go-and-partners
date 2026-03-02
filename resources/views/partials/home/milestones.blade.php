@push('styles')
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;800&display=swap"
        rel="stylesheet" />
    <style>
        .pulse-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: dash 5s linear infinite;
        }

        @keyframes dash {
            from {
                stroke-dashoffset: 1000;
            }

            to {
                stroke-dashoffset: -1000;
            }
        }

        .ms-glass-pane {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .ms-glass-pane {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .text-outline {
            -webkit-text-stroke: 1px currentColor;
            color: transparent;
        }
    </style>
@endpush

<section id="milestones-section"
    class="relative min-h-screen overflow-hidden flex flex-col md:flex-row bg-[#ffffff] dark:bg-[#020617] text-slate-900 dark:text-slate-100 transition-colors duration-300"
    style="font-family: 'Inter', sans-serif;">
    <div class="absolute inset-0 pointer-events-none flex" style="z-index: 0;">
        <div class="w-full md:w-1/2 bg-[#ffffff] dark:bg-[#020617]"></div>
        <div class="hidden md:block w-1/2 bg-[#f8fafc] dark:bg-[#0f172a] opacity-50"></div>
    </div>
    <div
        class="relative z-10 w-full md:w-1/2 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 pt-16 md:pt-0">
        <div class="max-w-md w-full">
            <header class="mb-12 flex flex-col items-start" data-reveal="reveal-up">
                <div class="flex flex-col select-none uppercase tracking-tighter font-display">
                    <h2
                        class="outline-text text-5xl sm:text-6xl md:text-8xl lg:text-9xl font-light leading-none mb-2 md:mb-4">
                        OUR
                    </h2>
                    <h1
                        class="text-5xl sm:text-6xl md:text-8xl lg:text-9xl font-black text-primary dark:text-white leading-[0.85] tracking-tighter uppercase">
                        MILESTONES
                    </h1>
                    </h1>
                </div>
                <!-- Small dash accent under title -->
                <div class="mt-8 md:mt-12 w-20 h-1.5 bg-secondary rounded-full"></div>
            </header>

            <div
                class="hidden md:block text-slate-500 dark:text-slate-400 max-w-sm mt-8 border-l-2 border-[#0ea5e9] pl-6 py-2">
                <p class="font-body text-base md:text-lg opacity-90 leading-relaxed italic">"Three decades of excellence
                    in identifying and nurturing global leadership."</p>
            </div>

        </div>
    </div>
    <div class="relative z-10 w-full md:w-1/2 flex flex-col items-center pt-8 pb-20 md:py-32 px-8 overflow-y-auto">
        <!-- ANIMASI DIGESER KE KIRI SINI -->
        <div
            class="absolute left-0 md:left-8 lg:left-16 top-0 bottom-0 pointer-events-none w-64 md:w-96 flex justify-center">
            <svg class="h-full w-full opacity-20 dark:opacity-40" fill="none" viewBox="0 0 200 1200">
                <path class="text-[#0ea5e9] pulse-path"
                    d="M 100,0 C 250,0 250,400 100,400 C -50,400 -50,800 100,800 C 250,800 250,1200 100,1200"
                    id="timeline-path" stroke="currentColor" stroke-width="2"></path>
            </svg>
        </div>

        <div class="relative flex items-center gap-12 w-full max-w-lg mb-32 md:mb-48 group-ms">
            <div class="relative flex-shrink-0">
                <div
                    class="w-24 h-24 md:w-32 md:h-32 ms-glass-pane rounded-full flex items-center justify-center z-20 relative hover:scale-110 transition-transform duration-500 shadow-xl border border-white/20">
                    <span class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white"
                        style="font-family: 'Outfit', sans-serif;">01</span>
                </div>
                <div
                    class="absolute inset-0 bg-[#0ea5e9] opacity-20 blur-2xl rounded-full scale-125 -z-10 hover:opacity-40 transition-opacity">
                </div>
            </div>
            <div class="flex-grow space-y-3">
                <span class="text-sm font-semibold tracking-tighter text-[#0ea5e9]">1992 - 2022</span>
                <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white"
                    style="font-family: 'Outfit', sans-serif;">Boyden Indonesia</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm md:text-base">
                    A local entity was established to work together with the Boyden World Corporation (BWC), a US
                    premium global leadership and talent advisory firm.
                </p>
            </div>
        </div>

        <div
            class="relative flex flex-row-reverse md:flex-row items-center gap-12 w-full max-w-lg mb-32 md:mb-48 group-ms md:-translate-x-12">
            <div class="relative flex-shrink-0">
                <div
                    class="w-24 h-24 md:w-32 md:h-32 ms-glass-pane rounded-full flex items-center justify-center z-20 relative hover:scale-110 transition-transform duration-500 shadow-xl border border-white/20">
                    <span class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white"
                        style="font-family: 'Outfit', sans-serif;">02</span>
                </div>
                <div
                    class="absolute inset-0 bg-[#0ea5e9] opacity-20 blur-2xl rounded-full scale-125 -z-10 hover:opacity-40 transition-opacity">
                </div>
            </div>
            <div class="flex-grow space-y-3 text-right md:text-left">
                <span class="text-sm font-semibold tracking-tighter text-[#0ea5e9]">2023 - PRESENT</span>
                <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white"
                    style="font-family: 'Outfit', sans-serif;">GO&amp;Partners</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm md:text-base">
                    In December 2022, we decided to terminate the working relationship with BWC, and the firm was
                    rebranded as GO &amp; Partners.
                </p>
            </div>
        </div>

        <div class="relative flex items-center gap-12 w-full max-w-lg group-ms">
            <div class="relative flex-shrink-0">
                <div
                    class="w-24 h-24 md:w-32 md:h-32 ms-glass-pane rounded-full flex items-center justify-center z-20 relative hover:scale-110 transition-transform duration-500 shadow-xl border border-white/20">
                    <span class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white"
                        style="font-family: 'Outfit', sans-serif;">03</span>
                </div>
                <div
                    class="absolute inset-0 bg-[#0ea5e9] opacity-20 blur-2xl rounded-full scale-125 -z-10 hover:opacity-40 transition-opacity">
                </div>
            </div>
            <div class="flex-grow space-y-3">
                <span class="text-sm font-semibold tracking-tighter text-[#0ea5e9]">SINCE 1992</span>
                <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white"
                    style="font-family: 'Outfit', sans-serif;">Executive Search Firm</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm md:text-base">
                    GO&amp;Partners has earned a strong reputation as a trusted executive search firm in Indonesia,
                    helping businesses find the right leadership to grow.
                </p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const observerOptions = { threshold: 0.2 };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-12');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.group-ms').forEach(el => {
                el.classList.add('opacity-0', 'translate-y-12', 'transition-all', 'duration-700', 'ease-out');
                observer.observe(el);
            });
        });
    </script>
@endpush