@extends("user.layouts.app")
@section("title")
    <title>Ví</title>
@endsection
@section("content")
    <div id="app">
        <div style="padding-bottom: 80px;">
            <vi-tien></vi-tien>
            @include('user.layouts.chan-trang')
        </div>
    </div>
@endsection
@section("js_location")
        <script src="{{asset('js/user-vi-tien.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
