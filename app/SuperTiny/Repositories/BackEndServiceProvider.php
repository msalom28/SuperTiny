<?php namespace SuperTiny\Repositories;

use Illuminate\Support\ServiceProvider;

class BackEndServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider
	 *
	 * @Return void
	 */
	public function register()
	{
		$this->app->bind('SuperTiny\Repositories\LinkRepositoryInterface', 'SuperTiny\Repositories\DbLinkRepository');
	}
}

 ?>