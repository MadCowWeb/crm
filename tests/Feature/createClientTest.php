<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class createClientTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_client()

    {

        $this->withoutExceptionHandling();
        
        $attributes = [
            'companyName' => $this->faker->company,
            'ownerName' => $this->faker->name,
            'ownerTitle' => $this->faker->jobTitle

        ];

        $this->post('/clients', $attributes)->assertRedirect('/clients');


        $this->assertDatabaseHas('clients', $attributes);

        $this->get('/clients')->assertSee($attributes['companyName']);


    }

}
