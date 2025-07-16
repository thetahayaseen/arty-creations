<form {{ $attributes->merge([
    "method" => "post",
    "class" => "max-w-xl mx-auto xl:px-0 px-6"
]) }}>
    @csrf
    {{ $slot }}
</form>