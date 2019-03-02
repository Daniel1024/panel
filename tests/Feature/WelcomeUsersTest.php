<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname(){
        $this->get('saludo/Daniel/daniel1024')
            ->assertOk()
            ->assertSee('Bienvenido Daniel, tu apodo es daniel1024');
    }

    /** @test */
    function it_welcomes_users_without_nickname(){
        $this->get('saludo/Daniel')
            ->assertOk()
            ->assertSee('Bienvenido Daniel, no tienes apodo');
    }
}
