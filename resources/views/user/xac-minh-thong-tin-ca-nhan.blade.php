@extends("user.layouts.app")
@section("title")
    <title>Xác minh thông tin cá nhân</title>

@endsection
@section("content")
    <div id="app">
        <xac-minh-thong-tin-ca-nhan/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-xac-minh-thong-tin-ca-nhan.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
