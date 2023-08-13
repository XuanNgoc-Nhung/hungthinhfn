@extends("user.layouts.app")
@section("title")
    <title>Hợp đồng vay</title>
@endsection
@section("content")
    <div id="app">
        <hop-dong-vay/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-hop-dong-vay.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
