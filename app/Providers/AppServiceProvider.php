<?php

namespace App\Providers;

use App\Models\TinTuyenDung;
use App\Models\TinTimViec;
use App\Models\Blog;
use App\Models\YKienNguoiDung;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $all=TinTuyenDung::all();
        view()->share('all',$all);
        $sliders = DB::table('Slider')->where('trangthai', '1')->get();
        view()->share('sliders',$sliders);
    }
}

