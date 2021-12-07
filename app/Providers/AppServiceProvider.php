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
        $sliders = DB::table('Slider')->orderBy('id','desc')->where('trangthai', '1')->get();
        view()->share('sliders',$sliders);
        $blogs=Blog::paginate(5);
        view()->share('blogs',$blogs);
        // ý Kiến
        $ykiens = YKienNguoiDung::all();
        view()->share('ykiens',$ykiens);
        // Tin Tim Việc Mới Nhất
        $tintimviecmoinhat=DB::table('tintimviecs')->orderBy('id','desc')->take(3)->get();
        view()->share('tintimviecmoinhat',$tintimviecmoinhat);
        // Tin tuyen Dung moi nhat
        $tintuyendungmoinhat=DB::table('tintuyendungs')->orderBy('id','desc')->take(3)->get();
        view()->share('tintuyendungmoinhat', $tintuyendungmoinhat);
        // Blog mới nhất trang blog
        $blogmoinhat=DB::table('blogs')->orderBy('id','desc')->take(3);
        view()->share('blogmoinhat',$blogmoinhat);
        //Blog xem nhieu trang blog
        $blogxemnhieu = Blog::orderBy('luotxem', 'DESC')->take(5)->get();
        view()->share('blogxemnhieu', $blogxemnhieu);
        //blognoibat trang index
        $blognoibat = Blog::orderBy('luotxem', 'DESC')->take(1)->get();
        view()->share('blognoibat', $blognoibat);
        //blognoibat trang chi tiet
        $blogkhac = Blog::orderBy('id', 'DESC')->take(5)->get();
        view()->share('blogkhac', $blogkhac);


        Paginator::useBootstrap();
        $now= Carbon::now('Asia/Ho_Chi_Minh');
        view()->share('now',$now);
    }
}

