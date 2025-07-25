@props(
    [
        "ctaText",
        "ctaRedirect"
    ]
)

<div class="flex lg:order-2 space-x-1 lg:space-x-0">

    <x-navigation.cta ctaText="{{ $ctaText }}" ctaRedirect="{{ $ctaRedirect }}" />

    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center py-2 px-0.5 mobile-nav-sm:px-2 w-6 mobile-nav-sm:w-10 mobile-nav-md:h-10 h-9 justify-center text-sm text-stone-700 rounded-lg lg:hidden hover:bg-stone-200 focus:outline-none focus:ring-2 focus:ring-stone-300 transition duration-150" aria-controls="navbar-cta" aria-expanded="false">
    <span class="sr-only">Open menu</span>
    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
    </button>
</div>

