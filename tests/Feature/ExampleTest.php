<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the home page is available at its route', function () {
    $response = $this->get(route('home'));

    $response->assertOk()
        ->assertSee('Home');
});
