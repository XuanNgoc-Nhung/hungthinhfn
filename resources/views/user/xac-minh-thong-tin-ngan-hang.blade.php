@extends("user.layouts.app")
@section("title")
    <title>Xác minh thông tin ngân hàng</title>

@endsection
@section("content")
    <div id="app">
        <xac-minh-thong-tin-ngan-hang/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-xac-minh-thong-tin-ngan-hang.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
