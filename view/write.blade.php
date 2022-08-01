@extends('layouts.board')
@section('pagetitle', 'Q & A.com insert')
@section('title', 'Q&A Question')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <form action="/exboard" method="POST" class="max-w-screen-md sm:grid-cols-2 gap-4 mx-auto">
                @csrf
                <div>
                    <textarea id="" name="contents"
                        class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"
                        rows="10" cols="100"></textarea>
                    @error('contents')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button>送信</button>
                </div>
            </form>
        @endsection
