@props(
    [
        "ctaText",
        "ctaRedirect"
    ]
)
<a href="{{ $ctaRedirect }}">
    <button type="button" class="text-white bg-stone-600 hover:bg-stone-700 focus:ring-4 focus:outline-none focus:ring-stone-400 rounded-lg text-sm mobile-nav-md:text-base px-1 mobile-nav-sm:px-2.5 mobile-nav-md:px-4 py-2 text-center font-display font-bold transition duration-200">
        {{ $ctaText }}
    </button>
</a>