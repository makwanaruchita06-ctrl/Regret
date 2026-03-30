<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Details - Regret Consultancy</title>
    <meta name="description"
        content="Regret Consultancy is a professional consulting firm helping businesses and individuals grow with smart strategies, expert advice, and result-driven solutions.">
    <meta name="keywords"
        content="Regret Consultancy, business consulting India, career guidance services, professional consultancy, startup consulting, marketing strategy, business growth services, consultancy firm India, expert consulting services, digital consulting">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/Favicon.jpeg') }}">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #050505;
            color: #ffffff;
            margin: 0;
            overflow-x: hidden;
        }

        .hero-gradient {
            background: radial-gradient(circle at 80% 70%, rgba(2, 118, 219, 0.6) 0%, #000 60%);
            min-height: 60vh;
        }

        .service-section {
            background-color: #0a0a0a;
        }

        .overview-label {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #aaaaaa;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .overview-label::before {
            content: "";
            display: block;
            width: 36px;
            height: 2px;
            background: #aaaaaa;
            border-radius: 2px;
        }

        .check-item {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 15px;
            font-weight: 500;
            color: #e0e0e0;
        }

        .check-icon {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            border: 2px solid #0276db;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-card {
            background: #00111f;
            /* border: 1px solid #1a5560; */
            border-radius: 16px;
            padding: 30px 28px;
            display: flex;
            align-items: flex-start;
            gap: 18px;
            transition: border-color 0.3s, filter 0.3s;
            width: 100%;
        }

        .feature-card:hover {
            /* border-color: #0276db; */
            filter: brightness(1.1);
        }

        .feature-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #ffffff;
            flex-shrink: 0;
            margin-top: 6px;
            box-shadow: 0 0 8px rgba(0, 174, 197, 0.5);
        }

        .feature-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 8px 0;
            line-height: 1.3;
        }

        .feature-card p {
            font-size: 15px;
            font-weight: 400;
            color: #ffffff;
            margin: 0;
            line-height: 1.6;
        }

        .faq-section {
            background-color: #050505;
        }

        .faq-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: #aaaaaa;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .faq-label::before,
        .faq-label::after {
            content: "";
            display: block;
            width: 36px;
            height: 2px;
            background: #aaaaaa;
            border-radius: 2px;
        }

        .faq-item {
            background: #00111f;
            /* border: 1px solid #1a5560; */
            border-radius: 14px;
            overflow: hidden;
            transition: border-color 0.3s;
        }


        .faq-trigger {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 24px;
            cursor: pointer;
            background: transparent;
            border: none;
            text-align: left;
            gap: 16px;
        }

        .faq-trigger-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .faq-bullet {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ffffff;
            flex-shrink: 0;
            box-shadow: 0 0 6px rgba(0, 174, 197, 0.5);
        }

        .faq-question {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.3;
        }

        .faq-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background 0.3s;
            color: #ffffff;
            font-size: 14px;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
            padding: 0 24px 0 46px;
        }

        .faq-item.open .faq-answer {
            max-height: 300px;
            padding: 0 24px 22px 46px;
        }

        .faq-answer p {
            font-size: 14px;
            color: #fffff;
            line-height: 1.7;
            margin: 0;
        }

        .premium-description {
            color: #ffffff;
            /* Gray-400 */
            text-align: justify;
            text-justify: inter-word;
            /* Words ke beech space manage karega */
            hyphens: auto;
            /* Bade words ko break karega gaps kam karne ke liye */
        }

        /* Headings aur Numbers (1, 2, 3) ko blue karne ke liye */
        .premium-description strong,
        .premium-description b,
        .premium-description h1,
        .premium-description h2 {
            color: #60a5fa !important;
            /* Blue-400 */
            display: block;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
            font-weight: 800;
            text-align: left;
            /* Headings ko justify nahi karna chahiye */
        }

        /* List items (points) ke beech gap */
        .premium-description p {
            margin-bottom: 1rem;
        }

        /* Agar editor se lists aa rahi hain */
        .premium-description ul,
        .premium-description ol {
            text-align: left;
            /* Lists ko hamesha left rakhein, justify nahi */
            padding-left: 1.2rem;
            margin-bottom: 1.5rem;
        }
        /* Premium Lava Glow Effect */
.glow-effect {
    box-shadow: 0 0 40px 15px rgba(59, 130, 246, 0.5), /* Blue glow */
                0 0 80px 30px rgba(99, 102, 241, 0.3); /* Soft purple lava effect */
    transition: box-shadow 0.3s ease-in-out;
}

.glow-effect:hover {
    box-shadow: 0 0 60px 25px rgba(59, 130, 246, 0.7),
                0 0 100px 40px rgba(99, 102, 241, 0.5);
}
    </style>
