@props([
    "name",
    "label" => "",
    "placeholder" => "",
    "rows" => "3",
])

<div class="mt-5">
    @if ($label)
        <label for="{{ $name }}" class="block mb-2 text-sm mobile-form-sm:text-base font-body font-semibold text-stone-900">{{ $label }}</label>
    @endif
    <textarea id="{{ $name }}"  name="{{ $name }}" placeholder="{{ $placeholder }}" rows={{ $rows }} {{ $attributes->merge([
        "class" => "bg-stone-50 border border-stone-300 text-stone-900 font-body font-medium text-sm mobile-form-sm:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-3",
    ]) }}>{{ old($name) ?? '' }}</textarea>
    @error($name)
        <p class="mt-2 text-sm mobile-form-sm:text-base text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
    @enderror
</div>