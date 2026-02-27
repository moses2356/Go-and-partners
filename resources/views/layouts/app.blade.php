<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title>{{ $title ?? 'GO & Partners' }}</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Montserrat:wght@300;400;600;700;900&family=Open+Sans:wght@400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#19203d",
                        secondary: "#62C4C9",
                        accent: "#22d3ee", // Cyan primary from new design
                        "background-light": "#F2F4F6",
                        "background-dark": "#0f1326",
                        "text-light": "#333333",
                        "text-dark": "#f3f4f6",
                        // Re-mapping for the new design's usage
                        "cyan-primary": "#22d3ee",
                        "new-bg-dark": "#19203d",
                    },
                    fontFamily: {
                        display: ['Montserrat', 'sans-serif'],
                        body: ['Inter', 'Open Sans', 'sans-serif'],
                        serif: ["'Playfair Display'", "serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'xl': "1rem",
                        '2xl': "1.5rem",
                        'custom': '60px',
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    },
                    animation: {
                        'spin-slow': 'spin 20s linear infinite',
                        'scroll': 'scroll-down 2s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'scroll-down': {
                            '0%, 100%': { transform: 'translateY(-100%)', opacity: 0 },
                            '50%': { transform: 'translateY(0)', opacity: 1 },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                },
            },
        };
    </script>
    <style>
        .outline-text {
            -webkit-text-stroke: 1px #9ca3af;
        }

        .outline-text-thin {
            color: transparent;
            -webkit-text-stroke: 0.5px #22d3ee;
        }

        .dark .outline-text-thin {
            -webkit-text-stroke: 0.5px rgba(34, 211, 238, 0.6);
        }

        .phrase-container {
            transition: transform 0.5s ease-out;
        }

        .phrase-container:hover {
            transform: scale(1.05);
        }

        .floating-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(100px);
            opacity: 0.2;
            pointer-events: none;
            z-index: -10;
            background: radial-gradient(circle, #22d3ee 0%, transparent 70%);
        }

        @media (prefers-color-scheme: dark) {
            .outline-text {
                -webkit-text-stroke: 1px #4b5563;
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        @keyframes reveal-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        [data-reveal] {
            opacity: 0;
            transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1);
        }

        [data-reveal="reveal-up"] {
            transform: translateY(30px);
        }

        [data-reveal="fade-in"] {
            transform: none;
        }

        [data-reveal].active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-up {
            /* Keep for backward compatibility or direct usage */
            opacity: 0;
            animation: reveal-up 1.2s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        .fade-in {
            /* Keep for backward compatibility or direct usage */
            opacity: 0;
            animation: fade-in 1.5s ease-out forwards;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .glass-effect {
            background: rgba(15, 19, 38, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .outline-white {
            -webkit-text-stroke: 1px white;
            color: transparent;
        }

        .outline-text {
            -webkit-text-stroke: 1px #19203d;
            color: transparent;
        }

        .dark .outline-text {
            -webkit-text-stroke: 1px #e2e8f0;
        }

        .animate-draw {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;
            animation: drawLine 2s ease-out forwards;
        }

        @keyframes drawLine {
            from {
                stroke-dashoffset: 1000;
            }

            to {
                stroke-dashoffset: 0;
            }
        }

        /* SVG Flowing Water Animation */
        @keyframes waterFlow {
            to {
                stroke-dashoffset: -1000;
            }
        }

        .animate-water-base {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;
            opacity: 0.15;
            animation: drawLine 2s ease-out forwards;
        }

        .animate-water-fast {
            stroke-dasharray: 200 150;
            animation: waterFlow 5s linear infinite;
        }

        .animate-water-slow {
            stroke-dasharray: 80 200;
            animation: waterFlow 8s linear infinite;
        }

        /* SVG Pulse Animation */
        @keyframes gentlePulse {

            0%,
            100% {
                opacity: 0.3;
                stroke-width: 4px;
            }

            50% {
                opacity: 1;
                stroke-width: 14px;
            }
        }

        .animate-pulse-glow {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;
            animation: gentlePulse 4s ease-in-out infinite;
        }

        .curved-edge {
            clip-path: ellipse(100% 100% at 0% 50%);
        }

        .path-ribbon {
            position: absolute;
            width: 200px;
            height: 100%;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(180deg, #4fd1c5 0%, #38b2ac 50%, #4fd1c5 100%);
            mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 800" xmlns="http://www.w3.org/2000/svg"><path d="M50 0 Q 100 150 50 300 T 50 600 T 50 800" stroke="black" stroke-width="12" fill="none"/></svg>');
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 800" xmlns="http://www.w3.org/2000/svg"><path d="M50 0 Q 100 150 50 300 T 50 600 T 50 800" stroke="black" stroke-width="20" fill="none" stroke-linecap="round"/></svg>');
            mask-repeat: no-repeat;
            -webkit-mask-repeat: no-repeat;
            mask-size: cover;
            -webkit-mask-size: cover;
            filter: drop-shadow(0 0 10px rgba(79, 209, 197, 0.5));
            z-index: 10;
        }

        /* Milestone Animations: Flowing Liquid Ribbon */
        .animate-liquid-flow {
            animation: liquid-flow 3s linear infinite;
        }

        .animate-liquid-flow-slow {
            animation: liquid-flow 6s linear infinite;
        }

        .animate-liquid-pulse {
            animation: liquid-pulse 2s ease-in-out infinite;
        }

        @keyframes liquid-flow {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100%);
            }
        }

        @keyframes liquid-pulse {

            0%,
            100% {
                opacity: 0.1;
                transform: scaleY(0.9);
            }

            50% {
                opacity: 0.4;
                transform: scaleY(1.1);
            }
        }

        .milestone-node {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .milestone-node:hover {
            transform: scale(1.1);
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-up.animate-play {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-1 {
            transition-delay: 0.5s;
        }

        .delay-2 {
            transition-delay: 1.2s;
        }

        .delay-3 {
            transition-delay: 1.9s;
        }

        @keyframes scroll-down {
            0% {
                transform: translateY(0);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateY(20px);
                opacity: 0;
            }
        }

        .animate-scroll {
            animation: scroll-down 2s ease-in-out infinite;
        }

        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }

        /* Our DNA Animations */
        @keyframes flowLine {
            0% {
                stroke-dashoffset: 1000;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        .animate-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: flowLine 3s linear infinite;
        }

        .pulse-glow {
            animation: pulse-teal 2s infinite;
        }

        @keyframes pulse-teal {
            0% {
                box-shadow: 0 0 0 0 rgba(79, 209, 197, 0.4);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(79, 209, 197, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(79, 209, 197, 0);
            }
        }

        .icon-container:hover .icon-circle {
            transform: scale(1.1);
            box-shadow: 0 0 25px #4FD1C5;
            border-color: #4FD1C5;
        }

        .staircase-overlay {
            mix-blend-mode: overlay;
            opacity: 0.15;
            filter: grayscale(100%) contrast(150%);
        }
    </style>
    @stack('styles')
</head>

<body class="bg-background-light dark:bg-background-dark font-body antialiased transition-colors duration-300">
    <x-header />

    <!-- Global Corner Watermark -->
    <div class="fixed bottom-8 left-8 md:left-12 z-30 pointer-events-none">
        <span class="text-[10px] font-black uppercase tracking-[0.4em] text-slate-400/80 dark:text-slate-500/80">GO &
            PARTNERS</span>
    </div>

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Once animated, we don't need to observe it anymore
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Select all elements with data-reveal attribute
            document.querySelectorAll('[data-reveal]').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
    @stack('scripts')
</body>

</html>