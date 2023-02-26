<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnnualLeave extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetAllData()
    {
        $response = $this->get('/api/annual-leaves');

        $response->assertStatus(200);
    }

    public function testFindData()
    {
        $response = $this->get('/api/annual-leaves/1');

        $response->assertStatus(200);
    }

    public function testCreateData()
    {
        $response = $this->post('/api/annual-leaves', [
            'date' => '2023-02-26',
            'user_id' => 1
        ]);

        $response->assertStatus(200);
    }

}
