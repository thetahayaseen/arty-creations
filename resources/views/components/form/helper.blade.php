@props([
    "text",
    "link" => null,
    "linkText" => "",
])

<p {{ $attributes->merge([
    "class" => "mt-4 font-body font-medium text-base mobile-form-sm:text-lg text-stone-600 transition-colors duration-200",
]) }}>
    {{ $text }}
    @if ($link)
        <a href="{{ $link }}" class="font-semibold text-stone-700 hover:text-stone-800">{{ $linkText }}</a>
    @endif
</p>