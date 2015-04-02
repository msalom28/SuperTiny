<?php namespace SuperTiny\Shortener;

use Illuminate\Support\ServiceProvider;

class LittleServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider
	 *
	 * @Return void
	 */
	public function register()
	{
		$this->app->bind('Little', 'SuperTiny\Shortener\LittleService');
	}
}





 ?>