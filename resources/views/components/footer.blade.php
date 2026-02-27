<footer class="bg-slate-950 text-white py-20 relative overflow-hidden border-t border-slate-900">
    <!-- Subtle gradient background effect -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/50 to-transparent pointer-events-none"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <!-- Main Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-8 mb-16">

            <!-- Column 1: Brand & Tagline -->
            <div class="lg:col-span-1 flex flex-col items-start reveal-up" style="animation-delay: 0.1s">
                <a href="/" class="flex mb-6 group cursor-pointer inline-block">
                    <img src="{{ asset('images/go and partners footer.png') }}" alt="GO & PARTNERS Logo"
                        class="h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-105" />
                </a>
                <p class="text-slate-400 font-light leading-relaxed mb-6 max-w-sm">
                    Empowering organizations with extraordinary leadership. Trusted advisors dedicated to building
                    enduring legacies through human connection.
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="lg:col-span-1 reveal-up" style="animation-delay: 0.2s">
                <h3 class="text-sm font-black uppercase tracking-[0.2em] text-slate-500 mb-6">Explore</h3>
                <ul class="space-y-4 font-medium text-slate-300">
                    <li>
                        <a href="#" class="hover:text-secondary transition-colors duration-300 flex items-center group">
                            <span
                                class="h-px w-0 bg-secondary group-hover:w-4 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-secondary transition-colors duration-300 flex items-center group">
                            <span
                                class="h-px w-0 bg-secondary group-hover:w-4 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-secondary transition-colors duration-300 flex items-center group">
                            <span
                                class="h-px w-0 bg-secondary group-hover:w-4 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-secondary transition-colors duration-300 flex items-center group">
                            <span
                                class="h-px w-0 bg-secondary group-hover:w-4 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                            The Origin Story
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="lg:col-span-1 reveal-up" style="animation-delay: 0.3s">
                <h3 class="text-sm font-black uppercase tracking-[0.2em] text-slate-500 mb-6">Connect</h3>
                <ul class="space-y-4 font-medium text-slate-300">
                    <li>
                        <a href="mailto:gong@goandpartners.com"
                            class="hover:text-white transition-colors duration-300 flex flex-col">
                            <span class="text-xs text-slate-500 uppercase tracking-wider mb-1">Email</span>
                            gong@goandpartners.com
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="tel:+622151401519"
                            class="hover:text-white transition-colors duration-300 flex flex-col">
                            <span class="text-xs text-slate-500 uppercase tracking-wider mb-1">Phone</span>
                            +62 21 5140 1519
                        </a>
                    </li>
                    <li class="pt-2">
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-500 uppercase tracking-wider mb-1">Office HQ</span>
                            <span class="leading-relaxed">
                                Plaza Asia<br>
                                Jl. Jend. Sudirman Kav 59, Suite 19-D<br>
                                Jakarta 12190, Indonesia
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-slate-800/50 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-slate-500 reveal-up"
            style="animation-delay: 0.5s">
            <p>
                &copy; {{ date('Y') }} GO &amp; Partners Consulting. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-slate-300 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>