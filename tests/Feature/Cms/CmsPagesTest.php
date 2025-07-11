<?php

use App\Models\User;

test('cms dashboard page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get('/'.config('cms.route_uri_prefix'));

    $response->assertOk();
});
