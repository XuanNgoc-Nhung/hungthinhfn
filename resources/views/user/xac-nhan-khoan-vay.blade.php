@extends("user.layouts.app")
@section("title")
    <title>Xác nhận khoản vay</title>

@endsection
@section("content")
    <div id="app">
        <xac-nhan-khoan-vay></xac-nhan-khoan-vay>
    </div>
@endsection
@section("js_location")
        <script src="{{asset('js/user-xac-nhan-khoan-vay.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
