<!-- Gary Ong Profile Section -->
<section id="gary-ong-profile" class="relative overflow-hidden bg-[#F8FAFC] dark:bg-background-dark">

    <!-- ===== MOBILE LAYOUT (< lg) ===== -->
    <div class="lg:hidden flex flex-col">
        <!-- Dark top bio panel -->
        <div class="bg-[#19203d] px-6 pt-10 pb-6 relative overflow-hidden">
            <div class="absolute -top-10 -left-10 w-40 h-40 bg-[#6ec9d4]/5 rounded-full blur-2xl pointer-events-none">
            </div>
            <!-- Logo removed per user request -->
            <p class="text-white font-display uppercase tracking-widest text-lg font-light mb-0">MEET</p>
            <h1 class="text-5xl font-display font-bold text-[#6ec9d4] tracking-tight leading-none mt-1 mb-6">GARY ONG
            </h1>
            <div class="space-y-3 text-white/75 text-sm leading-relaxed font-light mb-6">
                <p>With more than <strong class="text-white font-semibold">30 years of experience</strong> in executive
                    search, Gary Ong has developed a strong track record supporting organizations across diverse
                    industries. He has partnered with both local and multinational companies in Indonesia, earning
                    valuable insights and building a wide-reaching professional network.</p>
                <p>Gary holds a Bachelor's degree in Business from Pepperdine University (USA) and has further enhanced
                    his expertise through the Advanced Consulting Program at the Kellogg School of Management,
                    Northwestern University.</p>
            </div>
        </div>
        <!-- Photo -->
        <div class="bg-[#19203d] flex justify-center items-end h-[380px] overflow-hidden relative">
            <!-- Soft glow behind photo on mobile -->
            <div
                class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/20 to-transparent pointer-events-none">
            </div>
            <img src="{{ asset('images/garyong.png') }}" alt="Portrait of Gary Ong"
                class="h-[110%] w-auto object-cover object-bottom drop-shadow-[0_15px_15px_rgba(0,0,0,0.6)] relative z-10" />
        </div>
        <!-- White skills panel -->
        <div class="bg-white dark:bg-slate-900 px-6 py-8 space-y-6">
            <!-- Expertise -->
            <div class="flex gap-4 items-start">
                <div
                    class="flex-shrink-0 w-14 h-14 rounded-full border border-[#6ec9d4]/60 bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center">
                    <span class="material-icons text-[#19203d] dark:text-[#6ec9d4] text-2xl">share</span>
                </div>
                <div>
                    <h3 class="text-base font-display font-bold text-[#19203d] dark:text-white mb-1">Expertise</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">Life sciences, consumer/FMCG,
                        financial services (banking, insurance, securities, and private equity), chemicals, industrial
                        sectors, telecommunications, and metal mining.</p>
                </div>
            </div>
            <!-- In-Depth Knowledge -->
            <div class="flex gap-4 items-start">
                <div
                    class="flex-shrink-0 w-14 h-14 rounded-full border border-[#6ec9d4]/60 bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center">
                    <span class="material-icons text-[#19203d] dark:text-[#6ec9d4] text-2xl">tips_and_updates</span>
                </div>
                <div>
                    <h3 class="text-base font-display font-bold text-[#19203d] dark:text-white mb-1">In-Depth Knowledge
                    </h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">Indonesian business landscape
                        and its communities, enabling him to identify and place top-tier executive talent in key
                        leadership roles.</p>
                </div>
            </div>
            <!-- Specialization -->
            <div class="flex gap-4 items-start">
                <div
                    class="flex-shrink-0 w-14 h-14 rounded-full border border-[#6ec9d4]/60 bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center">
                    <span class="material-icons text-[#19203d] dark:text-[#6ec9d4] text-2xl">account_circle</span>
                </div>
                <div>
                    <h3 class="text-base font-display font-bold text-[#19203d] dark:text-white mb-1">Specialization</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">General management, sales and
                        marketing, finance, and HR functions.</p>
                </div>
            </div>
            <!-- Company Profile bottom text removed -->
        </div>
    </div>

    <!-- ===== DESKTOP LAYOUT (lg+) ===== -->
    <div class="hidden lg:flex justify-center w-full bg-[#19203d]">
        <div class="w-full flex relative bg-[#f4f6f8] dark:bg-slate-900 shadow-2xl">

            <!-- LEFT: Dark bio panel (50%) -->
            <div
                class="w-1/2 bg-[#19203d] text-white flex flex-col justify-center pl-12 pr-28 xl:pl-24 xl:pr-40 lg:pt-24 lg:pb-12 xl:pt-32 xl:pb-16 relative overflow-visible z-10 shrink-0">
                <div
                    class="absolute -top-16 -left-16 w-72 h-72 bg-[#6ec9d4]/5 rounded-full blur-3xl pointer-events-none">
                </div>

                <!-- Logo removed per user request -->

                <!-- Bio content -->
                <div class="flex flex-col justify-center relative z-10" data-reveal="reveal-up">
                    <p class="text-white font-display uppercase tracking-wider text-2xl xl:text-3xl font-light mb-0">
                        MEET</p>
                    <h1
                        class="text-6xl lg:text-7xl xl:text-8xl font-display font-bold text-[#6ec9d4] tracking-tight leading-none mt-1 mb-8">
                        GARY ONG
                    </h1>
                    <div class="space-y-5 text-white/80 text-lg xl:text-xl leading-relaxed font-light pr-8 max-w-lg">
                        <p>With more than <strong class="text-white font-semibold">30 years of experience</strong> in
                            executive search, Gary Ong has developed a strong track record supporting organizations
                            across diverse industries. He has partnered with both local and multinational companies in
                            Indonesia, earning valuable insights and building a wide-reaching professional network.</p>
                        <p>Gary holds a Bachelor's degree in Business from Pepperdine University (USA) and has further
                            enhanced his expertise through the Advanced Consulting Program at the Kellogg School of
                            Management, Northwestern University.</p>
                    </div>
                </div>

            </div>

            <!-- CENTER: Gary Photo (Absolute positioned to overlap cleanly) -->
            <div
                class="absolute left-[50%] top-auto bottom-0 -translate-x-1/2 z-20 w-[500px] xl:w-[600px] flex justify-center items-end pointer-events-none select-none h-[100%]">
                <img src="{{ asset('images/garyong.png') }}" alt="Portrait of Gary Ong"
                    class="w-auto h-auto min-h-[500px] max-h-[96%] object-contain object-bottom drop-shadow-[0_20px_25px_rgba(0,0,0,0.5)]"
                    data-reveal="fade-in" style="animation-delay: 0.3s;" />
            </div>

            <!-- RIGHT: White skills panel (50%) -->
            <div
                class="w-1/2 bg-[#f4f6f8] dark:bg-slate-900 flex flex-col justify-center pl-[320px] xl:pl-[380px] pr-12 xl:pr-24 lg:pt-24 lg:pb-16 xl:pt-32 xl:pb-20 relative z-10 shrink-0">

                <!-- Cards -->
                <div class="flex flex-col justify-center space-y-12">

                    <!-- Expertise -->
                    <div class="flex gap-6 items-center group cursor-default" data-reveal="reveal-up"
                        style="animation-delay:0.1s">
                        <div class="flex-shrink-0 relative">
                            <!-- Outer decorative border similar to reference -->
                            <div
                                class="w-20 h-20 xl:w-24 xl:h-24 rounded-full border-2 border-[#19203d] dark:border-[#6ec9d4]/60 bg-transparent flex items-center justify-center transition-all duration-300 group-hover:bg-[#19203d]/5 dark:group-hover:bg-[#6ec9d4]/10 border-dashed">
                                <!-- Inner circle -->
                                <div
                                    class="w-14 h-14 xl:w-16 xl:h-16 rounded-full bg-[#19203d] dark:bg-slate-800 flex items-center justify-center text-white dark:text-[#6ec9d4]">
                                    <span class="material-icons text-3xl xl:text-4xl">share</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <h3
                                class="text-xl xl:text-2xl font-display font-bold text-[#19203d] dark:text-white mb-2 group-hover:text-[#6ec9d4] transition-colors">
                                Expertise</h3>
                            <p class="text-base xl:text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                                Life
                                sciences,
                                consumer/FMCG, financial services <br class="hidden xl:block" /> (banking, insurance,
                                securities, and private equity), chemicals, industrial sectors, telecommunications, and
                                metal mining.</p>
                        </div>
                    </div>

                    <!-- In-Depth Knowledge -->
                    <div class="flex gap-6 items-center group cursor-default" data-reveal="reveal-up"
                        style="animation-delay:0.2s">
                        <div class="flex-shrink-0 relative">
                            <div
                                class="w-20 h-20 xl:w-24 xl:h-24 rounded-full border-2 border-[#19203d] dark:border-[#6ec9d4]/60 bg-transparent flex items-center justify-center transition-all duration-300 group-hover:bg-[#19203d]/5 dark:group-hover:bg-[#6ec9d4]/10 border-dashed">
                                <div
                                    class="w-14 h-14 xl:w-16 xl:h-16 rounded-full bg-[#19203d] dark:bg-slate-800 flex items-center justify-center text-white dark:text-[#6ec9d4]">
                                    <span class="material-icons text-3xl xl:text-4xl">tips_and_updates</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <h3
                                class="text-xl xl:text-2xl font-display font-bold text-[#19203d] dark:text-white mb-2 group-hover:text-[#6ec9d4] transition-colors">
                                In-Depth Knowledge</h3>
                            <p class="text-base xl:text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                                Indonesian
                                business landscape and its communities, <br class="hidden xl:block" /> enabling him to
                                identify and place top-tier executive talent in key leadership roles.</p>
                        </div>
                    </div>

                    <!-- Specialization -->
                    <div class="flex gap-6 items-center group cursor-default" data-reveal="reveal-up"
                        style="animation-delay:0.3s">
                        <div class="flex-shrink-0 relative">
                            <div
                                class="w-20 h-20 xl:w-24 xl:h-24 rounded-full border-2 border-[#19203d] dark:border-[#6ec9d4]/60 bg-transparent flex items-center justify-center transition-all duration-300 group-hover:bg-[#19203d]/5 dark:group-hover:bg-[#6ec9d4]/10 border-dashed">
                                <div
                                    class="w-14 h-14 xl:w-16 xl:h-16 rounded-full bg-[#19203d] dark:bg-slate-800 flex items-center justify-center text-white dark:text-[#6ec9d4]">
                                    <span class="material-icons text-3xl xl:text-4xl">account_circle</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <h3
                                class="text-xl xl:text-2xl font-display font-bold text-[#19203d] dark:text-white mb-2 group-hover:text-[#6ec9d4] transition-colors">
                                Specialization</h3>
                            <p class="text-base xl:text-lg text-gray-600 dark:text-gray-400 leading-relaxed font-light">
                                General
                                management, sales and marketing, finance, and <br class="hidden xl:block" /> HR
                                functions.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Bottom text removed -->
            </div>

        </div> <!-- End of inner max-w-1440px wrapper -->
    </div>
</section>