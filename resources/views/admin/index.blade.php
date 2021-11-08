@extends('admin.masterlayout.masteradmin')

@section('title', 'Home')


@section('content')
<div id="layoutSidenav_content">
    <main style="padding: 25px;background-color: rgb(237, 241, 245);">
        <div style="background-color:rgb(255, 255, 255);" class="container-fluid px-4 ">
            <h1 class="mt-4">Home</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Người Dùng</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$user}}</h3>
                            <div class="small text-white"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Tin Tuyển Dụng</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$tintuyendung}}</h3>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Tin Tìm Việc</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$tintimviec}}</h3>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Blog</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$blog}}</h3>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Nhà Tuyển Dụng</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$nhatuyendung}}</h3>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Người Tìm Việc</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h3 class="small text-white stretched-link" href="#">{{$nguoitimviec}}</h3>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection