<?php

namespace Tests\Feature;

use Tests\TestCase;

class ForTest extends TestCase
{
  public function testFor () {
    $this->get('/for')
        ->assertSeeText('1')
        ->assertSeeText('2')
        ->assertSeeText('3')
        ->assertSeeText('4');
  }

  public function testForeach() {
    $this->get('/for')
        ->assertSeeText('makan')
        ->assertSeeText('tidur')
        ->assertSeeText('ngoding');
  }
  
  public function testForelse() {
    $this->get('/for')
        ->assertSeeText('makan')
        ->assertSeeText('tidur')
        ->assertSeeText('ngoding');
  }
}
