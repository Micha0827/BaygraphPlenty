<?php

namespace Baygraph\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
	public function sayHello(Twig $twig):string
	{
		return $twig->render('Baygraph::content.hello');
	}
}

