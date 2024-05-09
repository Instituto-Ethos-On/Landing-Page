<?php

namespace App\Providers;

use App\Models\whatsAppLink_model;
use App\Models\Review_model;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $whatsapp = whatsAppLink_model::find(1);
        view::share('whatsapp_num', $whatsapp->link);

        $reviews = Review_model::latest()->get();
            

        // $reviews = Review_model::latest()->paginate(2, ['*'], 'review');


        view::share('reviews', $reviews);
    }
}
