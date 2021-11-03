<?php

namespace App\Providers;

use App\Models\TinTuyenDung;
use App\Models\TinTimViec;
use App\Models\Blog;
use App\Models\YKienNguoiDung;
use Illuminate\Support\Facades\Schema; // add
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


    }
}

