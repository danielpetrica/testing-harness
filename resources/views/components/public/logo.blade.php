<div {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    <div class="w-8 h-8 bg-red-600 rounded-lg flex items-center justify-center text-white font-bold">L</div>
    <span class="font-bold text-xl tracking-tight text-gray-900">{{ $slot->isEmpty() ? 'laraplugins.io' : $slot }}</span>
</div>
