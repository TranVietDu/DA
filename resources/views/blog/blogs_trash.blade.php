@extends('master')

@section('content')
    <div class="services">
        <div class="container-fluid">
        <h3 style="text-align: center">Quản lí Blog Đã Xóa</h3>
          <div class="row">
              @if ($blogs_trash->isEmpty())
              <div class="col-12 text-center">
                {{'Không có gì trong thùng rác!'}}<br><br><br>
                <a href="danhsach">Trở lại</a>
            </div>
                @else
                <div class="col-md-12">
                    <a href="{{ route('blog1.restore')}}" style="text-align: center; display: block; margin-bottom: 10px">Khôi phục tất cả</a>
                      <table class="table">
                         <thead>
                             <tr>
                                <th>STT</th>
                                <th>Tiêu đề Blog</th>
                                <th>Tên người viết</th>
                                <th>Nội dung</th>
                                <th>Ảnh liên quan</th>
                                <th>Hành động</th>
                             </tr>
                         </thead>
                         <tbody>
                             @php
                                 $i =1;
                             @endphp
                             @foreach($blogs_trash as $al)
                             <tr>
                                <td>
                                   {{$i++}}
                                </td>
                                 <td>{{$al->tieude}}</td>
                                 <td>{{$al->tennguoiviet}}</td>
                                 <td>
                                    {!!html_entity_decode($al->noidung)!!}
                                 </td>
                                 <td><img src="{{ asset('anh_blog/'.$al->anh) }}" style="width:90px; height: 80px;" alt=""></td>
                                 <td><a href="{{ route('blog1.untrash', $al->id) }}">Khôi phục</a></td>
                                </tr>
                             @endforeach

                         </tbody>
                     </table>
                  </div>
              @endif
          </div>
      </div>
    </div>
@endsection
