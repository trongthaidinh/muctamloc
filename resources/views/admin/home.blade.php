@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-lg-3 col-6">
            <a href="/admin/user/list   " class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Tổng Người Dùng</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="/admin/products/list" class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalProducts }}</h3>
                    <p>Tổng Sản Phẩm</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="/admin/categorys/list" class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalCategories }}</h3>
                    <p>Tổng Danh Mục</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="/admin/cart" class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalOrders }}</h3>
                    <p>Tổng Đơn Hàng</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-3 col-6">
            <a href="/admin/banners/add" class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalBanners }}</h3>
                    <p>Tổng Banner</p>
                </div>
                <div class="icon">
                    <i class="fas fa-bullseye"></i>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-6">
            <a href="/admin" class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $totalCustomers }}</h3>
                    <p>Tổng Khách Hàng</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="/admin/news/list" class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalNews }}</h3>
                    <p>Tổng Tin Tức</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="/admin/messages/list" class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalFeedback }}</h3>
                    <p>Tổng Phản Hồi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection