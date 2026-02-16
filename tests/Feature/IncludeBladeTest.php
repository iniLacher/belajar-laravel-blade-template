<?php

namespace Tests\Feature;

use Tests\TestCase;

class IncludeBladeTest extends TestCase

{
  public function testInclude() {
    $this->view('/include', ['tittle' => 'kingudin page'])
      ->assertDontSeeText('kingabdi page');
  }
}
