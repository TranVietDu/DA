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
        $sliders = DB::table('Slider')->where('trangthai', '1')->get();
        view()->share('sliders',$sliders);

        $vieclams=TinTuyenDung::all();
        view()->share('vieclams',$vieclams);

        $timviecs=TinTimViec::all();
        view()->share('timviecs',$timviecs);

        $blogs=Blog::all();
        view()->share('blogs',$blogs);

        $ykiens = YKienNguoiDung::all();
        view()->share('ykiens',$ykiens);
    }
}

