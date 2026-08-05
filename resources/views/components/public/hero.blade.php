<header class="relative overflow-hidden bg-white pt-16 pb-24">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-red-50 blur-3xl opacity-50 pointer-events-none"></div>

    <div class="max-w-3xl mx-auto px-4 text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 text-orange-500 text-xs font-bold border border-orange-100 mb-6">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span>
            </span>
            @php
                $packageCount = $packages ?? null;
            @endphp
            Indexing {{ $packageCount !== null ? number_format($packageCount) : '15,000+' }} Packages
        </div>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-6">
            Stop guessing. <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-500">Choose healthy plugins.</span>
        </h1>

        <p class="text-lg text-gray-500 mb-8 leading-relaxed">
            LaraPlugins.io helps you discover trustworthy Laravel plugins with real-time health scores, compatibility insights, and vendor reputation signals.
        </p>

        <div class="flex items-center justify-center gap-3">
            <a href="#features" class="bg-gray-900 text-white px-5 py-3 rounded-lg font-semibold hover:bg-red-600 transition">Explore Features</a>
            <x-ui.external-link href="https://github.com/laraplugins" class="text-gray-600 hover:text-gray-900 font-medium">
                View on GitHub
            </x-ui.external-link>
        </div>
    </div>
</header>
