@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <style>
        .glass-card-transparent {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 48;
        }

        .split-pane {
            height: 100vh;
        }
    </style>
@endpush

{{-- Industry Practices Section --}}
<section id="industry-practices"
    class="flex flex-col lg:flex-row w-full min-h-screen text-gray-800 dark:text-gray-100 overflow-x-hidden">
    <div class="relative w-full lg:w-1/2 split-pane overflow-hidden flex flex-col justify-center bg-primary">
        <div class="relative z-10 px-12 lg:px-24 text-center lg:text-left w-full h-full flex flex-col justify-center">
            <div class="mb-auto pt-16">
            </div>
            <div class="my-auto">
                <h1 class="text-4xl lg:text-6xl font-black uppercase tracking-tighter outline-text leading-none mb-2">
                    Shaping
                </h1>
                <h2 class="text-3xl lg:text-5xl font-black uppercase text-white leading-[1.1] tracking-tight mb-8">
                    The Future <br />
                    <span class="text-secondary">With People</span>
                </h2>
                <div class="max-w-md space-y-6 text-base lg:text-lg text-white/80 leading-relaxed font-light">
                    <p>
                        We invest time in understanding the <strong class="font-bold text-white">passion, purpose, and
                            potential of people.</strong> It's about more than filling seats, it's about building
                        bridges.
                    </p>
                </div>
            </div>
            <div class="mt-auto pb-16"></div>
        </div>
    </div>

    <div class="relative w-full lg:w-1/2 split-pane overflow-hidden flex items-end lg:items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img alt="Advanced technology and global network background" class="w-full h-full object-cover"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsHbSCshgkozGR-00ipzJovraDTr0moXqFEtpx_zhNF5bVkBTBbTdIO5mFNE1t6REkUSpictlIY4qhS4pQuHD4OdyXlZJL1Jisy79qIbWg1sjOHlxRzVPtx-_560vhDXtZnjage6ECrucQpHCGI0bPOmI3rgnGDSiRTPTufVLHp2AAUXYWmsdkKd66ArjfNSYcBp0FaYCeAKD2oY5wCx4l9Ud5AFUbNGOsgptOjEuA-9Wpb9u1n9o94uQXgnjDUALYPThod0i_1aE" />
            <div class="absolute inset-0 bg-gradient-to-t from-primary/30 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 w-full h-full flex flex-col justify-end lg:justify-center p-8 lg:p-12 lg:pl-16">
            <div
                class="glass-card-transparent rounded-2xl p-6 lg:p-8 shadow-lg relative overflow-hidden group max-w-sm ml-auto mr-0 lg:mr-12 mb-8 lg:mb-0 transition-all duration-500 hover:bg-white/5">
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-6 h-[1px] bg-secondary"></div>
                        <span class="text-[9px] font-bold uppercase tracking-[0.2em] text-white/90">Our Expertise</span>
                    </div>
                    <h3 class="text-xl font-light text-white uppercase tracking-wider mb-1">
                        Industry
                    </h3>
                    <h3 class="text-3xl font-black text-white uppercase tracking-tight mb-4">
                        Practices
                    </h3>
                    <p class="text-white/90 leading-relaxed text-xs mb-6 font-light">
                        GO&amp;Partners is a generalist Executive Search firm specializing in a multitude of <strong
                            class="text-white font-medium">industry practices</strong>, such as Consumer Retail,
                        Financial Services, and beyond.
                    </p>
                    <a class="inline-flex items-center px-5 py-2.5 bg-secondary text-white rounded-full font-bold uppercase text-[9px] tracking-widest hover:bg-white hover:text-primary transition-all duration-300 shadow-md"
                        href="#">
                        <span>Explore Practices</span>
                        <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute top-12 right-12 flex gap-4">
            <div class="w-2 h-2 rounded-full border border-white/40"></div>
            <div class="w-2 h-2 rounded-full border border-white/40"></div>
            <div class="w-2 h-2 rounded-full bg-secondary"></div>
        </div>
    </div>
</section>