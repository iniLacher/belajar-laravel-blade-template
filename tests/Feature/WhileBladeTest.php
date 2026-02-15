<?php

namespace Tests\Feature;

use Tests\TestCase;

class WhileBladeTest extends TestCase
{
  public function testWhileBlade() {
    $this->view('while', ['i' => 1])
      ->assertSeeText('1')
      ->assertSeeText('2')
      ->assertSeeText('3')
      ->assertSeeText('4')
      ->assertDontSeeText('11');
  }
}
