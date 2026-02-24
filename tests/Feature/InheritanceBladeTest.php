<?php

namespace Tests\Feature;

use Tests\TestCase;

class InheritanceBladeTest extends TestCase
{
  public function testInheritance() {
    $this->view('child', [])
         ->assertSee('Halaman Utama')
         ->assertSee('Ini adalah header')
         ->assertSee('ini adalah isi content');
  } 

  public function testInheritanceDefault() {
    $this->view('child-default', [])
         ->assertSeeText('Halaman Utama')
         ->assertSeeText('ini isi header')
         ->assertSeeText('ini isi content')
         ->assertSeeText('ini Default')
         ->assertSeeText('ini isi child default');
  }
}
