<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCityCompareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('users_cities_compare', [
            'user_id' => '1',
            'name' => 'compare test',
            'cities' => json_encode([3405, 7519])
        ]);

        $response->assertStatus(200);
    }
}
