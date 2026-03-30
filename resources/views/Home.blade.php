<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Regret Consultancy</title>
    <meta name="description"
        content="Regret Consultancy is a professional consulting firm helping businesses and individuals grow with smart strategies, expert advice, and result-driven solutions.">
    <meta name="keywords"
        content="Regret Consultancy, business consulting India, career guidance services, professional consultancy, startup consulting, marketing strategy, business growth services, consultancy firm India, expert consulting services, digital consulting">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Smooth transition for all properties */
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Hover states using standard CSS for precision */
        .service-card:hover {
            background-color: #2563eb;
            /* Blue-600 */
            transform: translateY(-10px);
        }

        .service-card:hover h3,
        .service-card:hover p,
        .service-card:hover a {
            color: #ffffff !important;
        }

        .service-card:hover .icon-box {
            background-color: #ffffff;
        }

        .service-card:hover .icon-box svg {
            color: #2563eb;
        }

        .image-container {
            position: relative;
            width: 100%;
            max-width: 500px;
        }

        /* Badi Image */
        .main-img {
            width: 85%;
            border-radius: 40px;
            display: block;
        }

        /* Choti Overlap Image */
        .overlap-img {
            position: absolute;
            bottom: -20px;
            right: 0;
            width: 55%;
            border: 10px solid #000;
            /* Gap effect ke liye */
            border-radius: 30px;
        }

        /* --- UPDATED CULTURE SECTION CSS --- */

        .culture-section {
            text-align: center;
            width: 100%;
            /* Width ko 100% rakhein taaki container center ho sake */
            max-width: 1200px;
            margin: auto;
            /* Auto margin se section screen ke center mein aa jayega */
            padding: 0 20px;
        }

        /* Header (Lines and Title) alignment */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Dots/Lines ko center karne ke liye */
            gap: 15px;
            margin-bottom: 10px;
        }

        .line {
            width: 50px;
            height: 1px;
            background-color: #fff;
        }

        .main-title {
            color: #3b82f6;
            /* Tailwind's blue-500 matching your theme */
            font-size: 36px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 50px;
        }

        /* Cards Container alignment */
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Cards ko center mein lane ke liye */
            gap: 25px;
        }

        /* Card Style */
        .card {
            background-color: #2563eb;
            /* Blue-600 to match your service cards */
            width: 270px;
            padding: 40px 25px;
            border-radius: 24px;
            /* Rounded corners match branding */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #fff;
            border-radius: 50%;
            margin-bottom: 25px;
        }

        .card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: white;
        }

        .card p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }

        .portfolio-card {
            background: linear-gradient(145deg, #0046ad, #001a4d);
            border-radius: 40px;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .inner-content {
            background: white;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .portfolio-card:hover .inner-content {
            transform: scale(1.05);
        }

        .tag-label {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: black;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* Tilted Hero Cards */
        .card-tilted {
            transition: transform 0.4s ease;
            perspective: 1000px;
        }

        .card-tilted:nth-child(odd) {
            transform: rotateY(-10deg);
        }

        .card-tilted:nth-child(even) {
            transform: rotateY(10deg);
        }

        .card-tilted:hover {
            transform: rotateY(0deg) translateY(-10px);
        }

        .hero-gradient {
            background: radial-gradient(circle at center, rgba(37, 99, 235, 0.15) 0%, transparent 70%);
        }

        .card-tilt {
            transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card-tilt:hover {
            transform: scale(1.05) translateY(-10px) rotate(0deg) !important;
            z-index: 50;
        }

        /* Responsive tilt adjustments */
        @media (min-width: 1024px) {
            .card-1 {
                transform: rotate(-5deg) translateY(20px);
            }

            .card-2 {
                transform: rotate(-2deg) translateY(0px);
            }

            .card-3 {
                transform: rotate(2deg) translateY(0px);
            }

            .card-4 {
                transform: rotate(5deg) translateY(20px);
            }
        }

        .dot {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            opacity: 0.3;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-line {
            opacity: 0;
            animation: fadeUp 0.8s ease forwards;
        }

        .animate-line:nth-child(1) {
            animation-delay: 0.2s;
        }

        .animate-line:nth-child(2) {
            animation-delay: 0.5s;
        }

        .animate-line:nth-child(3) {
            animation-delay: 0.8s;
        }
    </style>
</head>

<body class="bg-black text-white antialiased">
    <!-- Background Particles -->
    <div id="particles-container" class="fixed inset-0 pointer-events-none"></div>

    <!-- Header -->
    @include('layouts.header')
    <!-- Hero Content -->
    <main class="relative  min-h-screen flex flex-col items-center">
        <div class="hero-gradient absolute inset-0 pointer-events-none"></div>

        <!-- Top Particles -->
        <div class="absolute top-1/6 left-1/4 w-3 h-3 bg-blue-500 rounded-full blur-sm animate-pulse"></div>
        <div class="absolute top-1/3 right-1/4 w-2 h-2 bg-white rounded-full opacity-50"></div>
        {{-- <div class="absolute top-1/5 left-1/2 w-2 h-2 bg-blue-300 rounded-full opacity-60 animate-ping"></div> --}}

        <!-- Bottom Particles -->
        <div class="absolute top-1/6 right-1/4 w-3 h-3 bg-blue-500 rounded-full blur-sm animate-pulse"></div>
        <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-white rounded-full opacity-50"></div>
        {{-- <div class="absolute top-1/5 right-1/2 w-2 h-2 bg-blue-300 rounded-full opacity-60 animate-ping"></div>
        --}}

        <!-- Extra Floating Elements -->
        <div class="absolute top-10 right-10 w-1.5 h-1.5 bg-white opacity-40 rounded-full"></div>
        <div class="absolute top-10 left-10 w-1.5 h-1.5 bg-white opacity-40 rounded-full"></div>

        <!-- Main Content -->
        <div class="max-w-4xl text-center space-y-8 z-10 relative">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight">

                <span class="text-sky-400 block animate-line">Transform Your</span>
                <span class="text-blue-100 block animate-line">Brand Into</span>
                <span class="text-white block animate-line">Digital Success</span>

            </h1>


            <div class="flex flex-wrap justify-center gap-4 mt-10">
                <a href="/services"> <button id="exploreBtn"
                        class="group flex items-center gap-3 bg-[#0b2a4a] hover:bg-[#0d3a66] text-white px-6 py-3 rounded-full shadow-lg transition-all duration-300">

                        <span class="font-medium text-sm md:text-base">
                            Explore Our Services
                        </span>

                        <div id="arrowBox"
                            class="bg-white text-black p-2 rounded-full flex items-center justify-center transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7V17" />
                            </svg>
                        </div>
                    </button></a>
                <a href="/Career"> <button
                        class="bg-transparent border border-white/30 hover:border-white px-8 py-4 rounded-full font-semibold text-white transition-all">
                        Join Our Team
                    </button></a>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="mt-24 w-full max-w-7xl px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">

            <!-- Card 1 -->
            <div
                class="card-tilt card-1 bg-white/5 backdrop-blur-md rounded-2xl border border-white/20 overflow-hidden flex flex-col h-[400px]">
                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('image/3.jpg') }}" alt="Creativity" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-end bg-gradient-to-t from-white to-transparent">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                        <h3 class="font-bold text-lg text-sky-300">Creativity with Purpose</h3>
                    </div>
                    <p class="text-xs text-black leading-relaxed">
                        Designing with intention to create meaningful and impactful visual experiences.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="card-tilt card-2 bg-white/5 backdrop-blur-md rounded-2xl border border-white/20 overflow-hidden flex flex-col h-[400px]">
                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('image/home5.jpg') }}" alt="Data" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-end bg-gradient-to-t from-white to-transparent">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                        <h3 class="font-bold text-lg leading-tight text-sky-300">Data-Drive Decision Environment</h3>
                    </div>
                    <p class="text-xs text-black leading-relaxed">
                        Turning insights into smart, strategic decisions that drive measurable results.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="card-tilt card-3 bg-white/5 backdrop-blur-md rounded-2xl border border-white/20 overflow-hidden flex flex-col h-[400px]">
                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('image/1.jpg') }}"
                        alt="Learning" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-end bg-gradient-to-t from-white to-transparent">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                        <h3 class="font-bold text-lg text-sky-300">Continuous Learning</h3>
                    </div>
                    <p class="text-xs text-black leading-relaxed">
                        Constantly evolving skills and to stay ahead in a fast-changing creative world.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="card-tilt card-4 bg-white/5 backdrop-blur-md rounded-2xl border border-white/20 overflow-hidden flex flex-col h-[400px]">
                <div class="h-1/2 overflow-hidden">
                    <img src="{{ asset('image/2.jpg') }}"
                        alt="Growth" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-end bg-gradient-to-t from-white to-transparent">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                        <h3 class="font-bold text-lg text-sky-300">Growth-Oriented Environment</h3>
                    </div>
                    <p class="text-xs text-black leading-relaxed">
                        A dynamic space that nurtures creativity, encourages innovation, and drives progress.
                    </p>
                </div>
            </div>

        </div>
    </main>


    <section class="max-w-7xl mx-auto px-6 py-16 md:py-24">
        <div class="inline-flex items-center gap-4">
            <div class="h-[1px] w-12 bg-gray-400"></div>
            <span class="text-xs font-bold uppercase tracking-widest text-white">ABOUT US</span>
        </div>

        <h2 class="text-4xl md:text-5xl font-bold text-blue-500">About US</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-10">

            <div class="grid grid-cols-2 gap-4">
                <div class="overflow-hidden rounded-2xl aspect-[4/3]">
                    <img src="{{ asset('image/home1.jpg') }}" alt="Creative Team" class="w-full h-full object-cover">
                    alt="Team Working" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-2xl aspect-[4/3]">
                    <img src="{{ asset('image/home2.jpg') }}" alt="Team Collaboration"
                        class="w-full h-full object-cover">
                    alt="Team Collaboration" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-2xl aspect-[4/3]">
                    <img src="{{ asset('image/home3.jpg') }}" alt="Creative Session" class="w-full h-full object-cover">
                    alt="Creative Session" class="w-full h-full object-cover">
                </div>
                <div class="overflow-hidden rounded-2xl aspect-[4/3]">
                    <img src="{{ asset('image/home4.jpg') }}" alt="Growth Strategy" class="w-full h-full object-cover">
                    alt="Growth Strategy" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="space-y-6">

                <div class="space-y-4 text-gray-300 leading-relaxed">
                    <p>
                        <span class="font-semibold text-white uppercase">Regret Consultancy</span> is a digital
                        marketing and creative agency helping brands grow through strategic marketing, performance ads,
                        and creative content.
                    </p>
                    <p>
                        We work with startups, small business, and growing brands to build strong digital presence and
                        generate measurable results.
                    </p>
                </div>

                <div class="pt-4">
                    <h3 class="text-lg font-semibold mb-4">At REGRET CONSULTANCY, we believe in:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="text-blue-500">—</span> Creativity with Purpose
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="text-blue-500">—</span> Data-Driven Decision Making
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="text-blue-500">—</span> Continuous Learning
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="text-blue-500">—</span> Growth-Oriented Environment
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="text-blue-500">—</span> Team Collaboration
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 ">
        <div class="mb-16">
            <div class="inline-flex items-center gap-4 mb-2">
                <div class="h-[1px] w-12 bg-gray-500"></div>
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-white">WHAT WE DO</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-blue-500">Our Services</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
                            <div
                                class="service-card bg-white text-black p-10 rounded-[45px] flex flex-col justify-between h-[500px] cursor-pointer shadow-xl">
                                <div>
                                    <div class="icon-box w-full flex items-center justify-center mb-8 transition-colors duration-300 overflow-hidden"
                                        style="max-height: 220px;">
                                        @if($service->image)
                                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->title }}"
                                                class="w-full h-full object-contain transition-colors duration-300">
                                        @else
                                            <svg class="w-16 h-16 text-white transition-colors duration-300" fill="none"
                                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9"></path>
                                            </svg>
                                        @endif
                                    </div>

                                    <h3 class="text-2xl font-bold mb-4 transition-colors">{{ $service->title }}</h3>
                                    <p class="text-gray-600 leading-relaxed transition-colors">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($service->description), 120) }}
                                    </p>
                                </div>
                                <a href="{{ route('services.show', $service) }}" class="font-bold flex items-center gap-2 
                   relative group transition-all duration-300">

                                    View more
                                    <span class="transition-transform duration-300 group-hover:translate-x-2">→</span>

                                    <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 
                    transition-all duration-300 group-hover:w-full"></span>
                                </a>
                            </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <p>No services available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-6 py-20 min-h-screen flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">

            <div class="flex justify-center lg:justify-start">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800"
                        alt="Creative Team" class="main-img">

                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=400" alt="Team Meeting"
                        class="overlap-img">
                </div>
            </div>

            <div class="flex flex-col space-y-6">
                <div class="flex items-center gap-4">
                    <div class="h-[1px] w-12 bg-gray-600"></div>
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-white">WHAT WE DO</span>
                </div>

                <h2 class="text-5xl md:text-4xl font-extrabold leading-[1.1]">
                    <span class="text-blue-600">Empowering Brands</span><br>
                    <span class="text-gray-400">Through Innovation</span>
                </h2>

                <div class="space-y-4 text-gray-300 leading-relaxed">
                    <p>
                        <span class="font-semibold text-white uppercase">Regret Consultancy</span> REGRET CONSULTANCY is
                        a digital marketing and creative agency based in Ahmedabad, Gujarat. We work with startups and
                        growing brands to generate measurable results.

                    </p>
                    <p>Our mission is to empower businesses with innovative digital marketing strategies that drive
                        growth, visibility, and conversions.</p>

                </div>

                <div class="pt-4">
                    <a href="/about"
                        class="inline-flex items-center gap-3 border border-blue-600 text-white px-8 py-3.5 rounded-full hover:bg-blue-600 transition-all duration-300 font-semibold group">
                        Learn More About us
                        <span class="group-hover:translate-x-2 transition-transform">→</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="culture-section ">
        <div class="header">
            <span class="line"></span>
            <span class="sub-title font-extrabold">OUR CULTURE</span>
            <span class="line"></span>
        </div>
        <h1 class="main-title">What We Believe In</h1>

        <div class="cards-container">
            <div class="card">
                <div class="dot"></div>
                <h3>Creativity With Purpose</h3>
                <p>Designing meaningful visuals that inspire, engage, and deliver real results.</p>
            </div>

            <div class="card">
                <div class="dot"></div>
                <h3>Data-Driven Decision Making</h3>
                <p>Using insights and analytics to make smarter strategies that drive measurable results.</p>
            </div>

            <div class="card">
                <div class="dot"></div>
                <h3>Continuous Learning</h3>
                <p>Constantly evolving skills and knowledge to stay ahead in a fast-changing digital world.</p>
            </div>

            <div class="card">
                <div class="dot"></div>
                <h3>Growth-Oriented Environment</h3>
                <p>A dynamic space that encourages innovation, nurtures talent, and drives continuous progress.</p>
            </div>
        </div>
    </section>


