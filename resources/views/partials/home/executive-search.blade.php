{{-- Executive Search Section --}}
<section id="executive-search"
    class="bg-background-light dark:bg-background-dark font-body min-h-screen flex flex-col overflow-x-hidden transition-colors duration-300">
    <div class="relative w-full min-h-screen flex flex-col lg:flex-row">
        <div class="absolute inset-0 w-full lg:w-7/12 h-full z-0 overflow-hidden">
            <img alt="Abstract networked representation"
                class="w-full h-full object-cover object-center blur-sm scale-110 opacity-80"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDu3bVle6D1xinilt7GY4EKaZpNq-Bf648zlCf6Nn41DI8JDcDoLXbXjJ5MkfvpioTrPbjfTvj-fm5W-8myykgjMfd1ZMuHSbvmVt0RwsR3-VvLRSb6ohzf_qBUmicpiKQ8rPNcaDE5yu2iurOomCZ0FKhLkVYwgQUV77kKqnpF984gOYlAsObEMQ5qw437Vqc58fCfo2itYMbd82jTRYqt2GVbZ-l2ozpDOgeUCCCLP-ESVh9XecTS_N4qa9FhviF-yOSr0Gf9WSE" />
            <div class="absolute inset-0 bg-gradient-fade dark:bg-gradient-fade-dark">
            </div>
        </div>
        <div class="relative z-10 w-full flex flex-col justify-between p-6 lg:p-12 min-h-screen">
            <div class="flex flex-col lg:ml-auto lg:w-1/2 xl:w-5/12 py-16 lg:py-0 justify-center">
                <div class="mb-6 lg:mb-10">
                    <h2
                        class="font-display font-bold text-4xl lg:text-5xl xl:text-6xl text-primary dark:text-white leading-tight tracking-tight uppercase">
                        Executive<br />Searching
                    </h2>
                </div>
                <div class="mb-8 lg:mb-12">
                    <p class="text-slate-700 dark:text-slate-300 text-base lg:text-lg leading-relaxed font-light">
                        GO&amp;Partners utilizes a strategic approach to identifying, attracting, and placing top-tier
                        executives within organizations.
                    </p>
                </div>
                <div class="flex flex-col space-y-6 max-w-xl">
                    <div class="flex flex-col group">
                        <div
                            class="glass-panel p-6 md:p-8 rounded-t-lg dark:text-gray-200 border-l-4 border-l-accent transition-transform duration-300 group-hover:-translate-y-1">
                            <p class="text-sm lg:text-base leading-relaxed text-slate-800 dark:text-gray-300">
                                By <span class="font-bold text-primary dark:text-white">leveraging deep industry
                                    knowledge, market intelligence</span> and <span
                                    class="font-bold text-primary dark:text-white">extensive professional
                                    networks</span>, <span class="font-bold text-primary dark:text-white">we find
                                    leaders</span> who align with a company's culture, values, and strategic goals.
                            </p>
                        </div>
                        <div class="h-4 w-full relative mt-1 executor-bar arrow-shape overflow-hidden">
                            <div class="absolute inset-0 executor-bar-mid arrow-shape w-0 animate-progress-fill delay-300"
                                style="--target-width: 66%;"></div>
                            <div class="absolute inset-0 executor-bar-active arrow-shape w-0 animate-progress-fill delay-700"
                                style="--target-width: 33%;"></div>
                        </div>
                    </div>
                    <div class="flex flex-col group">
                        <div
                            class="glass-panel p-6 md:p-8 rounded-t-lg dark:text-gray-200 border-l-4 border-l-accent-alt transition-transform duration-300 group-hover:-translate-y-1">
                            <p class="text-sm lg:text-base leading-relaxed text-slate-800 dark:text-gray-300">
                                This process goes beyond simply filling a role—it ensures that organizations secure
                                future leaders capable of <span class="font-bold text-primary dark:text-white">driving
                                    business transformation, talent strategy</span>, and <span
                                    class="font-bold text-primary dark:text-white">organizational growth.</span>
                            </p>
                        </div>
                        <div class="h-4 w-full relative mt-1 executor-bar-dim arrow-shape overflow-hidden">
                            <div class="absolute inset-0 executor-bar-mid arrow-shape w-0 animate-progress-fill delay-700"
                                style="--target-width: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
    <style>
        /* Safely implement colors overriding global theme via isolated properties */
        #executive-search {
            --text-primary-light: #19203d;
            --text-primary-dark: #f9fafb;
            --text-secondary-light: #4b5563;
            --text-secondary-dark: #9ca3af;
            --primary-color: #1e293b;
            --bg-light: #f3f4f6;
            --bg-dark: #111827;
        }

        #executive-search.bg-background-light {
            background-color: var(--bg-light);
        }

        .dark #executive-search.dark\:bg-background-dark {
            background-color: var(--bg-dark);
        }

        /* Text Mappings */
        #executive-search .text-text-primary-light {
            color: var(--text-primary-light);
        }

        .dark #executive-search .dark\:text-text-primary-dark {
            color: var(--text-primary-dark);
        }

        .dark #executive-search .dark\:text-gray-300 {
            color: #d1d5db;
        }

        .dark #executive-search .dark\:text-gray-200 {
            color: #e5e7eb;
        }

        #executive-search .text-text-secondary-light {
            color: var(--text-secondary-light);
        }

        .dark #executive-search .dark\:text-text-secondary-dark {
            color: var(--text-secondary-dark);
        }

        #executive-search .text-primary {
            color: var(--primary-color);
        }

        .dark #executive-search .dark\:text-white {
            color: #ffffff;
        }

        /* Gradients */
        #executive-search .to-background-light {
            --tw-gradient-to: var(--bg-light) var(--tw-gradient-to-position);
        }

        .dark #executive-search .dark\:to-background-dark {
            --tw-gradient-to: var(--bg-dark) var(--tw-gradient-to-position);
        }

        #executive-search .bg-gradient-fade {
            background-image: linear-gradient(to right, rgba(243, 244, 246, 0) 0%, rgba(243, 244, 246, 0.8) 40%, rgba(243, 244, 246, 1) 60%);
        }

        .dark #executive-search .dark\:bg-gradient-fade-dark {
            background-image: linear-gradient(to right, rgba(17, 24, 39, 0) 0%, rgba(17, 24, 39, 0.8) 40%, rgba(17, 24, 39, 1) 60%);
        }

        @media (min-width: 1024px) {
            #executive-search .lg\:bg-gradient-fade {
                background-image: linear-gradient(to right, rgba(243, 244, 246, 0) 0%, rgba(243, 244, 246, 0.8) 40%, rgba(243, 244, 246, 1) 60%);
            }

            .dark #executive-search .dark\:lg\:bg-gradient-fade-dark {
                background-image: linear-gradient(to right, rgba(17, 24, 39, 0) 0%, rgba(17, 24, 39, 0.8) 40%, rgba(17, 24, 39, 1) 60%);
            }
        }

        /* Glass Panels */
        #executive-search .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .dark #executive-search .glass-panel {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Fix CSS Selector Escaping for the Progress Animations & Accents */
        #executive-search .border-l-accent {
            border-left-color: #81c3c9;
        }

        #executive-search .border-l-accent-alt {
            border-left-color: rgba(129, 195, 201, 0.6);
        }

        /* Animation Bars (re-named from buggy Tailwind opacity overrides) */
        #executive-search .executor-bar {
            background-color: rgba(129, 195, 201, 0.2);
        }

        #executive-search .executor-bar-dim {
            background-color: rgba(129, 195, 201, 0.1);
        }

        #executive-search .executor-bar-mid {
            background-color: rgba(129, 195, 201, 0.4);
        }

        #executive-search .executor-bar-active {
            background-color: rgba(129, 195, 201, 1);
        }

        /* Animation Shapes */
        #executive-search .arrow-shape {
            clip-path: polygon(0% 0%, 98% 0%, 100% 50%, 98% 100%, 0% 100%, 2% 50%);
        }

        @keyframes es-progress {
            0% {
                width: 0%;
            }

            100% {
                width: var(--target-width);
            }
        }

        #executive-search .animate-progress-fill {
            animation: es-progress 1.5s ease-out forwards;
        }

        #executive-search .delay-300 {
            animation-delay: 300ms;
        }

        #executive-search .delay-700 {
            animation-delay: 700ms;
        }
    </style>
@endpush