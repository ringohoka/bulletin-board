@extends('layouts.board')
@section('pagetitle', 'Q & A.com express')
@section('title', 'Q&A一覧')
@section('content')
    <section>
        {{-- @foreach ($subjects as $s) --}}
        {{-- <h3 id="subtitle">{{ $s['subject'] }}</h3> --}}
        {{-- @endforeach --}}
        <a href='/exboard/create/'
            class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">新規作成</a>
        {{-- <div class="w-full sm:w-2/3 lg:w-1/2 flex items-center p-4 sm:p-8 lg:pl-10">
            <div class="w-full flex xl:block flex-col items-center"> --}}
        <div class="flex-1 flex bg-white-700 px-6 items-center justify-between">

            <table class="table-auto">

                @foreach ($stumessages as $s)
                    {{-- @if ($data == $s['subject_id']) --}}
                    {{-- <div class="grid sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 md:gap-6 xl:gap-8">

                    <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden"> --}}
                    {{-- <div class="flex flex-col md:flex-row items-center gap-4 lg:gap-6"> --}}
                    <div>

                        {{-- @if ($s['sub_no'] = sbtn) --}}
                        <tr>
                            <td>
                                <div>番号：{{ $s['id'] }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-separte border border-slate-700">
                                <label>内容：</label>
                                <div class="text-gray-800 text-xl font-bold">{{ $s['contents'] }}</div>
                                <div class="flex-auto flex-col gap-2 p-4 lg:p-6">
                                    <span class="text-gray-400 text-sm">{{ $s['created_at'] }}</span>

                            </td>
                            <td class="border border-slate-600">
                                @isset($s['teamessages']['contents'])
                                    <label> 返信：</label>
                                    <div class="text-gray-800 text-xl font-bold">
                                        {{ $s['teamessages']['contents'] }}
                                    </div>
                                    <div class="flex-auto flex-col gap-2 p-4 lg:p-6">
                                        <span class="text-gray-400 text-sm">{{ $s['teamessages']['created_at'] }}</span>
                                    @endisset
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-slate-600">
                                @isset($s['understand'])
                                    <label>理解度:</label>
                                    <div>{{ $s['understand'] }}</div>
                                @endisset
                            </td>

                        </tr>
                        {{-- @endif --}}
                @endforeach
            </table>
            {{ $stumessages->links() }}

    </section>
@endsection
