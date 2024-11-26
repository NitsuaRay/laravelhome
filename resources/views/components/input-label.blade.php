@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-md text-primary dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>