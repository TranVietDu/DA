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
        $blogs = Blog::where('user_id',Auth::user()->id)->paginate(10);
        return View::make('blog.danhsach', compact('blogs'));
    }

    public function blog()
    {
        $data['blogs'] = BLog::simplePaginate(10);
        return View::make('blog.blogs', compact($data));
    }

    public function chitietblog($id)
    {
        $data['blog'] = BLog::find($id);
        $data['comments'] = BinhLuan::where('blog_id', $id)->get();
        $blog_view = BLog::find($id);
        $blog_view->luotxem = $blog_view->luotxem + 1;
        $blog_view->save();
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
        $tintuyendung = BLog::find($id);
        if ($tintuyendung->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            $data = $request->validated();
            $get_image = $request->file('anh');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('anh_blog', $new_image);
                $data['anh'] = $new_image;
                Blog::find($id)->update($data);
                return redirect()->route('blog1.list');
            } else {
                Blog::find($id)->update($data);

                return redirect()->route('blog1.list');
            }
        } else {
            return view('404');
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
        if(Blog::where('user_id', Auth::user()->id)){
            $ids = $request->ids;
            Blog::whereIn('id', $ids)->delete();
            return redirect()->route('blog1.list');
        }else{
            return view('404');
        }
    }
    //thung rac
    public function blog_trash()
    {
        $blogs_trash = Blog::onlyTrashed()->where('user_id',Auth::user()->id)->paginate(10);
        return View::make('blog.blogs_trash', compact('blogs_trash'));
    }
    //khoi phuc
    public function blog_untrash($id)
    {
        $blog = Blog::onlyTrashed()->where('user_id',Auth::user()->id)->find($id);
        $blog->restore();
        return redirect()->route('blog1.list')->with('ms', 'Khôi phục thành công');
    }
    //khoi phuc tin da xoa
    public function restore()
    {
        Blog::onlyTrashed()->where('user_id',Auth::user()->id)->restore();
        return redirect()->route('blog1.list')->with('ms', 'Khôi phục thành công');
    }
    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_blog = DB::table('blogs')->where('tennguoiviet', 'like', '%' . $keywords . '%')->orWhere('tieude', 'like', '%' . $keywords . '%')->get();

        return view('tim-kiem-blog',)->with('search_blog', $search_blog);
    }
    public function search_ajax(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $blogs=Blog::where('tieude','like','%'.$request->search.'%')
                        ->orwhere('tennguoiviet',$request->search)->get();
            foreach ($blogs as  $al) {
                                $i=1;
                                $output .= '<tr>
                                <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$al->id}}"></td>
                                <td>'.$al->id.'</td>
                                <td>'.$al->tieude.'</td>
                                <td>'.$al->tennguoiviet.'</td>
                                <td>'.$al->noidung.'</td>
                                <td><img src="{{ asset(anh_blog/'.$al->anh.') }}" style="width:90px; height: 80px;" alt=""></td>
                                <td>'.'
                                        <form action="/blog/xoa-blog/'.$al->id.'" method="post">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                   '.'</td>
                                   <td>'.'<a href="/blog/cap-nhat-blog/'.$al->id.'"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>'.'</td>
                                </tr>';
                            }
                        }
                        return Response($output);
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
