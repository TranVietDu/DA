@extends('master')

@section('content')
<div class="page-heading about-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12 blog4">
                <div class="text-content">
                    <h4>Gửi CV Ứng Tuyển </h4>
                        <form class="text-center" action="{{route('mail.sendmail',[$vieclam->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$username->email}}" name="email" id=""><br>
                            <input type="file" name="file" id="">
                            <button class="btn btn-primary" type="submit">Ứng tuyển ngay</button>
                        </form>
                    @if (session('thongbao'))
                    <div class="alert">
                        <p style="color: green;">{{session('thongbao')}}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
