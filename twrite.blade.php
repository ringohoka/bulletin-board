@extends("layouts.board")
@section("pagetitle","Q & A.com teain")
@section("title","")
@section("content")
<form action="exboard" method="">
    @csrf
    <div>
        <input class="" name= "mess" type="textarea" id="text" value="">
        @error("text")
            <p>{{$message}}</p>
        @enderror

        <input class="" name="level" type="text" id="level" value="">
        @error("level")
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <button type="submit" >送信</button>
    </div>

</form>
@endsection
