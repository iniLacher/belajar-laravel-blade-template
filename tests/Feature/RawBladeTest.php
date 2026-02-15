<?php

namespace Tests\Feature;

use Tests\TestCase;

class RawBladeTest extends TestCase
{
  public function testRawBlade() {
    $this->view('raw')
      ->assertSeeText('kingabdi')
      ->assertSeeText('Indonesia');
  }
}
