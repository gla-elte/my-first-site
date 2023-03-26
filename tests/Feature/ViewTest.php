<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
  public function test_does_not_contain_contact_element(): void
  {
    $response = $this->get('/');

    $response->assertDontSee('Ez egy kapcsolati oldal.');
  }

  public function test_view_contains_data()
  {
    $response = $this->get('/');
    $response->assertViewHas('name');

    $response = $this->get('/pass-array');
    $response->assertViewHas('tasks');
  }
}
