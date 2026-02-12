<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
  public function testHello() {
    $this->get('/hello')
        ->assertSeeText('king Abdi');
  }
}
