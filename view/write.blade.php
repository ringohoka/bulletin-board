@extends("layouts.board")
@section("pagetitle","Q & A.com insert")
@section("title","")
@section("content")
<form action="/exboard" method="POST">
    @csrf
    <div>
        <textarea id=""  name="contents"></textarea>
        @error("contents")
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <button>送信</button>
    </div>
</form>
@endsection
