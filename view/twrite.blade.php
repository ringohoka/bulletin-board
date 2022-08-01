@extends('layouts.board')
@section('pagetitle', 'Q & A.com teain')
@section('title', 'Q&A Answer')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <form action="/texboard" method="POST" class="max-w-screen-md sm:grid-cols-2 gap-4 mx-auto">
                @csrf

                <div>

                    <div class="sm:col-span-2">
                        <label class="inline-block text-gray-800 text-sm sm:text-base mb-2">返信id</label>
                        <input
                            class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                            name="stumessage_id" type="text" id="stu_id" value="">
                        @error('stumessage_id')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="sm:col-span-2">
                        <label class="inline-block text-gray-800 text-sm sm:text-base mb-2">内容</label>
                        <textarea id="" name="contents"
                            class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                            rows="10" cols="100"></textarea>
                        @error('contents')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="sm:col-span-2">
                        <label class="inline-block text-gray-800 text-sm sm:text-base mb-2">理解度</label>
                        <input name="understand" type="text" id="level" value=""
                            class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">
                        @error('understand')
                            <p>{{ $message }}</p>
                        @enderror


                    </div>

                </div>

                <div class="sm:col-span-2 flex justify-between items-center">
                    <button
                        class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">送信</button>
                    <span class="text-gray-500 text-sm">*Required</span>

                </div>

            </form>
        @endsection
