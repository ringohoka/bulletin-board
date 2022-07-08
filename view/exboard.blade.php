@extends("layouts.board")
@section("pagetitle","Q & A.com express")
@section("title","")
@section("content")
<section>
    <h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">Q&A一覧</h3>
    <table>
        @foreach ( $stumessages as $s)
        {{-- {{var_dump($s['teamessages']);}} --}}
        <tr>
            <td>
                <div>{{$s['contents']}}</div>
            </td>
           <td>
                @isset($s['teamessages']['contents'])
                <div>{{$s['teamessages']['contents']}}</div>
                @endisset
            </td>

        </tr>
        @endforeach
    </table>
    <a href='/exboard/create'>新規作成</a>
</section>
@endsection
