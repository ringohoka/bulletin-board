<form action="exboard" method="">
    @csrf
    <div>
        <input class="" type="textarea" id="text" value="">
        @error("text")
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <button type="submit" >送信</button>
    </div>
</form>
