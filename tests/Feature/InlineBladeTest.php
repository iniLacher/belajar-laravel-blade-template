<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTest extends TestCase
{
  public function testInlineBlade() {
      $response = Blade::render('Hello, {{ $name }}', ['name' => 'Abdi']);
      $this->assertEquals('Hello, Abdi', $response);
  }
}
