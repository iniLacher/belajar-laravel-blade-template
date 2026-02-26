<?php

namespace Tests\Feature;

use Tests\TestCase;

class EchoHandlerTest extends TestCase
{
  public function testEchoHandler() {
    $person = new \App\Models\Person();
    $person->name = 'Abdi';
    $person->address = 'Jakarta';

    $this->view('echo-handler', ['person' => $person])
      ->assertSeeText('Hi, perkenalkan saya')
      ->assertSeeText('Nama saya adalah Abdi, dan alamat saya adalah Jakarta');
  }
}
