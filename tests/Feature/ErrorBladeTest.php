<?php

namespace Tests\Feature;

use Tests\TestCase;

class ErrorBladeTest extends TestCase
{
  public function testValidationError() {
    $errors = [
      'name' => ['Kolom jeneng kudu di isi bro.'],
      'password' => ['Woe niat nglebokke password gak,iseh salah kui!!!.']
    ];
  
    $this->withViewErrors($errors)
         ->view('error', [])
         ->assertSee('Kolom jeneng kudu di isi bro.')
         ->assertSee('Woe niat nglebokke password gak,iseh salah kui!!!.');
  }
}
