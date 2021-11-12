 <!-- Header -->
 <header class="">

   <nav class="navbar navbar-expand-lg">
     <div class="container">
       <a class="navbar-brand" href="/">
         <h2>PT<em>JOBS</em></h2>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">

           <li class="nav-item"><a class="nav-link" href="/vieclam">Việc Làm</a></li>
           <li class="nav-item"><a class="nav-link" href="/hoso">Hồ Sơ</a></li>
           <li class="nav-item"><a class="nav-link" href="/tao-cv">Tạo CV</a></li>
           <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>

           <li class="nav-item"><a class="nav-link" href="/lienhe">Liên Hệ</a></li>
           <li class="nav-item">
             <form action="/tim-kiem" method="get" autocomplete="off">
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Tìm Kiếm..." id="keywords" name="keywords_submit">
                      <button class="btn btn-outline-secondary bg-black border-start-0 border rounded-pill ms-n3" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                  </div>
             </form>
           </li>
           @if(Auth::check())
           <li>
             <div class="dropdown">
               <button class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-user"></i>
               </button>
               <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                <b>{{Auth::user()->name}}</b>
                <a class="dropdown-item" href="{{ route('capnhatthongtin', Auth::user()->id ) }}">QL Tài khoản</a>
                <hr>
                 @if(Auth::user()->role==1)
                  <a class="dropdown-item" href="/admin/home">Admin</a>
                  @endif
                 @if (Auth::user()->role==2)
                 <a class="dropdown-item" href="{{route('tintuyendung1.list')}}">QL Việc Làm</a>
                 <a class="dropdown-item" href="{{route('blog1.list')}}">QL Blog</a>
                 @elseif (Auth::user()->role==3)
                 <a class="dropdown-item" href="{{route('tintimviec1.list')}}">QL Hồ Sơ</a>
                 <a class="dropdown-item" href="{{route('blog1.list')}}">QL Blog</a>
                 @endif
                 <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
               </div>
             </div>
           </li>
           @else
           <li class="nav-item">
             <a href="{{route('relogin')}}" type="button" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign in</a>
           </li>
           @endif
         </ul>
       </div>
     </div>
   </nav>
<script>
    $(function() {
   $('nav a[href^="/' + location.pathname.split("")[1] + '"]').addClass('active');
});
</script>

 </header>
