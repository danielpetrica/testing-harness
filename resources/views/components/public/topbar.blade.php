<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14 items-center">
            <!-- Logo -->
            <x-public.logo />

            <!-- Useful Menus / Quick Filters -->
            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <x-ui.nav-link href="#trending">Trending</x-ui.nav-link>
                <x-ui.nav-link href="#releases">New Releases</x-ui.nav-link>
                <x-ui.nav-link href="#health">Best Health Score</x-ui.nav-link>
                <x-ui.nav-link href="#compatibility">Laravel 12 Ready</x-ui.nav-link>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-3">
                <button class="text-gray-400 hover:text-red-600 transition" aria-label="Search" title="Search">
                    <x-ui.icon-search class="size-5" />
                </button>
                <!-- Submit Package placeholder (not implemented) -->
                <x-ui.pill disabled title="Submitting packages is coming soon">Submit Package</x-ui.pill>
            </div>
        </div>
    </div>
</nav>
