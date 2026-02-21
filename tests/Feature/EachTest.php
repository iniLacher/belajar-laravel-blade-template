<?php

namespace Tests\Feature;

use Tests\TestCase;

class EachTest extends TestCase
{
  public function testEach() {
    $this->view('each', [ 'users' => [
      ['name' => 'kingabdi',
        'hobbies' => ['reading', 'gaming']
      ],
      ['name' => 'kingudin',
        'hobbies' => ['cooking', 'traveling']
      ]
    ]])
    ->assertSeeInOrder([
      'kingabdi',
      'reading',
      'gaming',
      'kingudin',
      'cooking',
      'traveling'
    ]);
  }
}
