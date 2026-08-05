@props([
    'href',
    'title' => null,
    'ariaLabel' => null,
    'class' => ''
])

<a
    href="{{ $href }}"
    target="_blank"
    rel="nofollow noopener noreferrer"
    @if($title) title="{{ $title }}" @endif
    @if($ariaLabel) aria-label="{{ $ariaLabel }}" @endif
    class="{{ $class }}"
>
    {{ $slot }}
    <span class="sr-only">(opens in a new tab)</span>
</a>
