<?php

namespace Tests\Feature;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
  public function testInclude() {
    $this->view('include-condition', [ 'user' => [
      'name' => 'kingabdi',
      'owner' => true
    ]])
    ->assertSeeText('kingabdi')
    ->assertSeeText(' Untuk meilihat laporan bulan ini,silahkan cek menu laporan');

    $this->view('include-condition', [ 'user' => [ 
      'name' => 'kingudin',
      'owner' => false
    ]])
    ->assertSeeText('kingudin')
    ->assertDontSeeText(' Untuk meilihat laporan bulan ini,silahkan cek menu laporan');
  }
}
