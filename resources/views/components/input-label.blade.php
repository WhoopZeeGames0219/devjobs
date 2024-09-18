@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-800 uppercase font-bold']) }}>
    {{ $value ?? $slot }}
</label>