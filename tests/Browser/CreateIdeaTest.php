<?php

use App\IdeaStatus;
use App\Models\Idea;
use App\Models\User;

it('it creates an idea', function () {

   $this->actingAs($user = User::factory()->create());
    visit('/ideas')
        ->click('@create-idea-button')
        ->fill('title', 'idea using test')
        ->click('@button-status-in_progress')
        ->fill('description', 'test description')
        ->click('Create')
        ->assertPathIs('/ideas');

    expect($user->ideas()->first())->toMatchArray([
        'title' => 'idea using test',
        'status' => 'in_progress',
        'description' => 'test description',
    ]);
});
