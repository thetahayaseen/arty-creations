<nav class="bg-stone-50 border-b border-stone-100 shadow-sm">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-1.5 mobile-nav-sm:px-4">
    

    <a href="{{ route('home')  }}" class="flex items-center space-x-3 group">
      <span class="self-center font-display font-bold text-lg mobile-nav-md:text-xl sm:text-2xl whitespace-nowrap text-stone-600 transition-colors duration-200 group-hover:text-stone-700">
        Arty Creations
      </span>
    </a>

    <div class="flex lg:order-2 space-x-1 lg:space-x-0">
      <a href="{{ route('artist.enrollment.form') }}">
        <button type="button" class="text-white bg-stone-600 hover:bg-stone-700 focus:ring-4 focus:outline-none focus:ring-stone-400 rounded-lg text-sm mobile-nav-md:text-base px-1 mobile-nav-sm:px-2.5 mobile-nav-md:px-4 py-2 text-center font-display font-bold transition duration-200">
          @if($hasEnrollment)
            See Enrollment Status
          @else
            Are you an artist?
          @endif
        </button>
      </a>
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center py-2 px-0.5 mobile-nav-sm:px-2 w-6 mobile-nav-sm:w-10 mobile-nav-md:h-10 h-9 justify-center text-sm text-stone-700 rounded-lg lg:hidden hover:bg-stone-200 focus:outline-none focus:ring-2 focus:ring-stone-300 transition duration-150" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open menu</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>

    <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-stone-200 rounded-lg bg-stone-50 lg:space-x-8 lg:flex-row lg:mt-0 lg:border-0 lg:bg-transparent">
        <li>
          <a href="{{ route('home')  }}" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">Gallery</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">Contact</a>
        </li>
        

        <li class="hidden lg:block">
          <p class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base lg:hover:bg-trans5arent transition duration-200"> | </p>
        </li>

        @auth          
          <li>
            <a href="{{ route('auth.logout')  }}" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">Logout</a>
          </li>
        @else
          <li>
            <a href="{{ route('auth.login')  }}" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">Login</a>
          </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>

