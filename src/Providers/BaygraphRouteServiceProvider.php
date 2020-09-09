<?php

namespace Baygraph\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class BaygraphRouteServerProvider extends RouteServiceProvider
{
	public function map(Router $router)
	{
		$router->get('world', 'Baygraph\Controllers\ContentController@sayHello');
	}

}


