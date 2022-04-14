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

       view()->composer(['index.master', 'index.layouts.elementor.warp' , 'index.layouts.elementor.widget'
       , 'index.support.index' ,'indexhost.layouts.navbar' , 'index.layouts.elementor.txtdese' , 'index.layouts.elementor.txtalert'
        , 'custome.layouts.sidebar'  , 'admin.layouts.sidebar' , 'indexhost.layouts.txtdeses' , 'indexhost.layouts.footer'  , 'indexhost.layouts.banner' , 'indexhost.master' ], Menuindex::class);
    }
}
