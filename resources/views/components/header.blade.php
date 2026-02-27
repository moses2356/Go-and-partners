<nav
    class="fixed top-0 left-0 w-full px-6 py-4 md:px-12 flex justify-between items-center bg-white/90 dark:bg-primary/80 backdrop-blur-md z-[100] border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
    <div class="flex items-center gap-3">
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/go and partners logo.png') }}" alt="GO & Partners Logo" class="h-12 w-auto">
            <span class="font-display font-bold text-primary dark:text-white tracking-wide text-lg">GO & Partners</span>
        </a>
    </div>
    <div class="hidden md:flex gap-8 text-sm font-semibold text-gray-600 dark:text-gray-300">
        <a class="hover:text-secondary transition-colors" href="#">Home</a>
        <a class="text-secondary" href="#">About Us</a>
        <a class="hover:text-secondary transition-colors" href="#">Services</a>
        <a class="hover:text-secondary transition-colors" href="#">Contact</a>
    </div>
    <button class="md:hidden text-primary dark:text-white">
        <span class="material-icons-outlined">menu</span>
    </button>
</nav>