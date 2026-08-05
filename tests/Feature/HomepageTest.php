<?php

it('renders the homepage successfully', function (): void {
    $response = $this->get('/');

    $response->assertSuccessful();
    $response->assertSee('laraplugins.io', escape: false);
    $response->assertSee('Choose healthy plugins.', escape: false);
});

it('external links are nofollow and safe', function (): void {
    $response = $this->get('/');

    $response->assertSee('rel="nofollow noopener noreferrer"', false);
});

it('submit package is a disabled placeholder', function (): void {
    $response = $this->get('/');

    $html = $response->getContent();

    expect($html)
        ->toContain('Submit Package')
        ->and($html)->toContain('aria-disabled="true"')
        ->and($html)->not->toContain('<a href="#">Submit Package</a>');
});
