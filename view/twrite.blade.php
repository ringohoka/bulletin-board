@extends("layouts.board")
@section("pagetitle","Q & A.com teain")
@section("title","")
@section("content")
<form action="/texboard" method="POST">
    @csrf
    <div>
        <textarea id="" name="contents"></textarea>
        @error("contents")
            <p>{{$message}}</p>
        @enderror

        <input class="" name="understand" type="text" id="level" value="">
        @error("understand")
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <button>送信</button>
    </div>

</form>
@endsection
