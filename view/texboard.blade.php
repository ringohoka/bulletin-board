@extends('layouts.board')
@section('pagetitle', 'Q & A.com express')
@section('title', 'Q&A一覧')
@section('content')
    <section>
        <a href='/texboard/create'
            class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">新規作成</a>

        <table>
            @foreach ($teamessages as $t)
                <div class="flex flex-col md:flex-row items-center gap-4 lg:gap-6">

                    <tr>
                        <td>
                            <div>{{ $t['stumessage_id'] }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700">
                            <div class="text-gray-800 text-xl font-bold">{{ $t['contents'] }}</div>
                            <span class="text-gray-400 text-sm">{{ $t['created_at'] }}</span>

                        </td>
                        {{-- <td>
                    @isset($s['teamessages']['contents'])
                        <div>{{ $s['teamessages']['contents'] }}</div>
                    @endisset
                </td> --}}

                    </tr>
            @endforeach
        </table>
        {{ $teamessages->links() }}

    </section>
@endsection
