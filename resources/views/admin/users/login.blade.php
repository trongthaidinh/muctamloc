@extends('layouts.default')

@section('content')
<div class="login-container">
    <div class="logo">
        <img src="{{ asset('logo.jpg') }}" alt="Logo" />
    </div>
    <form method="POST" action="/admin/users/login/store">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autofocus class="form-control" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required class="form-control" placeholder="Nhập mật khẩu">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
@endsection