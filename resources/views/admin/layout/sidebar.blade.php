<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link" href="/admin/home">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Home
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>

                <a class="nav-link collapsed" href="/admin/user">

                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></i></div>
                    Users
                </a>
                <a class="nav-link collapsed" href="/admin/tintuyendung">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    Tin Tuyển Dụng
                </a>
                <a class="nav-link collapsed" href="/admin/tintimviec">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></i></div>
                    Tin Tìm Việc
                </a>
                <a class="nav-link collapsed" href="/admin/blog">
                    <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></i></div>
                    Blog
                </a>
                <a class="nav-link collapsed" href="/admin/slider">
                    <div class="sb-nav-link-icon"><i class="fas fa-tv"></i></i></div>
                    Giao Diện

                </a>
                <a class="nav-link collapsed" href="/admin/lienhe">
                    <div class="sb-nav-link-icon"><i class="fas fa-id-card-alt"></i></i></div>
                    Liên Hệ
                </a>
            </div>
    </nav>
</div>
<script>
    $(function() {
        $('nav a[href^="/admin/' + location.pathname.split("/admin/")[1] + '"]').addClass('btn-primary active');
    });
</script>