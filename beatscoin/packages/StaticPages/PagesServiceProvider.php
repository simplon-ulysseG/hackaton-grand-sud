<?php 

namespace Pages;
use View;
use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
	public function boot()
	{
		if(! $this->app->routesAreCached()){
			require __DIR__.'/routes.php';
		}

		$this->loadViewsFrom(__DIR__.'/../StaticPages/views', 'pages');

		$this->publishes([
            __DIR__.'/config/pages.php' => config_path('pages.php')
            ], 'config');
        
        view()->composer(
            ['pages::acceuil'],
            'Callan\Niouze\Controller\AcceuilController'
            );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
