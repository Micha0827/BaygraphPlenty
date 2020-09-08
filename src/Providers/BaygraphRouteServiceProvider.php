<?php

namespace Baygraph\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class BaygraphRouteServiceProvider extends RouteServiceProvider
{
	public function map(Router $router)
	{
		$router->get('hello', 'Baygraph\Controllers\ContentController@sayHello');
	}
}
