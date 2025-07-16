@props([
    "name",
    "label" => "",
    "options" => [],
])

<div class="mt-5">
    @if ($label)
        <label for="{{ $name }}" class="block mb-2 text-sm mobile-form-sm:text-base font-body font-semibold text-stone-900">{{ $label }}</label>
    @endif
    <select id="{{ $name }}"  name="{{ $name }}" {{ $attributes->merge([
        "class" => "bg-stone-50 border border-stone-300 font-body font-medium text-sm mobile-form-sm:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-3",
    ]) }}>
        <option value=""> -- Select -- </option>
        @foreach ($options as $value => $display)
            <option value="{{ $value }}" class="text-stone-900" @selected(old($name) == $value) >
                {{ $display }}
            </option>
        @endforeach
    </select>
    @error($name)
        <p class="mt-2 text-sm mobile-form-sm:text-base text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
    @enderror
</div>

@push("scripts")
<script>
    const select = document.getElementById("{{ $name }}");
    
    function updateColor() {
        if (select.value === '') {
            select.classList.add('text-stone-400');
            select.classList.remove('text-stone-900');
        } else {
            select.classList.remove('text-stone-400');
            select.classList.add('text-stone-900');
        }
    }
    
    select.addEventListener('change', updateColor);
    updateColor(); 
</script>
@endpush