<?php

it('renders the home page with reusable components', function (): void {
    $response = $this->get(route('home'));

    $response->assertSuccessful();

    // Logo text from x-public.logo
    $response->assertSee('laraplugins.io', escape: false);

    // Nav links from x-ui.nav-link in topbar
    $response->assertSee('Trending', escape: false)
        ->assertSee('New Releases', escape: false)
        ->assertSee('Best Health Score', escape: false)
        ->assertSee('Laravel 12 Ready', escape: false);

    // CTA from hero component
    $response->assertSee('Explore Features', escape: false);
});
