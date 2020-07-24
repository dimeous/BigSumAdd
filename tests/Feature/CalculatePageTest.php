<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CaclulatePageTest extends TestCase
{

    public function testCalculatePageAvalable()
    {
        $response = $this->get(route('calculate'));

        $response->assertStatus(200);
    }

    public function testCalculatePost()
    {
        $response = $this->post(route('calculate'),  array('num1' => 123, 'num2'=>321));

        $response->assertStatus(200);
    }
}
