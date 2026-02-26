<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExtendingBladeTemplateTest extends TestCase
{
  public function testExtendingBladeTemplate() {
    $this->view('make-directive', ['harga' => 1500364000])
    ->assertSeeText('ini adalah barang')
      ->assertSeeText('Rp 1.500.364.000');
  }
}
