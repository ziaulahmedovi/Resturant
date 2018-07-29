<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Catagory;
use App\Icon;
use App\Slider;
use App\AboutUsContent;
use App\AboutUsWorkContent;
use App\AboutUsHistoryContent;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        
        View::composer('frontEnd.include.mainMenu', function ($view){
                $icon= Icon::where('publicationStatus',1)->first();
              
                       $view->with('icon',$icon);

                    
                });
                View::composer('frontEnd.include.footerSlider', function ($view){
                $sliderImg= Slider::where('publicationStatus',1)->get();
              
                       $view->with('sliderImg',$sliderImg);

                    
                });
                View::composer('frontEnd.product.allProductMenu', function ($view){
                $menu= Catagory::all();
              
                       $view->with('menu',$menu);

                    
                });
                View::composer('frontEnd.about.about', function ($view){
                   $about = AboutUsContent::where('publicationStatus',1)->first();
        $work = AboutUsWorkContent::where('publicationStatus',1)->first();
        $history = AboutUsHistoryContent::where('publicationStatus',1)->first();

              
                       $view->with('about',$about)
                              ->with('work',$work)
                               ->with('history',$history);

                    
                });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
