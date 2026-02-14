<?php

namespace Tests\Feature;

use Tests\TestCase;

class envTest extends TestCase
{
   private function setEnvironment(string $env): void
    {
        config(['app.env' => $env]);
        $this->app['env'] = $env;
    }

  public function test_local_environment()
{
    $this->setEnvironment('local');
        
    $strFromRendering = view('envBlade')->render();
        
    $this->assertStringContainsString('This is LOCAL environment', $strFromRendering);
}

public function test_testing_environment()
{
    $this->setEnvironment('testing');
        
    $strFromRendering = view('envBlade')->render();
        
    $this->assertStringContainsString('This is TESTING environment', $strFromRendering);
}

public function test_production_environment()
{
    $this->setEnvironment('production');
        
    $strFromRendering = view('envBlade')->render();
        
    $this->assertStringContainsString('This is PRODUCTION environment', $strFromRendering);
}
}
