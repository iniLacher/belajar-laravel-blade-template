<?php

namespace Tests\Feature;

use Tests\TestCase;

class FormBladeTest extends TestCase
{
  public function testForm() {
    $this->view('form', [ 'user' => [
      'name' => 'kingabdi',
      'premium' => true,
      'admin' => false
    ]])
    ->assertSee('checked')
    ->assertSee('kingabdi')
    ->assertSee('readonly');
  }
}
