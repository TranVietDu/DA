@extends('master')

@section('content')
<div class="services">
    <div class="container">
<div class="container blog">
        <div class="row">
            <div class="col-md-3 blog-left">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYwaHkoaoaMS7ad0XpbNO3kHqfJrvGHDi_hjPzArheo_uYS8MmOLw-jRIWKN8AodRitds&usqp=CAU" alt="" style="width: 100px;"/>
                <h3>Đăng Blog mới</h3>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <a href="/blog/danhsach" style="color:rgb(8, 8, 8); border-radius: 20px; padding:15px; background-color: rgb(222, 226, 164)">Quản Lí Blog</a>
            </div>
            <div class="col-md-9 blog-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="blog-heading">Tâm sự cùng mọi người</h3>

                        <form action="{{ route('blog1.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row blog-form">
                                <div class="col-12">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tiêu đề *" value="" name="tieude"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tên người viết *" value="" name="tennguoiviet"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" placeholder="" value="" name="anh"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="" value="{{ Auth::user()->id}}" name="user_id"/>
                                    </div>
                                    <div class="form-group">
                                            <label for="" style="text-align: left">Nội dung:</label>
                                            <textarea name="noidung" id="editor">
                                            </textarea>
                                        <input type="submit" class="btnblog"  value="Đăng"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
