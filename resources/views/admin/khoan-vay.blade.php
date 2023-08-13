@extends("admin.layout.app")
@section("title")
    <title>Admin - Quản lý khoản vay</title>
@endsection
@section("content")
    <div>
        <div id="app">
            <quan-ly-khoan-vay/>
        </div>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/admin-quan-ly-khoan-vay.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
