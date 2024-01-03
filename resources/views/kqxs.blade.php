@extends("layouts.kqxs.app")
@section("title")
    <title>Cấu hình lô 1 phút</title>
    <title>KU XỔ SỐ</title>
@endsection
@section("content")
    <div id="app">
    <user-game-lo-mot-phut></user-game-lo-mot-phut>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-ket-qua-lo-mot-phut.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
