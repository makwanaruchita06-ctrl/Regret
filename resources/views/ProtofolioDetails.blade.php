<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protofolio | Regret Consultancy </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
/* Floating Tag Design */

/* Exact design from About Us */
.falling-tag-style {
    display: inline-block;
    padding: 10px 24px;
    border-radius: 50px;
border: 2px solid #ffffff;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(8px);
    color: #0276DB;
    font-size: 0.9rem;
    white-space: nowrap;
    transition: all 0.3s ease;
    cursor: default;
    /* This ensures the tilt stays during animation */
    transform: rotate(var(--tw-rotate, 0deg));
}

.falling-tag-style:hover {
    border-color: #0276db;
    background: rgba(2, 118, 219, 0.2);
    transform: translateY(-5px) rotate(var(--tw-rotate, 0deg)) scale(1.05);
}

@keyframes float-portfolio {
    0%, 100% { transform: translateY(0) rotate(var(--tw-rotate, 0deg)); }
    50% { transform: translateY(-15px) rotate(var(--tw-rotate, 0deg)); }
}

.animate-float-portfolio {
    animation: float-portfolio 4s ease-in-out infinite;
}
/* Image Container with Dots */
.image-glow-dots {
    position: relative;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    overflow: hidden;
}

/* Dots Pattern Layer */
.dot-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Dots design using Radial Gradient */
    background-image: radial-gradient(rgba(56, 152, 255, 0.2) 1.5px, transparent 1.5px);
    background-size: 30px 30px; /* Dots ke beech ka gap */
    z-index: 1;
    pointer-events: none;
    /* Isse dots side se fade ho jayenge */
    mask-image: radial-gradient(circle at center, black 40%, transparent 90%);
}
/* Gallery Container with Dots */
.gallery-item-dots {
    position: relative;
    overflow: hidden;
}

/* Dots Pattern Layer for Gallery */
.gallery-dot-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Dots design using Radial Gradient */
    background-image: radial-gradient(rgba(56, 152, 255, 0.15) 1px, transparent 1px);
    background-size: 20px 20px; /* Dots ke beech ka gap thoda kam gallery ke liye */
    z-index: 1;
    pointer-events: none;
    /* Isse dots edges par fade ho jayenge */
    mask-image: radial-gradient(circle at center, black 60%, transparent 100%);
}
[x-cloak] { display: none !important; }
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
                        <a href="/"><span class="text-white opacity-80">Home</span></a>
                        <span class="text-white ">></span>
                      <a href="/portfolio">  <span class="text-blue-500 ">Portfolio</span></a>
                      <span class="text-white ">></span>
                      <a href="/portfolio/{{ $portfolio->id }}">  <span class="text-blue-500 ">  {{ $portfolio->title }}</span></a>
                    </nav>

                   <h1 class="text-7xl md:text-8xl font-black tracking-tight leading-none text-white mb-6 
           animate-[zoomIn_0.8s_ease-out_forwards] opacity-0">
   {{ $portfolio->title }}
</h1>

                    <p class="text-gray-300 text-lg md:text-xl leading-relaxed max-w-lg font-normal opacity-90">
{{ $portfolio->description }}
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
               <div class="w-full md:w-1/2 flex justify-end items-end relative p-0 m-0 leading-[0] overflow-hidden">
    
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-[10%] -left-[5%] w-[400px] h-[400px] bg-blue-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] -right-[5%] w-[400px] h-[400px] bg-blue-500/10 blur-[120px] rounded-full"></div>

        <div class="absolute top-[40%] left-[3%] w-2 h-2 bg-[#4da6ff] rounded-full shadow-[0_0_12px_rgba(77,166,255,0.6)] opacity-60"></div>
        <div class="absolute top-[45%] right-[5%] w-2.5 h-2.5 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] opacity-70 animate-pulse"></div>
        <div class="absolute top-[55%] right-[20%] w-1.5 h-1.5 bg-[#0b7cff] rounded-full shadow-[0_0_10px_rgba(11,124,255,0.5)] opacity-50"></div>
        <div class="absolute top-[70%] left-[12%] w-2 h-2 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.7)] opacity-60"></div>
        <div class="absolute top-[75%] right-[15%] w-2 h-2 bg-[#0b7cff] rounded-full shadow-[0_0_12px_rgba(11,124,255,0.6)] opacity-70"></div>
        
        <div class="absolute bottom-[10%] left-[5%] w-3 h-3 bg-[#0b7cff] rounded-full shadow-[0_0_20px_rgba(11,124,255,0.9)] opacity-80 animate-bounce" style="animation-duration: 4s;"></div>
        <div class="absolute bottom-[15%] right-[8%] w-2 h-2 bg-white rounded-full shadow-[0_0_15px_rgba(255,255,255,0.8)] opacity-70 animate-pulse"></div>
        <div class="absolute bottom-[8%] left-[30%] w-1.5 h-1.5 bg-blue-400 rounded-full blur-[1px] opacity-40"></div>
        <div class="absolute bottom-[5%] right-[2%] w-2 h-2 bg-white/30 rounded-full blur-[2px]"></div>
    </div>

    <div class="person-aura"></div>

    <img src="{{ asset('image/portfolio.png') }}" alt="Portfolio"
        class="relative z-10 w-full h-auto max-w-[650px] block align-bottom m-0 p-0">
