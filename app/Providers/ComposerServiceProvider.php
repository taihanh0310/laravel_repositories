<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

/**
 * Description of ComposerServiceProvider
 *
 * @author NTHanh
 */
class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
//        View::composer(
//            ['home','store'],
//            'genre', 'App\Http\ViewComposers\GenreComposer'
//        );

        // Using Closure based composers...
//        View::composer('dashboard', function ($view) {
//            //
//        });
//        View::composer(
//            ['store', 'cart','manager'],
//            'App\Http\ViewComposers\GenreComposer'
//        );
        
        view()->composer('*', function ($view)
        {
            $genre = "dsds";

            $view->with('genre', $genre);
        });
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
