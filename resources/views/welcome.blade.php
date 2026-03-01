@extends('layouts.app')

@php
    $title = 'GO & Partners - About Us';
@endphp

@section('content')
    <!-- Add an explicit container for the particle background and floating orbs -->
    <div id="particle-wrapper" class="relative w-full overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Floating orbs for background effect -->
        <div class="floating-orb w-[300px] h-[300px] md:w-[600px] md:h-[600px] top-[-10%] right-[-10%] bg-secondary">
        </div>
        <div
            class="floating-orb w-[200px] h-[200px] md:w-[400px] md:h-[400px] bottom-[-5%] left-[-5%] bg-primary opacity-30">
        </div>

        @include('partials.home.hero')

        <div class="floating-orb w-[200px] h-[200px] md:w-[400px] md:h-[400px] top-[10%] left-[-5%]"></div>
        <div class="floating-orb w-[250px] h-[250px] md:w-[500px] md:h-[500px] top-[40%] right-[-10%] bg-blue-400"></div>
        <div class="floating-orb w-[150px] h-[150px] md:w-[300px] md:h-[300px] bottom-[10%] left-[20%]"></div>

        @include('partials.home.values')
    </div>

    @include('partials.home.who-we-are')
    @include('partials.home.origin-story')
    @include('partials.home.milestones')
    @include('partials.home.finding-leaders')
    @include('partials.home.our-dna')
    @include('partials.home.gary-ong')
@endsection