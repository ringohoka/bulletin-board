@extends("layouts.board")
@section("pagetitle","Q & A.com express")
@section("title","")
@section("content")
<section>
    <h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">Q&A一覧</h3>
    @foreach ( $teamessages as $t)
    <div>{{$t['contents']}}</div>
    @endforeach
    <a href='/texboard/create'>新規作成</a>
</section>
@endsection
