@extends("user.layouts.app")
@section("title")
    <title>Xác minh</title>
@endsection
@section("content")
    <div id="app">
        <xac-minh></xac-minh>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-xac-minh.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
