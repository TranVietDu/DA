<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaoBlogRequest;
use App\Http\Requests\CapNhatBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use App\Models\User;
use App\Models\BinhLuan;

class BlogController extends Controller
{
    //select all
    public function index()
    {
        $blogs = User::find(Auth::user()->id)->blogs;
        return View::make('blog.danhsach', compact('blogs'));
    }

    public function blog()
    {
        $blogs = BLog::simplePaginate(10);
        return View::make('blog.blogs', compact('blogs'));
    }
    public function blogganday()
    {
        $blogganday = BLog::limit(3)->get();
        return View::make('blog.blogs', compact('blogganday'));
    }
    public function chitietblog($id)
    {
        $data['blog'] = BLog::find($id);
        $data['comments'] = BinhLuan::where('blog_id', $id)->get();
        return view('blog.chi-tiet-blog', $data);
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
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('anh_blog', $new_image);
            $data['anh'] = $new_image;
            BLog::create($data);

            return redirect()->route('blog1.list');
        } else {
            return redirect()->route('blog1.create')->withInput();
        }
    }
    //form cap nhat
    public function edit($id)
    {
        $blog = Blog::find($id);
        if ($blog->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            return View::make('blog.capnhat', compact('blog', 'id'));
        }
        else{
            return view('404');
        }
    }
    //cap nhat
    public function update(CapNhatBlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        if ($blog->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            $data = $request->validated();
            $get_image = $request->file('anh');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('anh_blog', $new_image);
                $data['anh'] = $new_image;
                Blog::find($id)->update($data);
            }
        }
    }
    //xoa
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog->user_id == Auth::user()->id  || Auth::user()->role == 1) {
        Blog::find($id)->delete();
        return redirect()->route('blog1.list');
        }
        else{
            return view('404');
        }
    }
    //xoa nhieu
    public function destroyall(Request $request)
    {
        $ids = $request->ids;
        Blog::whereIn('id', $ids)->delete();
        return redirect()->route('blog1.list');
    }
    //khoi phuc tin da xoa
    public function restore()
    {
        Blog::onlyTrashed()->restore();
        return redirect()->route('blog1.list');
    }

    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_blog = DB::table('blogs')->where('tennguoiviet', 'like', '%' . $keywords . '%')->orWhere('tieude', 'like', '%' . $keywords . '%')->get();

        return view('tim-kiem-blog',)->with('search_blog', $search_blog);
    }

    public function postComment($id, Request $request)
    {
        $comment = new BinhLuan;
        $comment->blog_id = $id;
        $comment->ten = Auth::user()->name;
        $comment->noidung = $request->noidung;
        $comment->save();

        return back();
    }
}
