@props([
    'href' => '#',
])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-gray-500 hover:text-red-600 transition']) }}>
    {{ $slot }}
</a>
