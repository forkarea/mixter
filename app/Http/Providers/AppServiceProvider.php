<?php namespace App\Http\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->app->bind('App\Domain\IEventPublisher', 'App\Infrastructure\EventPublisher');
		$this->app->bind('App\Infrastructure\IEventStore', 'App\Infrastructure\FileEventStore');
        $this->app->bind('App\Infrastructure\IProjectionStore', 'App\Infrastructure\FileProjectionStore');
        $this->app->bind('App\Domain\Identity\ISessionProjectionRepository', 'App\Infrastructure\Identity\SessionProjectionRepository');
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
