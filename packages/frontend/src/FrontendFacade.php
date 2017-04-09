<?php namespace Frontend;

use Illuminate\Support\Facades\Facade;

class FrontendFacade extends Facade
{
	
	public static function getFacadeAccessor()
	{
		return 'register-frontend';
	}
}