<?php

use App\Models\Plugin;
use Illuminate\Support\Facades\Cache;

use function Pest\Laravel\get;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('renders dynamic packages count on the homepage', function (): void {
    Plugin::factory()->count(3)->create();

    $response = get(route('home'));

    $response->assertOk();
    $response->assertSee('Indexing 3 Packages');
});

it('caches homepage stats for one hour and does not change within TTL', function (): void {
    // Ensure a clean slate for cache key used by the controller.
    Cache::forget('home:stats');

    Plugin::factory()->count(2)->create();

    // First request should cache the stats.
    get(route('home'))
        ->assertOk()
        ->assertSee('Indexing 2 Packages');

    // Create another record; within TTL, the cached count should remain the same.
    Plugin::factory()->create();

    get(route('home'))
        ->assertOk()
        ->assertSee('Indexing 2 Packages');

    // After clearing cache, the new count should be reflected.
    Cache::forget('home:stats');

    get(route('home'))
        ->assertOk()
        ->assertSee('Indexing 3 Packages');
});
