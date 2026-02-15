<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoopVariableTest extends TestCase
{
  public function testLoopVariable() {
    $this->view('loop-variable', [
      'mobil' => ['alphard', 'fortuner', 'rubicon'],
      'tasks' => []
      ])
      ->assertSee('alphard')
      ->assertSee('fortuner')
      ->assertSee('rubicon');
  }

  public function testLoopRemaining() {
    $this->view('loop-variable', [
      'tasks' => ['tugas 1', 'tugas 2'],
      'mobil' => []
      ])
      ->assertSeeText('tersisa 1 tugas lagi');
  }
}
