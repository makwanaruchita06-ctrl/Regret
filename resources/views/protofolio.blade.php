<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protofolio | Regret Consultancy </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
        }

        /* Hero Glow Effect */
        .hero-section {
            /* Yeh gradient right side se light white glow deta hai jaisa image mein hai */
            background: radial-gradient(circle at 80% 50%, rgba(255, 255, 255, 0.08) 0%, rgba(0, 0, 0, 1) 60%);
            min-height: 100vh;
        }

        /* Skill Circles Gradient */
        .skill-gradient {
            background: linear-gradient(145deg, #1e4ef2 0%, #0d1b4a 100%);
        }



        /* Blue corner decoration - Fixed at Bottom Right */
        .corner-accent {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 400px;
            /* Size according to image */
            height: 200px;
            background-color: #2563eb;
            /* Triangle shape jaisa image mein hai */
            clip-path: polygon(100% 0, 0% 100%, 100% 100%);
            z-index: 5;
            pointer-events: none;
        }

        .text-primary-blue {
            color: #3898FF;
        }

        .bg-primary-blue {
            background-color: #007BFF;
        }

        /* Icon Circle Gradient */
        .icon-circle {
            background: radial-gradient(circle at center, #63B3ED 0%, #2B6CB0 100%);
            box-shadow: 0 0 20px rgba(43, 108, 176, 0.3);
        }

        /* Pill Label */
        .pill-label {
            background: white;
            color: #0062FF;
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Blue Glow Background Effect */
        .hero-glow-container {
            position: relative;
            background: #000;
            overflow: hidden;
        }

        /* Right Corner Glow (Replacing the solid blue block) */
        .hero-glow-container::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.4) 0%, rgba(0, 0, 0, 0) 70%);
            z-index: 1;
            pointer-events: none;
        }

        /* Aura effect behind the person */
        .person-aura {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0) 65%);
            filter: blur(40px);
            z-index: 10;
        }

        /* Work Experience Card Gradient */
        .experience-card {
            background: linear-gradient(135deg, #ffffff 70%, #e0f2fe 100%);
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        /* Experience Badge */
        .exp-badge {
            background-color: #007BFF;
            color: white;
            padding: 6px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
        }

        /* Background Dots */
        .dot {
            position: absolute;
            border-radius: 50%;
        }

        .dot-blue {
            background: #007BFF;
            width: 10px;
            height: 10px;
            filter: blur(1px);
        }

        .dot-white {
            background: #FFFFFF;
            width: 6px;
            height: 6px;
            opacity: 0.8;
        }

        .hero-container {
            position: relative;
            background: #000;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Bottom-Right Blue Glow (Replacing the solid blue block) */
        .hero-glow-container {
            position: relative;
            background-color: #000;
            /* Background Glow setup jaisa image mein hai */
            background-image:
                /* Bottom right blue deep glow */
                radial-gradient(circle at 90% 90%, rgba(13, 58, 145, 0.8) 0%, rgba(0, 0, 0, 0) 50%),
                /* Center-right light aura for the person */
                radial-gradient(circle at 85% 50%, rgba(255, 255, 255, 0.15) 0%, rgba(0, 0, 0, 0) 40%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        /* Right side bottom blue shape overlay */
        .hero-glow-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            /* Bottom corner mein solid blue touch dene ke liye */
            background: radial-gradient(circle at 100% 100%, #0a3d91 0%, transparent 30%);
            z-index: 1;
            pointer-events: none;
        }

        .image-container {
            position: relative;
            z-index: 10;
        }

        /* White fuzzy aura exactly behind the girl */
        .person-aura {
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
            filter: blur(50px);
            z-index: 5;
        }
        @keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}
    </style>
</head>

<body class="text-white overflow-x-hidden">

    @include('layouts.header')

    <div class="hero-glow-container">
        <!-- Yahan se 'container mx-auto' hata kar 'w-full' kiya gaya hai -->
        <section class="w-full relative z-20 overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between">

                <!-- Left Content Side: Isme padding barkarar rakhi hai -->
                <div class="w-full md:w-1/2 space-y-6 pl-6 md:pl-12 lg:pl-24 py-10">
                    <nav class="flex items-center gap-2 text-sm font-medium mb-4">
                     <a href="/">   <span class="text-white opacity-80">Home</span></a>
                        <span class="text-white ">></span>
                        <span class="text-blue-500 ">Portfolio</span>
                    </nav>

                   <h1 class="text-7xl md:text-8xl font-black tracking-tight leading-none text-white mb-6 
           animate-[zoomIn_0.8s_ease-out_forwards] opacity-0">
    Portfolio
</h1>

                    <p class="text-gray-300 text-lg md:text-xl leading-relaxed max-w-lg font-normal opacity-90">
                        Our digital marketing portfolio showcases data-driven campaigns that boost brand visibility and
                        drive measurable growth. Each project highlights our expertise in performance marketing, social
                        media strategy, and content creation.
                    </p>

                    <div class="pt-6">
                         <a href="/contact"
                            class="bg-white text-black px-10 py-3 rounded-full font-bold text-lg hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-lg inline-block">
                            Get in touch
                        </a>
                    </div>
                </div>

                <!-- Right Image Side: Padding zero (pr-0) aur image ko edge tak shift kiya gaya hai -->
                <!-- Yahan 'items-end' aur 'leading-[0]' se niche ki space khatam hogi -->
                <div class="w-full md:w-1/2 flex justify-end items-end relative p-0 m-0 leading-[0]">
                    <div class="person-aura"></div>

                    <!-- Image par 'block' aur 'align-bottom' lagane se space 0 ho jayegi -->
                    <img src="{{ asset('image/portfolio.png') }}" alt="Portfolio"
                        class="relative z-10 w-full h-auto max-w-[650px] block align-bottom m-0 p-0">
                </div>

            </div>
        </section>
    </div>
    <section class="py-12 md:py-32 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold tracking-wide
bg-[linear-gradient(90deg,#0a7cff_0%,#5fb3ff_45%,#cfd8dc_100%)]
bg-clip-text text-transparent"> Our Work Skill</h1>

            <p class="text-white mt-6 mb-10 text-lg max-w-2xl mx-auto">
                Our Work skills Showcase our expertise in delivering creative, strategic, and result-driven solutions
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-12 md:gap-y-24 gap-x-6 md:gap-x-12">

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/Group 755.png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] px-8 py-2.5 rounded-full uppercase tracking-[0.2em] font-bold">
                        Growth-Oriented
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/1 (6).png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] font-black px-8 py-2.5 rounded-full uppercase tracking-[0.2em]">
                        Brand Guidelines
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/1 (5).png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] font-black px-8 py-2.5 rounded-full uppercase tracking-[0.2em]">
                        Creative Direction
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/1 (4).png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] font-black px-8 py-2.5 rounded-full uppercase tracking-[0.2em]">
                        Content Strategy
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/Group 772.png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] font-black px-8 py-2.5 rounded-full uppercase tracking-[0.2em]">
                        Marketing Analytics
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="justify-center mb-6">
                        <img src="{{ asset('image/icon/Group 774.png') }}" alt="Growth"
                            class="w-20 h-20 transition duration-300 hover:scale-110">
                    </div>
                    <div
                        class="bg-white text-[#0276DB] text-[10px] font-black px-8 py-2.5 rounded-full uppercase tracking-[0.2em]">
                        Paid Advertising
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class=" px-4 md:px-6 relative bg-black overflow-hidden">

        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">

            <div class="absolute top-[10%] -left-[5%] w-[400px] h-[400px] bg-blue-600/10 blur-[120px] rounded-full">
            </div>
            <div class="absolute bottom-[10%] -right-[5%] w-[400px] h-[400px] bg-blue-500/10 blur-[120px] rounded-full">
            </div>

            {{-- <div
                class="absolute top-[12%] right-[10%] w-2.5 h-2.5 bg-[#0b7cff] rounded-full shadow-[0_0_18px_rgba(11,124,255,0.7)] opacity-80">
            </div> --}}

            <div
                class="absolute top-[40%] left-[3%] w-2 h-2 bg-[#4da6ff] rounded-full shadow-[0_0_12px_rgba(77,166,255,0.6)] opacity-60">
            </div>
            <div
                class="absolute top-[45%] right-[5%] w-2.5 h-2.5 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] opacity-70 animate-pulse">
            </div>
            <div
                class="absolute top-[55%] right-[20%] w-1.5 h-1.5 bg-[#0b7cff] rounded-full shadow-[0_0_10px_rgba(11,124,255,0.5)] opacity-50">
            </div>

            <div
                class="absolute top-[70%] left-[12%] w-2 h-2 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.7)] opacity-60">
            </div>
            <div
                class="absolute top-[75%] right-[15%] w-2 h-2 bg-[#0b7cff] rounded-full shadow-[0_0_12px_rgba(11,124,255,0.6)] opacity-70">
            </div>

            <div class="absolute bottom-[10%] left-[5%] w-3 h-3 bg-[#0b7cff] rounded-full shadow-[0_0_20px_rgba(11,124,255,0.9)] opacity-80 animate-bounce"
                style="animation-duration: 4s;"></div>
            <div
                class="absolute bottom-[15%] right-[8%] w-2 h-2 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] opacity-70 animate-pulse">
            </div>
            <div class="absolute bottom-[8%] left-[30%] w-1.5 h-1.5 bg-blue-400 rounded-full blur-[1px] opacity-40">
            </div>
            <div class="absolute bottom-[5%] right-[2%] w-2 h-2 bg-white/30 rounded-full blur-[2px]"></div>

        </div>
        <!-- ... (other dots remain the same) ... -->

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold tracking-wide
bg-[linear-gradient(90deg,#0a7cff_0%,#5fb3ff_45%,#cfd8dc_100%)]
bg-clip-text text-transparent"> Work Experience
            </h1>

            <p class="text-white mt-6 mb-10 text-lg max-w-2xl mx-auto">
                Here is a quick summary of our work Experience

            </p>

            <div class="space-y-6 md:space-y-8">

                <div
                    class="bg-gradient-to-r from-white via-white to-[#b0d3ecfc] rounded-[30px] p-6 md:p-10 flex flex-col md:flex-row items-center gap-4 md:gap-8 shadow-xl transition duration-300 hover:shadow-[0_0_25px_rgba(10,124,255,0.6)] hover:border hover:border-[#0a7cff]">
                    <img src="{{ asset('image/favicon.jpeg') }}" alt="Logo"
                        class="w-16 md:w-20 h-16 md:h-20 object-contain">
                    <div class="text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#0276DB] mb-2 md:mb-3">Graphic Design</h3>
                        <span
                            class="bg-[#0276DB] text-white px-4 md:px-6 py-1.5 md:py-2 rounded-full text-sm md:text-sm font-semibold">
                            Experience of 5 years
                        </span>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-white via-white to-[#b0d3ecfc] rounded-[30px] p-6 md:p-10 flex flex-col md:flex-row items-center gap-4 md:gap-8 shadow-xl transition duration-300 hover:shadow-[0_0_25px_rgba(10,124,255,0.6)] hover:border hover:border-[#0a7cff]">
                    <img src="{{ asset('image/favicon.jpeg') }}" alt="Logo"
                        class="w-16 md:w-20 h-16 md:h-20 object-contain">
                    <div class="text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#0276DB] mb-2 md:mb-3">Social Media</h3>
                        <span
                            class="bg-[#0276DB] text-white px-4 md:px-6 py-1.5 md:py-2 rounded-full text-sm md:text-sm font-semibold">
                            Experience of 5 years
                        </span>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-r from-white via-white to-[#b0d3ecfc] rounded-[30px] p-6 md:p-10 flex flex-col md:flex-row items-center gap-4 md:gap-8 shadow-xl transition duration-300 hover:shadow-[0_0_25px_rgba(10,124,255,0.6)] hover:border hover:border-[#0a7cff]">
                    <img src="{{ asset('image/favicon.jpeg') }}" alt="Logo"
                        class="w-16 md:w-20 h-16 md:h-20 object-contain">
                    <div class="text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-[#0276DB] mb-2 md:mb-3">Data Entry</h3>
                        <span
                            class="bg-[#0276DB] text-white px-4 md:px-6 py-1.5 md:py-2 rounded-full text-sm md:text-sm font-semibold">
                            Experience of 1 years
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-black py-8 px-4 md:py-12 font-sans space-y-12 md:space-y-16">
        @forelse($portfolios as $portfolio)

            <div
                class="bg-[#99CCF9] border-[4px] border-[#1A2E44] rounded-[40px] p-4 md:p-6 flex flex-col md:flex-row items-center gap-4 md:gap-8 max-w-6xl mx-auto">
                <div class="w-full md:w-5/12 bg-[#1A2E44] rounded-[30px] p-1 md:p-2 overflow-hidden shadow-lg">
                    <div class="grid grid-cols-3 gap-1 md:gap-2 p-0 md:p-1">
                        @php
                            $allImages = array_merge(
                                $portfolio->image ? [$portfolio->image] : [],
                                $portfolio->images ?? []
                            );
                            $displayImages = array_slice(array_filter($allImages), 0, 9);
                            while (count($displayImages) < 9) {
                                $displayImages[] = 'https://via.placeholder.com/150?text=No+Image';
                            }
                        @endphp
                        @foreach($displayImages as $index => $img)
                            <img src="{{ $img === 'https://via.placeholder.com/150?text=No+Image' ? $img : asset('uploads/portfolios/' . $img) }}"
                                class="rounded-lg w-full h-20 object-cover opacity-80"
                                alt="{{ $portfolio->title }} {{ $index + 1 }}">
                        @endforeach

                    </div>
                </div>
                <div class="w-full md:w-7/12 text-[#1A2E44]">
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-2 md:mb-3 tracking-tight">{{ $portfolio->title }}</h2>
                    <p class="text-sm md:text-base font-medium mb-3 md:mb-4 leading-relaxed">
                        {{ $portfolio->description }}
                    </p>

                    @php
                        $keywords = preg_split('/\r\n|\r|\n/', $portfolio->keywords);
                        $keywords = array_filter(array_map('trim', $keywords));
                    @endphp

                    <ul class="flex flex-col gap-y-1 mb-4 md:mb-6 text-sm font-bold opacity-90">
                        @foreach($keywords as $keyword)
                            <li class="flex items-center gap-2">• {{ $keyword }}</li>
                        @endforeach
                    </ul>

                   <a href="{{ route('portfolio.details', $portfolio->id) }}"><button
                        class="bg-[#1A2E44] text-white px-6 md:px-8 py-2 md:py-2.5 rounded-xl font-bold text-sm md:text-base hover:scale-105 transition-transform duration-200 shadow-md">
                        View More
                    </button></a>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-400 py-4 md:py-8">No Performance Marketing portfolios available.
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('portfolios.create') }}" class="text-blue-400 hover:text-blue-300 font-bold">Add first
                            portfolio</a>.
                    @endif
                @endauth
            </p>
        @endforelse

    

    </section>

    <section class="bg-black py-12 px-6"> 
        <div class="mx-auto max-w-6xl"> 
            <div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-[2.5rem] p-8 md:p-14 text-center shadow-xl">

                <h2 class="text-white text-3xl md:text-5xl font-bold mb-4 tracking-tight">
                    Ready to create something amazing?
                </h2>

                <p class="text-blue-100 text-base md:text-lg mb-8 max-w-xl mx-auto font-medium opacity-90">
                    Let us help you achieve similar results for your brand. Get in touch to discuss your project.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

                  <a href="/services"
    class="group bg-[#112240] text-white px-6 py-3 rounded-full flex items-center gap-2 hover:bg-slate-900 transition-all duration-300 w-full sm:w-auto justify-center text-sm font-semibold">
    
    Explore Service
    
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
        stroke="currentColor"
        class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
    </svg>

</a>

                    <a href="/contact"
                        class="border border-white/40 text-white font-semibold px-6 py-3 rounded-full hover:bg-white/10 transition-all duration-300 w-full sm:w-auto text-center text-sm">
                        Contact Us
                    </a>

                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>

</html>