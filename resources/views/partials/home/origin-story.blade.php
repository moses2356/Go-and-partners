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
            data-reveal="fade-in" src="{{ asset('images/premium_origami_background.jpg') }}" />
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