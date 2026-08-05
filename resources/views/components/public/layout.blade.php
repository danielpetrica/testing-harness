@props([
    'title' => config('app.name', 'LaraPlugins.io'),
    'description' => 'Discover the best Laravel packages with real-time health scores, compatibility, and trusted vendor badges.'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', var(--font-sans, ui-sans-serif), system-ui, sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(calc(-250px * 5)); } }
        .slider { animation: scroll 20s linear infinite; display: flex; width: calc(250px * 10); }
        .slider:hover { animation-play-state: paused; }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased flex flex-col min-h-screen">
    {{ $slot }}
</body>
</html>
