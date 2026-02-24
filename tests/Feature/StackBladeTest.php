<?php

namespace Tests\Feature;

use Tests\TestCase;

class StackBladeTest extends TestCase
{
  public function testStack() {
    $this->view('stack', [])
         ->assertSeeInOrder([
          'third.js',
          'first.js',
          'second.js'
         ]);
  }
}
