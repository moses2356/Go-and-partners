<!-- Desktop & Mobile Top Bar -->
<nav
    class="fixed top-0 left-0 w-full px-6 py-4 md:px-12 flex justify-between items-center bg-white/95 dark:bg-[#19203d]/95 backdrop-blur-md z-[100] border-b border-gray-100 dark:border-gray-800 transition-all duration-300 shadow-sm">
    <div class="flex items-center gap-3">
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/go and partners logo.png') }}" alt="GO & Partners Logo"
                class="h-10 md:h-12 w-auto">
            <span class="font-display font-bold text-primary dark:text-white tracking-wide text-base md:text-lg">GO &
                Partners</span>
        </a>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex gap-8 text-sm font-semibold text-gray-600 dark:text-gray-300">
        <a class="hover:text-secondary transition-colors" href="/">Home</a>
        <a class="hover:text-secondary transition-colors" href="#">About Us</a>
        <a class="hover:text-secondary transition-colors" href="#">Services</a>
        <a class="hover:text-secondary transition-colors" href="#">Contact</a>
    </div>

    <!-- Mobile Hamburger -->
    <button id="mobile-menu-btn" class="md:hidden text-primary dark:text-white p-2">
        <span class="material-icons-outlined text-3xl">menu</span>
    </button>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay"
    class="fixed inset-0 bg-primary/40 backdrop-blur-sm z-[101] hidden opacity-0 transition-opacity duration-300"></div>

<!-- Mobile Menu Drawer -->
<div id="mobile-menu-drawer"
    class="fixed top-0 right-0 h-full w-[280px] bg-white dark:bg-[#19203d] shadow-2xl z-[102] transform translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 flex justify-between items-center border-b border-gray-100 dark:border-gray-800">
        <span class="font-display font-bold text-primary dark:text-white">Menu</span>
        <button id="mobile-menu-close" class="text-gray-500 hover:text-primary dark:hover:text-white">
            <span class="material-icons-outlined text-2xl">close</span>
        </button>
    </div>
    <div class="flex flex-col p-6 space-y-6 font-medium text-lg text-primary dark:text-gray-200">
        <a href="/" class="hover:text-secondary">Home</a>
        <a href="#" class="hover:text-secondary">About Us</a>
        <a href="#" class="hover:text-secondary">Services</a>
        <a href="#" class="hover:text-secondary">Contact</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnOpen = document.getElementById('mobile-menu-btn');
        const btnClose = document.getElementById('mobile-menu-close');
        const overlay = document.getElementById('mobile-menu-overlay');
        const drawer = document.getElementById('mobile-menu-drawer');

        function openMenu() {
            overlay.classList.remove('hidden');
            // small delay to allow display block to take effect before opacity transition
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                overlay.classList.add('opacity-100');
            }, 10);
            drawer.classList.remove('translate-x-full');
            drawer.classList.add('translate-x-0');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            drawer.classList.remove('translate-x-0');
            drawer.classList.add('translate-x-full');
            overlay.classList.remove('opacity-100');
            overlay.classList.add('opacity-0');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
            document.body.style.overflow = '';
        }

        if (btnOpen) btnOpen.addEventListener('click', openMenu);
        if (btnClose) btnClose.addEventListener('click', closeMenu);
        if (overlay) overlay.addEventListener('click', closeMenu);
    });
</script>