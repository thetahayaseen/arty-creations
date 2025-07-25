@props(
    [
        "text",
        "redirect" => null,    
    ]
)

<a href="{{ $redirect  }}" class="flex items-center space-x-3 group">
    <span class="self-center font-display font-bold text-lg mobile-nav-md:text-xl sm:text-2xl whitespace-nowrap text-stone-600 transition-colors duration-200 group-hover:text-stone-700">
        {{ $text }}
    </span>
</a>