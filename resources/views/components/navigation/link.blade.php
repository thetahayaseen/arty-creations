@props(
    [
        "link",
        "linkText"
    ]
)

<li>
    <a href="{{ $link }}" class="block py-2 px-3 lg:p-0 text-stone-600 font-semibold mobile-nav-md:text-lg text-base hover:text-stone-500 hover:bg-stone-200 lg:hover:bg-transparent transition duration-200">{{ $linkText }}</a>
</li>