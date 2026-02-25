<?php

namespace App\Services;

class sayhello {
  public function sayHello(string $name ): string {
    return "Hello, $name";
  }
}