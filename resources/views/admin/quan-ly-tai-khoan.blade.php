@extends("admin.layout.app")
@section("title")
    <title>Admin - Quản lý tài khoản</title>
@endsection
@section("content")
    <div>
        <div id="app">
            <quan-ly-tai-khoan/>
        </div>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/admin-quan-ly-tai-khoan.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
