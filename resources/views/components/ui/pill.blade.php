@props([
    'disabled' => false,
    'as' => 'span',
])

@php
    $classes = 'bg-gray-900 text-white px-4 py-1.5 rounded-full text-xs font-semibold';
    $attrs = $attributes->class([$classes, $disabled ? 'opacity-60 cursor-not-allowed' : '']);
@endphp

@if ($as === 'a' && ! $disabled)
    <a {{ $attrs }}>
        {{ $slot }}
    </a>
@elseif ($as === 'button' && ! $disabled)
    <button type="button" {{ $attrs }}>
        {{ $slot }}
    </button>
@else
    <span aria-disabled="true" {{ $attrs }}>
        {{ $slot }}
    </span>
@endif
