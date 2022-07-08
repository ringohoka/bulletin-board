<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
</head>
<body>
    <header>
        <div id="subject-wrap">
            <nav id="category-navi">
                <ul>
                    <li>IT開発</li>
                    <li>Cisco</li>
                    <li>コンセプトワーク</li>
                    <li>UNIX演習</li>
                    <li>Web演習</li>
                    <li>外国語</li>
                    <li>データベース</li>
                    <li>サーバーサイト</li>
                    <li>システム設計</li>
                </ul>
            </nav>
        </div>
        <h1>Q & A.com</h1>
        <h2>@yield('title')</h2>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/board.js') }}"></script>
    <script src="{{ mix('js/common.js') }}"></script>
</body>
</html>
