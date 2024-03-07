<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }
}
