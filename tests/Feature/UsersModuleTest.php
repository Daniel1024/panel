<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function its_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test */
    function it_loads_the_users_details_page(){
        $this->get('/usuarios/5')
            ->assertOk()
            ->assertSee('Mostrando detalle del usario: 5');
    }
    
    /** @test */
    function it_loads_the_new_users_page(){
        $this->get('/usuarios/nuevo')
            ->assertOk()
            ->assertSee('Crear nuevo usuario');
    }
}