<section class="max-w-7xl mx-auto px-6 py-24">
    {{-- Top Header --}}
    <div class="flex items-center justify-center md:justify-start gap-3 mb-4">
        <span class="w-12 h-[2px] bg-blue-500/50"></span>
        <span class="text-blue-400 font-black tracking-[0.2em] uppercase text-xs">Portfolio</span>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center md:items-end gap-6 mb-12">
        <h2 class="text-4xl md:text-6xl font-black text-white text-center md:text-left tracking-tight">
            Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Creative Work</span> 
        </h2>

        <a href="/portfolio" class="group relative inline-flex items-center px-8 py-4 
            text-sm font-black text-white border border-white/10 rounded-full
            overflow-hidden transition-all duration-500 hover:border-blue-500/50 bg-white/5 backdrop-blur-sm">
            <span class="relative z-10">VIEW ALL PROJECTS</span>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 translate-y-[100%] group-hover:translate-y-0 transition-transform duration-500"></div>
        </a>
    </div>  

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:h-[700px]">

        {{-- 1. LARGE CARD: 9 Image Gallery (Premium Glass Look) --}}
        @php $p1 = $portfolios[0] ?? null; @endphp
        @if($p1)
        <div class="lg:col-span-2 relative group overflow-hidden rounded-[40px] bg-[#0b1120] border border-white/5 shadow-2xl transition-all duration-700 hover:shadow-blue-500/10 hover:border-white/10">
            
            {{-- Fixed 3x3 Grid with spacing and scale effect --}}
            <div class="grid grid-cols-3 gap-3 p-4 min-h-[400px]">
                @php
                    $allImages = array_merge($p1->image ? [$p1->image] : [], $p1->images ?? []);
                    $displayImages = array_values(array_filter($allImages));
                @endphp

                @for ($i = 0; $i < 9; $i++)
                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-[#151f33] border border-white/5 transition-all duration-500 group-hover:border-white/10">
                        @if(isset($displayImages[$i]))
                            <img src="{{ asset('uploads/portfolios/' . $displayImages[$i]) }}" 
                                 class="w-full h-full object-cover !important opacity-70 group-hover:opacity-95 group-hover:scale-105 transition-all duration-500 ease-out lazy"
                                 loading="lazy"
                                 alt="{{ $p1->title ?? 'Portfolio' }}">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#0b1120] to-[#1a2332] flex items-center justify-center">
                                <span class="text-xs text-gray-500 font-medium">More Coming Soon</span>
                            </div>
                        @endif
                    </div>
                @endfor
            </div>

            {{-- Premium Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1120] via-transparent to-transparent pointer-events-none opacity-80"></div>
            <div class="absolute bottom-0 left-0 p-10 w-full transform transition-transform duration-500">
                <div class="flex items-center gap-3 mb-4">
                     <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/20 text-blue-400 text-[9px] font-black uppercase rounded-lg backdrop-blur-md">Featured</span>
                     <span class="h-[1px] w-8 bg-white/20"></span>
                </div>
                <h3 class="text-4xl font-black text-white mb-2 tracking-tight group-hover:text-blue-400 transition-colors">{{ $p1->title }}</h3>
                <p class="text-gray-400 text-sm font-medium tracking-wide opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">Deep-dive into our conceptual strategy</p>
            </div>
        </div>
        @endif

        {{-- RIGHT COLUMN: Side Cards --}}
        <div class="flex flex-col gap-8">
            {{-- Loop for 2nd and 3rd cards --}}
            @foreach($portfolios->slice(1, 2) as $p)
            <div class="flex-1 relative group overflow-hidden rounded-[40px] bg-[#0b1120] border border-white/5 p-4 transition-all duration-500 hover:border-white/10 hover:shadow-xl">
                <div class="grid grid-cols-3 gap-3 h-full">
                    @php
                        $sideImages = array_merge($p->image ? [$p->image] : [], $p->images ?? []);
                        $sideDisplay = array_slice(array_filter($sideImages), 0, 3);
                    @endphp
                    @foreach($sideDisplay as $img)
                        <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-[#151f33]">
                            <img src="{{ asset('uploads/portfolios/' . $img) }}" 
                                 class="w-full h-full object-cover !important opacity-60 group-hover:opacity-95 group-hover:scale-105 transition-all duration-500 ease-out lazy"
                                 loading="lazy"
                                 alt="{{ $p->title ?? 'Portfolio' }}">
                        </div>
                    @endforeach
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b1120] to-transparent pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 p-8">
                    <h3 class="text-2xl font-black text-white group-hover:text-blue-400 transition-colors">{{ $p->title }}</h3>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
    <section class="max-w-7xl mx-auto px-6 py-20 text-center">
        <div class="flex items-center justify-center gap-4 mb-2">
            <div class="h-[1px] w-12 bg-gray-500"></div>
            <span class="text-xs font-bold uppercase tracking-[0.3em] text-white">TESTIMONIALS</span>
            <div class="h-[1px] w-12 bg-gray-500"></div>
        </div>
        <h2 class="text-5xl font-extrabold text-blue-500 mb-12">Results That Speak</h2>

        <!-- Container with Group for Hover Effect -->
        <div
            class="group bg-blue-300 text-black p-10 md:p-16 rounded-[50px] max-w-5xl mx-auto text-left relative overflow-hidden">

            <!-- Left Arrow -->
            <button id="prev-btn" class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/30 p-2 sm:p-3 rounded-full transition-all duration-200 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Content Area -->
            <div id="testimonial-content" class="transition-opacity duration-300">
                <p id="testimonial-text" class="text-xl md:text-2xl font-medium leading-relaxed mb-8">
                    “The team’s creativity and attention to detail exceeded our expectations. They delivered a brand
                    identity that truly represents who we are and resonates with our audience.”
                </p>
                <div>
                    <h4 id="testimonial-name" class="font-bold text-xl">Rahul Patel</h4>
                    <p id="testimonial-role" class="text-gray-700 text-sm font-semibold">Marketing Director, GreenLeaf
                        Organics</p>
                </div>
            </div>

            <!-- Right Arrow -->
            <button id="next-btn" class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-black/20 hover:bg-black/30 p-2 sm:p-3 rounded-full transition-all duration-200 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Pagination Dots -->
            <div class="flex justify-center gap-2 mt-10" id="dots-container">
                <div class="w-2.5 h-2.5 bg-black rounded-full cursor-pointer transition-all"></div>
                <div class="w-2.5 h-2.5 bg-black/20 rounded-full cursor-pointer transition-all"></div>
                <div class="w-2.5 h-2.5 bg-black/20 rounded-full cursor-pointer transition-all"></div>
            </div>
        </div>
    </section>

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <section class="max-w-7xl mx-auto px-6 py-20">
            <div class="bg-blue-600 rounded-[50px] p-10 md:p-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="space-y-8">
                    <h2 class="text-6xl font-bold text-white">Contact US</h2>
                    <p class="text-blue-100 text-lg leading-relaxed max-w-md">
                        We are committed to processing the information in order to contact you and talk about your
                        project.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-3 rounded-full text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </div>
                            <span class="font-medium">Ahmedabad, Gujarat, India</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-3 rounded-full text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=regretconsultancy@gmail.com"
                                target="_blank" rel="noopener noreferrer">
                                <span class="font-medium">regretconsultancy@gmail.com</span>
                            </a>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-3 rounded-full text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 004.587 4.587l.773-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <a href="tel:+918460691834"> <span class="font-medium">+91 8460691834</span></a>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Name"
                        class="w-full p-4 rounded-2xl border-none text-blue-600 focus:ring-2 focus:ring-white @error('name') ring-2 ring-red-400 @enderror">
                    @error('name')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror

                    <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email"
                        class="w-full p-4 rounded-2xl border-none text-blue-600 focus:ring-2 focus:ring-white @error('email') ring-2 ring-red-400 @enderror">
                    @error('email')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror

                    <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="Mobile No"
                        class="w-full p-4 rounded-2xl border-none text-blue-600 focus:ring-2 focus:ring-white @error('phone') ring-2 ring-red-400 @enderror">
                    @error('phone')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror

                    <input type="text" name="subject" value="{{ old('subject') }}" required placeholder="Subject"
                        class="w-full p-4 rounded-2xl border-none text-blue-600 focus:ring-2 focus:ring-white @error('subject') ring-2 ring-red-400 @enderror">
                    @error('subject')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror

                    <textarea name="message" required placeholder="Message" rows="5"
                        class="w-full p-4 rounded-2xl border-none text-blue-600 focus:ring-2 focus:ring-white @error('message') ring-2 ring-red-400 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror

                    @if(session('success'))
                        <div class="p-3 bg-green-500/20 border border-green-500/50 text-green-300 rounded-xl text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <button type="submit"
                        class="w-full bg-white text-blue-600 font-bold py-4 rounded-2xl hover:bg-gray-100 transition shadow-lg">
                        Submit
                    </button>
                </div>
            </div>
        </section>
    </form>
    @include('layouts.footer')
    <script>
        const testimonials = [
            {
                text: "“The team’s creativity and attention to detail exceeded our expectations. They delivered a brand identity that truly represents who we are.”",
                name: "Rahul Patel",
                role: "Marketing Director, GreenLeaf Organics"
            },
            {
                text: "“Regret Consultancy helped us scale our Meta ads ROI by 3x in just two months. Their data-driven approach is unmatched.”",
                name: "Anjali Sharma",
                role: "Founder, Luxe Decor"
            },
            {
                text: "“Professional, responsive, and highly creative. They are not just an agency, but a growth partner for our startup.”",
                name: "Vikram Mehta",
                role: "CEO, TechFlow Solutions"
            }
        ];

        let currentIdx = 0;

        function updateTestimonialUI() {
            const textEl = document.getElementById('testimonial-text');
            const nameEl = document.getElementById('testimonial-name');
            const roleEl = document.getElementById('testimonial-role');
            const contentEl = document.getElementById('testimonial-content');
            const dots = document.querySelectorAll('#dots-container div');

            // Animation Effect
            contentEl.style.opacity = '0';

            setTimeout(() => {
                textEl.innerText = testimonials[currentIdx].text;
                nameEl.innerText = testimonials[currentIdx].name;
                roleEl.innerText = testimonials[currentIdx].role;

                // Update Dots Style
                dots.forEach((dot, i) => {
                    dot.style.backgroundColor = i === currentIdx ? 'black' : 'rgba(0,0,0,0.2)';
                    dot.style.transform = i === currentIdx ? 'scale(1.2)' : 'scale(1)';
                });

                contentEl.style.opacity = '1';
            }, 300);
        }

        function nextTestimonial() {
            currentIdx = (currentIdx + 1) % testimonials.length;
            updateTestimonialUI();
        }

        function prevTestimonial() {
            currentIdx = (currentIdx - 1 + testimonials.length) % testimonials.length;
            updateTestimonialUI();
        }

        // Initialize first dot
        // Add event listeners for buttons and dots
        document.addEventListener('DOMContentLoaded', function() {
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const dotsContainer = document.getElementById('dots-container');
            
            if (prevBtn) prevBtn.addEventListener('click', prevTestimonial);
            if (nextBtn) nextBtn.addEventListener('click', nextTestimonial);
            
            // Dots click
            if (dotsContainer) {
                dotsContainer.addEventListener('click', (e) => {
                    const dot = e.target.closest('div');
                    if (dot && dot.parentNode.id === 'dots-container') {
                        const idx = Array.from(dot.parentNode.children).indexOf(dot);
                        currentIdx = idx;
                        updateTestimonialUI();
                    }
                });
            }
            
            updateTestimonialUI(); // Initial load
        });
    </script>
    <script>
        const cards = document.querySelectorAll('.portfolio-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Dim other cards
                cards.forEach(c => c.style.opacity = '0.5');
                card.style.opacity = '1';
                card.style.transform = 'scale(1.02)';
            });

            card.addEventListener('mouseleave', () => {
            cards.forEach(c => {
                c.style.opacity = '1';
                c.style.transform = 'scale(1)';
            });
            });

            card.addEventListener('click', () => {
            alert('Opening ' + card.querySelector('.tag-label').innerText + ' details...');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.grid');
            elements.forEach(el => {
            el.classList.add('transition-opacity', 'duration-1000', 'ease-in');
            });
        });
    </script>

    <script>
        const cards = document.querySelectorAll('.portfolio-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Dim other cards
                cards.forEach(c => c.style.opacity = '0.5');
                card.style.opacity = '1';
                card.style.transform = 'scale(1.02)';
            });

            card.addEventListener('mouseleave', () => {
            cards.forEach(c => {
                c.style.opacity = '1';
                c.style.transform = 'scale(1)';
            });
            });

            card.addEventListener('click', () => {
            alert('Opening ' + card.querySelector('.tag-label').innerText + ' details...');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.grid');
            elements.forEach(el => {
            el.classList.add('transition-opacity', 'duration-1000', 'ease-in');
            });
        });
    </script>
    <script>
        lucide.createIcons();

        // Background Particles
        const container = document.getElementById('particles-container');
        for (let i = 0; i < 50; i++) {
            const dot = document.createElement('div');
        dot.className = 'dot';
        dot.style.left = Math.random() * 100 + '%';
        dot.style.top = Math.random() * 100 + '%';
        dot.style.opacity = Math.random() * 0.5;
        container.appendChild(dot);

        gsap.to(dot, {
            x: (Math.random() - 0.5) * 100,
        y: (Math.random() - 0.5) * 100,
        duration: 10 + Math.random() * 20,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
            });
        }

        // Entrance Animations
        window.addEventListener('load', () => {
            const tl = gsap.timeline({defaults: {ease: "power3.out" }});
        tl.from("header", {y: -100, opacity: 0, duration: 1 })
        .from("h1 span", {y: 50, opacity: 0, stagger: 0.2, duration: 1 }, "-=0.5")
        .from("main button", {scale: 0.8, opacity: 0, stagger: 0.1, duration: 0.8 }, "-=0.8")
        .from(".card-tilt", {
            y: 100,
        opacity: 0,
        stagger: 0.1,
        duration: 1,
        clearProps: "all"
              }, "-=0.5");
        });

        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
        const y = (e.clientY / window.innerHeight - 0.5) * 20;
        gsap.to('.hero-gradient', {x: x * 2, y: y * 2, duration: 2, ease: "power2.out" });
        });
    </script>
    <script>
        const btn = document.getElementById('exploreBtn');
        const arrow = document.getElementById('arrowBox');

    btn.addEventListener('mouseenter', () => {
            arrow.style.transform = 'rotate(45deg) scale(1.1)';
    });

    btn.addEventListener('mouseleave', () => {
            arrow.style.transform = 'rotate(0deg) scale(1)';
    });
    </script>
</body>

</html>