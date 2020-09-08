<?php

namespace BaygraphView\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class BaygraphViewRouteServiceProvider extends RouteServiceProvider
{
	public function map(Router $router)
	{
		$router->get('hello-world', 'BaygraphView\Controllers\ContentController@sayHello');
	}
}
