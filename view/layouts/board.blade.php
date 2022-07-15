<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
</head>

<body>
    <div class="flex flex-col md:flex-row items-center gap-4 lg:gap-6">

        <header>

            <div class="flex flex-col gap-1">
                <div id="subject-wrap">
                    <nav id="category-navi">
                        <table>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="ITdev" value="1">
                                    <label for="ITdev">IT開発</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="Cisco" value="2">
                                    <label for="Cisco">Cisco</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="concept" value="3">
                                    <label for="concept">コンセプトワーク</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="unix" value="4">
                                    <label for="unix">UNIX演習</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="Web" value="5">
                                    <label for="Web">Web演習</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="language" value="6">
                                    <label for="language">外国語</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="db" value="7">
                                    <label for="db">データベース</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="serversite" value="8">
                                    <label for="serversite">サーバーサイト</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <input type=radio name=subject id="systemdesign" value="9">
                                    <label for="systemdesign">システム設計</label>
                                </th>
                            </tr>
                        </table>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <h1>Q & A.com</h1>
                <h2>@yield('title')</h2>
            </div>

        </header>
        <main>
            <div class="flex flex-col gap-2">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/board.js') }}"></script>
    <script src="{{ mix('js/common.js') }}"></script>
</body>

</html>
