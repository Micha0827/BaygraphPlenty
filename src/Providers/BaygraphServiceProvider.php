<?php
 
namespace Baygraph\Providers;
 
use Plenty\Plugin\ServiceProvider;
 
class BaygraphServiceProvider extends ServiceProvider
{
    public function register()
    {
			$this->getApplication()->register(BaygraphRouteServiceProvider::class); 
    }
}