</head>

<body class="antialiased">
    <section class="hero-gradient relative w-full flex flex-col">
        @include('layouts.header')
        <main class="flex-grow flex flex-col items-center justify-start pt-16 px-6 text-center pb-20">
            <div class="flex items-center gap-2 text-sm mb-6 flex-wrap justify-center">
                <a href="/"> <span class="text-white opacity-80">Home</span></a>
                <span class="text-white opacity-70">&gt;</span>
                <a href="/services"> <span class="text-white opacity-80">Services</span></a>
                <span class="text-white opacity-50">></span>
                <span class="text-[#0276db] font-medium">{{ $service->title ?? 'Service Details' }}</span>
            </div>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl leading-tight text-[#0276db] mb-4">
                {{ $service->title ?? 'Service Details' }}
            </h1>
          @if($service && $service->image)
<div class="  rounded-3xl z-10 pointer-events-none overflow-hidden mb-8 relative glow-effect"
     style="height: 400px;">
    <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->title }}"
         class="w-full h-full object-contain">
</div>
@endif

            

            <img src="{{ asset('image/Group (3).png') }}"
                class="absolute bottom-[121px] left-0 w-[50%] block pointer-events-none z-0">

            <!-- RIGHT WAVE -->
            <img src="{{ asset('image/Group (4).png') }}"
                class="absolute bottom-[130px] right-0 w-[50%] h-[300px] pointer-events-none z-0">



            {{-- <p class="text-gray-400 text-base sm:text-lg max-w-2xl mx-auto font-medium">
                {{ $service->description ?? 'Service description not available.' }}
            </p> --}}
        </main>
    </section>
    <section class="service-section w-full py-14 sm:py-16 lg:py-20 px-4 sm:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div>
                    <p class="overview-label">Overview</p>
                    <h2 class="text-3xl sm:text-4xl font-bold text-[#0276db] leading-snug mb-5">About This Service</h2>
                    <div class="max-w-2xl">
                        <div class="premium-description text-sm sm:text-base leading-relaxed tracking-wide">
                            {!! $service->description !!}
                        </div>
                    </div>
                    @php
                        $deliverablesList = ($service->deliverables ?? $service->description) ? explode("\n", trim($service->deliverables ?? $service->description)) : [];
                        $serviceDeliverables = array_filter(array_map('trim', $deliverablesList));
                    @endphp

                    @if(!empty($serviceDeliverables))
                        <div class="space-y-2 mb-8 mt-10">
                            <p class="text-cyan font-bold text-lg ">Key Deliverables:</p>
                            <ul class="space-y-3">
                                @forelse($serviceDeliverables as $deliverable)
                                    <li class="check-item">
                                        <span class="check-icon">
                                            <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7139 1.13184C20.4457 0.510278 21.4281 0.347894 22.2939 0.640625C22.5118 0.714373 22.5686 0.992469 22.4053 1.14551C17.4225 5.81669 13.5306 11.5598 11.0869 17.8291C10.7986 18.5685 10.1953 19.1352 9.45117 19.3691L9.30078 19.4111C9.28786 19.4143 9.27371 19.4174 9.25977 19.4209C8.1574 19.6966 7.00448 19.2331 6.40625 18.2666C4.30583 14.8724 2.00933 12.2073 0.739258 10.8447C0.554822 10.6469 0.491102 10.4466 0.500977 10.291C0.510062 10.1479 0.585114 9.97408 0.826172 9.81445C2.13669 8.94647 3.86603 9.28611 5.22754 10.75H5.22852C5.98225 11.5603 6.95972 12.6453 7.67188 13.4854L8.08496 13.9727L8.45898 13.4551C11.5736 9.14536 15.6357 4.59566 19.7139 1.13184Z"
                                                    fill="#0276DB" stroke="#0276DB" />
                                            </svg>

                                        </span>
                                        {{ $deliverable }}
                                    </li>
                                @empty
                                    <li class="check-item">
                                        <span class="check-icon">
                                            <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7139 1.13184C20.4457 0.510278 21.4281 0.347894 22.2939 0.640625C22.5118 0.714373 22.5686 0.992469 22.4053 1.14551C17.4225 5.81669 13.5306 11.5598 11.0869 17.8291C10.7986 18.5685 10.1953 19.1352 9.45117 19.3691L9.30078 19.4111C9.28786 19.4143 9.27371 19.4174 9.25977 19.4209C8.1574 19.6966 7.00448 19.2331 6.40625 18.2666C4.30583 14.8724 2.00933 12.2073 0.739258 10.8447C0.554822 10.6469 0.491102 10.4466 0.500977 10.291C0.510062 10.1479 0.585114 9.97408 0.826172 9.81445C2.13669 8.94647 3.86603 9.28611 5.22754 10.75H5.22852C5.98225 11.5603 6.95972 12.6453 7.67188 13.4854L8.08496 13.9727L8.45898 13.4551C11.5736 9.14536 15.6357 4.59566 19.7139 1.13184Z"
                                                    fill="#0276DB" stroke="#0276DB" />
                                            </svg>

                                        </span>
                                        No deliverables specified
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    @endif

                    <ul class="space-y-4">
                        {{-- <li class="check-item">
                            <span class="check-icon">
                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7139 1.13184C20.4457 0.510278 21.4281 0.347894 22.2939 0.640625C22.5118 0.714373 22.5686 0.992469 22.4053 1.14551C17.4225 5.81669 13.5306 11.5598 11.0869 17.8291C10.7986 18.5685 10.1953 19.1352 9.45117 19.3691L9.30078 19.4111C9.28786 19.4143 9.27371 19.4174 9.25977 19.4209C8.1574 19.6966 7.00448 19.2331 6.40625 18.2666C4.30583 14.8724 2.00933 12.2073 0.739258 10.8447C0.554822 10.6469 0.491102 10.4466 0.500977 10.291C0.510062 10.1479 0.585114 9.97408 0.826172 9.81445C2.13669 8.94647 3.86603 9.28611 5.22754 10.75H5.22852C5.98225 11.5603 6.95972 12.6453 7.67188 13.4854L8.08496 13.9727L8.45898 13.4551C11.5736 9.14536 15.6357 4.59566 19.7139 1.13184Z"
                                        fill="#0276DB" stroke="#0276DB" />
                                </svg>

                            </span>
                            Customized Strategy
                        </li> --}}
                </div>
                <div class="flex flex-col gap-5">
                    <div class="feature-card">
                        <span class="feature-dot"></span>
                        <div>
                            <h4>Strategy Planning</h4>
                            <p>Customized approach for your business goals</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <span class="feature-dot"></span>
                        <div>
                            <h4>Content Creation</h4>
                            <p>High-quality visuals and copywriting</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <span class="feature-dot"></span>
                        <div>
                            <h4>Execution & Management</h4>
                            <p>Daily operations and optimization</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <span class="feature-dot"></span>
                        <div>
                            <h4>Reporting & Insights</h4>
                            <p>Monthly performance reports</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section w-full py-14 sm:py-16 lg:py-20 px-4 sm:px-8">
        <div class="max-w-4xl mx-auto">
            <p class="faq-label">FAQ</p>
            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0276db] text-center leading-snug mb-10 sm:mb-12">
                Common Questions</h2>
            <div class="flex flex-col gap-4">
                <div class="faq-item open" id="faq-1">
                    <button class="faq-trigger" onclick="toggleFaq('faq-1')">
                        <div class="faq-trigger-left">
                            <span class="faq-bullet"></span>
                            <span class="faq-question">How does this service work?</span>
                        </div>
                        <span class="faq-icon">
                            <i class="fa-solid fa-arrow-up"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>We start with a discovery session, develop your strategy, execute campaigns, and provide
                            ongoing optimization and reporting.</p>
                    </div>
                </div>
                <div class="faq-item" id="faq-2">
                    <button class="faq-trigger" onclick="toggleFaq('faq-2')">
                        <div class="faq-trigger-left">
                            <span class="faq-bullet"></span>
                            <span class="faq-question">What results can I expect?</span>
                        </div>
                        <span class="faq-icon">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>Results vary by industry and goals, but typically see 20-50% engagement growth and improved
                            brand awareness within 3-6 months.</p>
                    </div>
                </div>
                <div class="faq-item" id="faq-3">
                    <button class="faq-trigger" onclick="toggleFaq('faq-3')">
                        <div class="faq-trigger-left">
                            <span class="faq-bullet"></span>
                            <span class="faq-question">How long does it take to see results?</span>
                        </div>
                        <span class="faq-icon">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>Initial improvements in 30 days, significant growth in 90 days with consistent execution and
                            optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script>
        function toggleFaq(id) {
            const clickedItem = document.getElementById(id);
            const isAlreadyOpen = clickedItem.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(function (item) {
                item.classList.remove('open');
                const icon = item.querySelector('.faq-icon i');
                if (icon) {
                    icon.classList.remove('fa-arrow-up');
                    icon.classList.add('fa-arrow-down');
                }
            });
            if (!isAlreadyOpen) {
                clickedItem.classList.add('open');
                const icon = clickedItem.querySelector('.faq-icon i');
                if (icon) {
                    icon.classList.remove('fa-arrow-down');
                    icon.classList.add('fa-arrow-up');
                }
            }
        }
    </script>
</body>

</html>