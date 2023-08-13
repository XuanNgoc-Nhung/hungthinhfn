@extends("admin.layout.app")
@section("title")
    <title>Admin - Quản lý yêu cầu rút tiền</title>
@endsection
@section("content")
    <div>
        <div id="app">
            <yeu-cau-rut-tien/>
        </div>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/admin-yeu-cau-rut-tien.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
