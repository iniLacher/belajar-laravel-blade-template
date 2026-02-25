<?php

namespace Tests\Feature;

use Tests\TestCase;

class InjectBladeTest extends TestCase
{
  public function testInject() {
    $this->view('service-injection', ['name' => 'KingAbdi'])->assertSeeText('Hello, KingAbdi');
  }
}
