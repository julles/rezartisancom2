<?php namespace Frontend;

use Illuminate\Support\ServiceProvider;

use Frontend\Frontend;

class FrontendProvider extends ServiceProvider
{
	public function boot()
	{

	}

	public function register()
	{
		$this->app->bind('register-frontend',function(){
			return new Frontend();
		});
	}
}