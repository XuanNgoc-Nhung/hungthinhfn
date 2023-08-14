@extends("user.layouts.app")
@section("title")
    <title>Xác nhận khoản vay</title>

@endsection
@section("content")
    <div id="app">

        <div style="padding-bottom: 80px;">

            <xac-nhan-khoan-vay></xac-nhan-khoan-vay><!---->
            @include('user.layouts.chan-trang')

        </div>
    </div>
@endsection
@section("js_location")
        <script src="{{asset('js/user-xac-nhan-khoan-vay.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
