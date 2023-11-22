<?php

use App\Models\User;

beforeEach(function (){
    $this->user = User::factory()->create()->toArray();
});

it('test user login', function () {

    $user = [
        'email' => $this->user['email'],
        'password' => $this->user['password']
    ];

    $response = $this->post('api/login', $user);

    $response->assertOk();
    $response->assertJsonStructure([
        'status',
        'message'
    ]);

});
