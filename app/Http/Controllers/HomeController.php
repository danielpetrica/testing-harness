<?php

namespace App\Http\Controllers;

use App\Enums\TTLEnum;
use App\Models\Plugin;
use App\Models\PluginVersion;
use App\Models\Vendor;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController
{
    public function __invoke(): View
    {
        $stats = Cache::remember(
            key: 'home:stats',
            ttl: TTLEnum::OneHour->getSeconds(),
            callback: function (): array {
                return [
                    'packages' => Plugin::query()->count(),
                    'vendors' => Vendor::query()->count(),
                    'versions' => PluginVersion::query()->count(),
                ];
            }
        );

        return view('home', [
            'homeStats' => $stats,
        ]);
    }
}
