<?php

namespace Tests\Feature;

use Tests\TestCase;

class SwitchTest extends TestCase
{
  public function testSwitch() {
    $this->view('switch',  ['masak' => 'menumis'])
    ->assertSeeText('-Potong bawang dan cabai');
  }
}
