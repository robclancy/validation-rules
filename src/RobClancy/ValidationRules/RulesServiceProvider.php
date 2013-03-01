<?php namespace RobClancy\ValidationRules\Rule;

use RobClancy\ValidationRules\Rule\Builder\Illuminate as Builder;
use Illuminate\Support\ServiceProvider;

class RuleServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('robclancy/validation-rules');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['rule'] = $this->app->share(function($app)
		{
			return new Factory(new Builder);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('rule');
	}

}