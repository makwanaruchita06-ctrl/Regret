

 @include('layouts.app')

  <header class="w-full max-w-6xl mx-auto px-3 sm:px-4 py-3 lg:py-4
               flex items-center gap-3 lg:gap-6">

    <div class="hidden lg:flex shrink-0 items-center">
      <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-10 lg:h-20" alt="Logo">
      
    </div>

    <div class="bg-[#ffffff] flex items-center justify-between w-full
              px-4 sm:px-5 lg:px-10
              py-2.5 sm:py-3 lg:py-4
              rounded-full min-w-0">

      <div class="flex items-center shrink-0">


        <img src="{{ asset('image/mobile.png') }}" alt="logo" class="block lg:hidden h-8 sm:h-10 w-auto" alt="Logo">

        <div class="hidden lg:flex items-center gap-1">
          <span class="text-[#0276DB] font-bold text-xl whitespace-nowrap">REGRET</span>
          <span class="text-black font-bold text-xl whitespace-nowrap">CONSULTANCY</span>
        </div>

      </div>

      <nav class="hidden lg:flex items-center gap-6 xl:gap-10">
        <a href="/" class="{{ request()->is('/') ? 'nav-link active' : 'nav-link' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'nav-link active' : 'nav-link' }}">About Us</a>
        <a href="/services" class="{{ request()->is('services') ? 'nav-link active' : 'nav-link' }}">Services</a>
        <a href="/Career" class="{{ request()->is('Career') ? 'nav-link active' : 'nav-link' }}">Career</a>
<a href="{{ route('portfolio') }}" class="{{ request()->is('portfolio') ? 'nav-link active' : 'nav-link' }}">Portfolio</a>
      </nav>


    <a href="/contact" 
   class="hidden lg:inline-flex items-center shrink-0
   px-6 xl:px-8 py-2
   text-black text-sm lg:text-base
   rounded-full font-semibold
   border border-[#0276db]/50
   bg-white/10 backdrop-blur-md
   
   hover:bg-[#0276db] hover:text-white
   hover:shadow-[0_0_20px_rgba(2,118,219,0.8)]
   transition-all duration-300">
    Contact Us
</a>

      <button id="menuBtn" aria-label="Open menu" class="lg:hidden text-black text-3xl leading-none focus:outline-none">
        ☰
      </button>

    </div>

  </header>


  <div class="mobile-menu" id="mobileMenu" aria-hidden="true">

    <button id="closeBtn" class="mobile-menu-close" aria-label="Close menu">&times;</button>

    <a href="/" class="mobile-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
    <a href="/about" class="mobile-link {{ request()->is('about') ? 'active' : '' }}">About Us</a>
    <a href="/services" class="mobile-link {{ request()->is('services*') ? 'active' : '' }}">Services</a>
    <a href="/Career" class="mobile-link {{ request()->is('Career') ? 'active' : '' }}">Career</a>
<a href="{{ route('portfolio') }}" class="mobile-link {{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>

    <a href="/contact" class="mt-2 px-10 py-3 bg-white text-[#18a3b8] rounded-full
            font-semibold text-lg hover:bg-black hover:text-white transition-colors duration-200">
      Contact Us
    </a>

  </div>


