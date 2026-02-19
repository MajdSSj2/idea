<?php

use App\Models\User;

it('creates an idea', function () {

    $this->actingAs($user = User::factory()->create());
    visit('/ideas')
        ->click('@create-idea-button')
        ->fill('title', 'idea using test')
        ->click('@button-status-in_progress')
        ->fill('description', 'test description')
        ->fill('@new-link', 'https://laracasts.com')
        ->click('@submit-new-link-button')
        ->fill('@new-link', 'https://laravel.com')
        ->click('@submit-new-link-button')
        ->click('Create')
        ->assertPathIs('/ideas');

    expect($user->ideas()->first())->toMatchArray([
        'title' => 'idea using test',
        'status' => 'in_progress',
        'description' => 'test description',
        'links' => ['https://laracasts.com', 'https://laravel.com'],
    ]);
});
