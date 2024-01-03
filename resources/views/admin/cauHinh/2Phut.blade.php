@extends("admin.layout.app")
@section("title")
    <title>Cấu hình lô 1 phút</title>
@endsection
@section("content")
    <div id="app">
        <admin-cau-hinh-1-phut/>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/admin-cau-hinh-1-phut.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
