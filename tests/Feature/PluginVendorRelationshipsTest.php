<?php

use App\Models\Plugin;
use App\Models\PluginVersion;
use App\Models\Vendor;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('plugin belongs to vendor', function (): void {
    $vendor = Vendor::factory()->create();
    $plugin = Plugin::factory()->create([
        'vendor_id' => $vendor->id,
    ]);

    expect($plugin->vendor)->not->toBeNull()
        ->and($plugin->vendor->is($vendor))->toBeTrue();
});

it('vendor has many plugins', function (): void {
    $vendor = Vendor::factory()->create();

    $plugins = Plugin::factory()->count(3)->create([
        'vendor_id' => $vendor->id,
    ]);

    expect($vendor->plugins)->toHaveCount(3)
        ->and($vendor->plugins->pluck('id')->sort()->values())
        ->toEqual($plugins->pluck('id')->sort()->values());
});

it('plugin version belongs to plugin', function (): void {
    $plugin = Plugin::factory()->create();
    $version = PluginVersion::factory()->create([
        'plugin_id' => $plugin->id,
    ]);

    expect($version->plugin)->not->toBeNull()
        ->and($version->plugin->is($plugin))->toBeTrue();
});

it('can reach vendor through plugin version via plugin relation', function (): void {
    $vendor = Vendor::factory()->create();
    $plugin = Plugin::factory()->create([
        'vendor_id' => $vendor->id,
    ]);
    $version = PluginVersion::factory()->create([
        'plugin_id' => $plugin->id,
    ]);

    expect($version->plugin->vendor)->not->toBeNull()
        ->and($version->plugin->vendor->is($vendor))->toBeTrue();
});
