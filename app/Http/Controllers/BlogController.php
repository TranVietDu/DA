<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaoBlogRequest;
use App\Http\Requests\CapNhatBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
     //select all
     public function index()
     {
        $username=Auth::user();
         $blogs = DB::table('Blog')->where('user_id','=', $username->id)->get();
         return View::make('blog.danhsach', compact('blogs'));
     }
     public function blog()
     {
         $blogs = Blog::all();
         return View::make('blog.blogs', compact('blogs'));
     }
     public function blog1()
     {
         $blogs = Blog::all();
         return View::make('index', compact('blogs'));
     }
     public function chitietblog($id)
    {
        $blog = BLog::find($id);
        return View::make('blog.chi-tiet-blog', compact('blog'));
    }
     //form luu
     public function create()
     {
         return view('blog.them');
     }
     // Luu
     public function store(TaoBlogRequest $request)
     {
         $data = $request->validated();
         if(Blog::create($data)){
             return redirect('/blog/danhsach');
         }else{
             return back()->withInput();
         }
     }

     //form cap nhat
     public function edit($id)
     {
         $Blog = Blog::find($id);
         return View::make('blog.capnhat', compact('blog', 'id'));
     }
     //cap nhat
     public function update(CapNhatBlogRequest $request, $id)
     {
         Blog::find($id)->update($request->validated());
         return redirect()->route('blog.list');
     }

     //xoa
     public function destroy($id)
     {
         Blog::find($id)->delete();
         return redirect()->route('blog.list');
     }
     //xoa nhieu
     public function destroyall(Request $request)
     {
         $ids = $request->ids;
         Blog::whereIn('id', $ids)->delete();
         return redirect()->route('blog.list');
     }

      //khoi phuc tin da xoa
      public function restore()
      {
         Blog::onlyTrashed()->restore();
          return redirect()->route('blog.list');
      }
}
