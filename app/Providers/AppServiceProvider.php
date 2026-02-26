<?php

namespace App\Providers;

use App\Models\Person;
use App\Services\SayHello;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
 (    */
    public function register(): void
    {
      $this->app->singleton(SayHello::class, function() {
        return new SayHello();
      });
    }
  
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      Blade::directive('rupiah', function($expression) {
        return "<?php echo 'Rp ' . number_format($expression, 0, ',', '.'); ?>";
      });

      Blade::stringable(Person::class, function(Person $person) {
        return "Nama saya adalah $person->name, dan alamat saya adalah $person->address";
      });
    }
}
