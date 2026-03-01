<section id="our-dna"
    class="relative pt-24 pb-12 lg:pb-16 flex items-center justify-center bg-primary dark:bg-background-dark overflow-hidden z-20">
    <!-- Background overlay -->
    <div class="absolute inset-0 z-0 pointer-events-none w-full h-full overflow-hidden">
        <img alt="Abstract staircase representing growth"
            class="staircase-overlay w-full h-full object-cover object-center opacity-30 dark:opacity-40 mix-blend-luminosity"
            src="https://images.unsplash.com/photo-1550684376-efcbd6e3f031?q=80&w=1920&auto=format&fit=crop" />
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
            <svg class="absolute top-1/2 left-0 w-full h-48 -translate-y-1/2 md:hidden lg:block pointer-events-none z-0"
                preserveAspectRatio="none">
                <defs>
                    <filter height="150%" id="glow" width="150%" x="-25%" y="-25%">
                        <feGaussianBlur result="blur" stdDeviation="5"></feGaussianBlur>
                        <feComposite in="SourceGraphic" in2="blur" operator="over"></feComposite>
                    </filter>
                    <linearGradient id="lineGradient" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#4FD1C5" stop-opacity="0"></stop>
                        <stop offset="10%" stop-color="#4FD1C5" stop-opacity="0.5"></stop>
                        <stop offset="90%" stop-color="#4FD1C5" stop-opacity="0.5"></stop>
                        <stop offset="100%" stop-color="#4FD1C5" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
                <path d="M0,100 Q150,150 300,100 T600,100 T900,100 T1200,100" fill="none"
                    stroke="rgba(79, 209, 197, 0.2)" stroke-width="4"></path>

                <!-- Flowing Line -->
                <path class="animate-path"
                    d="M-50,120 C150,160 200,40 350,90 C450,140 550,40 650,90 C750,140 850,40 950,90 C1050,140 1100,60 1300,120"
                    fill="none" filter="url(#glow)" stroke="url(#lineGradient)" stroke-linecap="round" stroke-width="4">
                </path>

                <!-- Moving Glowing Particle with Fade in/out to hide jump -->
                <circle r="6" fill="#fff" filter="url(#glow)">
                    <animateMotion dur="6s" repeatCount="indefinite"
                        path="M-50,120 C150,160 200,40 350,90 C450,140 550,40 650,90 C750,140 850,40 950,90 C1050,140 1100,60 1300,120" />
                    <animate attributeName="opacity" values="0;1;1;1;0" keyTimes="0;0.1;0.5;0.9;1" dur="6s"
                        repeatCount="indefinite" />
                </circle>
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
                                class="material-icons-round text-white group-hover:text-secondary transition-colors duration-300"
                                style="font-size: 70px;">groups</span>
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
                                class="material-icons-round text-white group-hover:text-secondary transition-colors duration-300"
                                style="font-size: 55px;">volunteer_activism</span>
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
                                class="material-icons-round text-white group-hover:text-secondary transition-colors duration-300"
                                style="font-size: 85px;">flag</span>
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
                                class="material-icons-round text-white group-hover:text-secondary transition-colors duration-300"
                                style="font-size: 55px;">psychology</span>
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
                                class="material-icons-round text-white group-hover:text-secondary transition-colors duration-300"
                                style="font-size: 70px;">rocket_launch</span>
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