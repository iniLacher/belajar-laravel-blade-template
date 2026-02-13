<?php

namespace Tests\Feature;

use Tests\TestCase;

class IfBladeTest extends TestCase
{
  public function testIfBlade() {
    $this->view('/if', ["saltedEgg" => 5])
      ->assertSeeText('Salted egg Ready boskue');

    $this->view('/if', ["saltedEgg" => 1])
      ->assertSeeText('Tinggal Satu');


    $this->view('/if', ["saltedEgg" => 0])
      ->assertSeeText('Mohon Maaf salted egg Sold Out');
  }
}
