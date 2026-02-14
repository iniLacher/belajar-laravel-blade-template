<?php

namespace Tests\Feature;


use Tests\TestCase;

class IssetBladeTest extends TestCase
{
  public function testIsset() {
   $this->view('/isEmptyBlade', ['test' => 'success'])
     ->assertSeeText('success');
  }
  public function testNotIsset() {
   $this->view('/isEmptyBlade', [])
     ->assertDontSeeText('success');
  }
  
  }
