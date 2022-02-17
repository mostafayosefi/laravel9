<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composser\Menuindex;

class MenuindexProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

       view()->composer(['index.master', 'index.layouts.elementor.warp' , 'index.layouts.elementor.widget'  , 'index.support.index' ], Menuindex::class);
    }
}
