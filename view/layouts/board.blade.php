<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>@yield('pageTitle')</title>
</head>

<body>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-xl px-4 md:px-8 mx-auto">

            {{-- <div class="wrapper w-screen h-screen bg-gray-100"> --}}
            <header>

                <div class="mb-10 md:mb-16">

                    <h1 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Q & A.com</h1>
                    <h2 class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">@yield('title')</h2>

                </div>

            </header>
            <main>
                <div class="flex">

                    {{-- <div class="flex flex-col gap-1"> --}}
                    <div class="flex-none">
                        <div id="subject-wrap" class="sticky w-3/4 min-w-max " style="position:sticky; top:100px;">
                            <nav id="category-navi" {{-- class="absolute top-0 left-0 w-1/6 min-w-full p-5 border border-solid ease-in"> --}}
                                class="flex-1 flex bg-white-700 px-6 items-center justify-between">
                                {{-- <ul>
                                    <li><a href="http://127.0.0.1:8000/1/">IT開発</a></li>
                                    <li><a href="http://127.0.0.1:8000/2/">Cisco</a></li>
                                    <li><a href="http://127.0.0.1:8000/3/">コンセプトワーク</a></li>
                                    <li><a href="http://127.0.0.1:8000/4/">UNIX演習</a></li>
                                    <li><a href="http://127.0.0.1:8000/5/">Web演習</a></li>
                                    <li><a href="http://127.0.0.1:8000/6/">外国語</a></li>
                                    <li><a href="http://127.0.0.1:8000/7/">データベース</a></li>
                                    <li><a href="http://127.0.0.1:8000/8/">サーバーサイト</a></li>
                                    <li><a href="http://127.0.0.1:8000/9/">システム設計</a></li>
                                </ul> --}}
                                <form name="subjectForm">
                                    <table class="text-ms p-4">
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="ITdev" value="1">
                                                {{-- onchange="sbtn(this.value)" checked> --}}
                                                <label for="ITdev">IT開発</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="Cisco" value="2"
                                                    {{-- onchange="sbtn(this.value)" --}}>
                                                <label for="Cisco">Cisco</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="concept" value="3">
                                                {{-- onchange="sbtn(this.value)"> --}}
                                                <label for="concept">コンセプトワーク</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="unix" value="4"
                                                    {{-- onchange="sbtn(this.value)"> --}}>
                                                <label for="unix">UNIX演習</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="Web" value="5">
                                                {{-- onchange="sbtn(this.value)"> --}}
                                                <label for="Web">Web演習</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="language" value="6">
                                                {{-- onchange="sbtn(this.value)"> --}}
                                                <label for="language">外国語</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="db" value="7">
                                                {{-- onchange="sbtn(this.value)"> --}}
                                                <label for="db">データベース</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="serversite" value="8">
                                                {{-- onchange="sbtn(this.value)"> --}}
                                                <label for="serversite">サーバーサイト</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type=radio name=subject id="systemdesign"
                                                    value="9">{{-- onchange="sbtn(this.value)"> --}}
                                                <label for="systemdesign">システム設計</label>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="flex-auto"> --}}

                    {{-- <div class="flex flex-col gap-2"> --}}
                    <div class="flex items-center" style="width:70%;">
                        <div class="relative mx-auto my-0">
                            @yield('content')
                        </div>

            </main>
        </div>
    </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- <script src="{{ mix('js/common.js') }}"></script> --}}
    <script src="{{ mix('js/board.js') }}"></script>
</body>

</html>
