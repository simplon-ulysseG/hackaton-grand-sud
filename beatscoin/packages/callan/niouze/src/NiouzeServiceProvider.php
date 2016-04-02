<?php 

namespace Callan\Niouze;

use Illuminate\Support\ServiceProvider;

class NiouzeServiceProvider extends ServiceProvider{

    /**
     * Bootstrap the application services.
     *
     * @return void
    */

    public function boot(){
        
        if(! $this->app->routesAreCached()){
            require __DIR__.'/config/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/../src/Views', 'niouze');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('niouze.php')
            ], 'config');
        
        view()->composer(
            ['pages::accueil','partials.footer', 'pages::evenements', 'niouze::news.event'],
            'Callan\Niouze\Controllers\PublishController'
            );
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
    */

    public function register(){

    }

}

