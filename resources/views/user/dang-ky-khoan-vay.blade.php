@extends("user.layouts.app")
@section("title")
    <title>Đăng ký</title>
@endsection
@section("content")
    <div id="app">
        <dang-ky-khoan-vay></dang-ky-khoan-vay>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-dang-ky-khoan-vay.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
