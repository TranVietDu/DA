 <!-- Header -->
 <header class="">

   <nav class="navbar navbar-expand-lg">
     <div class="container">
       <a class="navbar-brand" href="index.html">
         <h2>PT<em>JOBS</em></h2>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="/">Trang Chủ
               <span class="sr-only">(current)</span>
             </a>
           </li>

           <li class="nav-item"><a class="nav-link" href="/vieclam">Việc Làm</a></li>
              @if(Auth::user()->role==3)
           <li class="nav-item"><a class="nav-link" href="/tao-cv">Tìm Việc</a></li>
              @endif
              @if(Auth::user()->role==2)
          <li class="nav-item"><a class="nav-link" href="/tao-cv">Tuyển Dụng</a></li>
              @endif
           <li class="nav-item"><a class="nav-link" href="/blogs">Blog</a></li>
          
           <li class="nav-item"><a class="nav-link" href="/lienhe">Liên Hệ</a></li>

           <li class="nav-item">
             <div class="input-group">
               <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Tìm Kiếm..." id="example-search-input">
               <span class="input-group-append">
                 <button class="btn btn-outline-secondary bg-black border-start-0 border rounded-pill ms-n3" type="button">
                   <i class="fa fa-search"></i>
                 </button>
               </span>
             </div>

           </li>
           @if(Auth::check())
           <li>
             <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-user"><?= $username->name ?></i>
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 @if(Auth::user()->role==1)
                  <a class="dropdown-item" href="/admin/home">Admin</a>
                  @endif
                 <a class="dropdown-item" href="#">Setting</a>
                 <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
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
   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});
</script>

 </header>