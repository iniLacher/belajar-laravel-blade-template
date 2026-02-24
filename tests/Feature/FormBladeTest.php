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


  public function testFalseForm() {
    $this->view('form', [ 'user' => [
      'name' => 'kingudin',
      'premium' => false,
      'admin' => true
    ]])
    ->assertDontSee('checked')
    ->assertSee('kingudin')
    ->assertDontSee('readonly');
  }
}
