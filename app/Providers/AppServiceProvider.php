<?php

namespace App\Providers;

use App\Models\TinTuyenDung;
use App\Models\TinTimViec;
use App\Models\Blog;
use App\Models\YKienNguoiDung;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
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
        // Trang Việc Làm
        $vieclams=TintuyenDung::paginate(9);
        view()->share('vieclams',$vieclams);
        // Trang Tìm Việc
        $timviecs=TinTimViec::paginate(6);
        view()->share('timviecs',$timviecs);
        // Trang Blog
        $blogs=Blog::paginate(8);
        view()->share('blogs',$blogs);
        // Blog nổi Bật
        $blognoibat=DB::table('blogs')->orderBy('created_at','desc')->take(1)->get();
        view()->share('blognoibat',$blognoibat);
        // ý Kiến
        $ykiens = YKienNguoiDung::all();
        view()->share('ykiens',$ykiens);

        // Tin Tim Việc Mới Nhất
        $tintimviecmoinhat=DB::table('tintimviecs')->orderBy('id','desc')->take(3)->get();
        view()->share('tintimviecmoinhat',$tintimviecmoinhat);

        // Tin tuyen Dung moi nhat
        $tintuyendungmoinhat=DB::table('tintuyendungs')->orderBy('id','desc')->take(3)->get();
        view()->share('tintuyendungmoinhat', $tintuyendungmoinhat);
        // Blog mới nhất
        $blogmoinhat=DB::table('blogs')->orderBy('id','desc')->take(3);
        view()->share('blogmoinhat',$blogmoinhat);
        // Blog nổi Bật
        Paginator::useBootstrap();
        $now= Carbon::now('Asia/Ho_Chi_Minh');
        view()->share('now',$now);
    }
}