</div>

            </div>
        </section>
    </div>
    <div class="text-center mb-12 mt-10">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-[#0070c5] via-[#74b1e5] to-white bg-clip-text text-transparent">
        {{ $portfolio->title }}
    </h1>

    <p class="text-gray-400 max-w-2xl mx-auto mb-8">
        {{ $portfolio->description }}
    </p>
 <div class="flex flex-wrap justify-center gap-x-6 gap-y-12 mt-16 px-4">
    @if($portfolio->keywords)
        @php
            $tags = preg_split('/[\r\n,]+/', $portfolio->keywords, -1, PREG_SPLIT_NO_EMPTY);
            $tags = array_map('trim', $tags);
            
            // Predefined rotations to match your About Us "Look"
            $rotations = ['-12deg', '6deg', '-6deg', '12deg', '-8deg', '8deg'];
        @endphp

        @foreach($tags as $index => $tag)
            @php 
                $rotation = $rotations[$index % count($rotations)]; 
                $delay = ($index % 4) * 0.8; // Staggered start times
            @endphp
            
            <div class="falling-tag-style animate-float-portfolio" 
                 style="--tw-rotate: {{ $rotation }}; animation-delay: {{ $delay }}s;">
                {{ $tag }}
            </div>
        @endforeach
    @else
        <div class="text-gray-500 opacity-50">No Tags Available</div>
    @endif
</div>
    </div>

<div x-data="{ open: false, activeImg: '' }" class="pb-20 relative w-full">

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 md:gap-y-24 mt-20 px-4">
        @php
            $images = is_array($portfolio->images) ? $portfolio->images : [];
            if($portfolio->image) { array_unshift($images, $portfolio->image); }
        @endphp

        @foreach($images as $img)
            @php $imgUrl = asset('uploads/portfolios/' . $img); @endphp

            <div class="relative p-6 group @if($loop->iteration % 2 == 0) md:translate-y-12 @endif">
                
                <div class="absolute inset-0 pointer-events-none z-0">
                    <div class="absolute top-0 -left-4 w-32 h-32 bg-blue-600/10 blur-[40px] rounded-full"></div>
                    <div class="absolute top-[15%] -left-2 w-2 h-2 bg-white rounded-full shadow-[0_0_10px_white] opacity-60"></div>
                    <div class="absolute top-[40%] -right-4 w-1.5 h-1.5 bg-[#0b7cff] rounded-full opacity-70"></div>
                    <div class="absolute -bottom-2 left-[30%] w-2.5 h-2.5 bg-white rounded-full shadow-[0_0_12px_white] opacity-80 animate-pulse"></div>
                    <div class="absolute bottom-[20%] -left-6 w-2 h-2 bg-[#4da6ff] rounded-full opacity-60 animate-bounce" style="animation-duration: 3s;"></div>
                </div>

                <div class="relative z-10 cursor-pointer bg-white rounded-[2rem] overflow-hidden aspect-square shadow-2xl transition transform hover:scale-105"
                     @click="open = true; activeImg = '{{ $imgUrl }}'">
                    
                    <img src="{{ $imgUrl }}" class="w-full h-full object-cover pointer-events-none">
                    
                    <div class="absolute bottom-4 right-4 bg-slate-800 text-white w-8 h-8 rounded-full flex items-center justify-center text-xs group-hover:bg-blue-600 transition-colors">
                        +
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div x-show="open" 
         x-cloak
         class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/90 p-4 backdrop-blur-md"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         @keydown.escape.window="open = false"
         style="display: none;">
        
        <div class="absolute inset-0 w-full h-full" @click="open = false"></div>

        <div class="relative max-w-4xl w-full flex flex-col items-center">
            <button @click="open = false" 
                    class="absolute  right-0 text-white text-5xl hover:text-blue-500 transition-colors z-[10001]">
                &times;
            </button>
            
            <img :src="activeImg" 
                 class="relative z-[10000] w-full h-auto max-h-[85vh] object-contain shadow-2xl rounded-lg border border-white/10">
        </div>
    </div>
</div>
    @include('layouts.footer')

</body>
</html>


