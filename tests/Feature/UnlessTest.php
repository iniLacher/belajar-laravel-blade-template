<?php

namespace Tests\Feature;


use Tests\TestCase;

class UnlessTest extends TestCase
{
  public function testUnless() {
    $this->view('/unless', ['isAdmin' => false])
      ->assertSeeText('Kamu tidak memiliki otoritas ke halaman ini');

     $this->view('/unless', ['isAdmin' => true])
      ->assertDontSeeText('Kamu tidak memiliki otoritas ke halaman ini');
  }

  
}
