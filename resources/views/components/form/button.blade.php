<button {{ $attributes->merge([
    "class" => "mt-6 mobile-form-sm:mt-6 w-full text-white bg-stone-600 hover:bg-stone-700 focus:ring-4 focus:outline-none focus:ring-stone-400 rounded-lg text-base mobile-form-sm:text-lg py-1 mobile-form-sm:py-2 text-center font-display font-semibold transition duration-200", "type" => "submit"
]) }}>
    {{ $slot }}
</button>