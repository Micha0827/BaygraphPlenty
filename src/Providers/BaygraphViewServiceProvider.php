<?php
 
namespace BaygraphView\Providers;
 
use Plenty\Plugin\ServiceProvider;
 
class BaygraphViewServiceProvider extends ServiceProvider
{
    public function register()
    {
			$this>getApplication()->register(BaygraphViewRouteServiceProvider::class); 
    }
}
