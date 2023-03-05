<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
  /**
   * A basic feature test example.
   */
//   public function test_basic_routes(): void
//   {
//     // 1. példa
//     $response = $this->get('/');
//     $response->assertViewIs('welcome');

    // // 2. példa
    // $response = $this->get('/contact');
    // $response->assertStatus(200);

    // // 3. példa
    // $response = $this->get('/contac');
    // $response->assertNotFound();

    // // 4. példa
    // $response = $this->get('/pass-array');
    // $response->assertOk();
    // $response->assertSee('market');

    // // 5. példa
    // $response = $this->get('/request-test?title=MyFirstTitle');
    // $response->assertSee('MyFirstTitle');
//   }

  public function test_homepage()
  {
    // 1. példa
    $response = $this->get('/');
    $response->assertViewIs('welcome');
  }

  public function test_contact_route()
  {
    // 2. példa
    $response = $this->get('/contact');
    $response->assertStatus(200);

    // 3. példa
    $response = $this->get('/contac');
    $response->assertNotFound();
  }

  public function test_passing_data()
  {
    // 4. példa
    $response = $this->get('/pass-array');
    $response->assertOk();
    $response->assertSee('market');

    // 5. példa
    $response = $this->get('/request-test?title=MyFirstTitle');
    $response->assertSee('MyFirstTitle');
  }
}
