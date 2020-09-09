<?php

namespace Baygraph\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plenty\Routeing\Router;

class BaygraphRouteServerProvider extends RouteServiceProvider
{
	public function map(Router $router)
	{
		$router->get('hello', 'Baygraph\Controllers\ContentController@sayHello');
	}

}


