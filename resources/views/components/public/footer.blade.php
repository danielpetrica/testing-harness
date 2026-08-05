<footer class="mt-auto border-t border-gray-100 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} LaraPlugins.io. All rights reserved.</p>

            <div class="flex items-center gap-4 text-sm">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-900">Home</a>
                <x-ui.external-link href="https://github.com/laraplugins" class="text-gray-500 hover:text-gray-900">
                    GitHub
                </x-ui.external-link>
                <x-ui.external-link href="https://twitter.com/search?q=laravel%20packages" class="text-gray-500 hover:text-gray-900">
                    Twitter/X
                </x-ui.external-link>
            </div>
        </div>
    </div>
</footer>
