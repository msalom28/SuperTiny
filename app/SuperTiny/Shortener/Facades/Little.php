<?php namespace SuperTiny\Shortener\Facades;


/**
*	To use Facades we need 3 things: 
*	1) the facade class itself: To return the name of the binding fron the IOC container
*	2) the underline class.
*	3) and the service provider: To register the Facade
*
 */

use Illuminate\Support\Facades\Facade;

class Little extends Facade
{	
//The only thing we need to override is this function from: Illuminate\Support\Facades\Facade;
//Returns the name of the binding in the IOC container.

	protected static function getFacadeAccessor()
	{
		return 'Little';
	}
}














 ?>