<?php

use App\Models\web_list;

it('show the all websites', function () {

    web_list::factory(2)->create();

    $response = $this->post('/api/website');

    $response->assertStatus(200);

    $response->assertJsonStructure([
        'status',
        'websites'
    ]);
});
