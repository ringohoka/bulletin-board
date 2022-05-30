<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
</head>
<body>
    <header>
        <div id="subject-wrap">
            <nav id="category-navi">
                <ul>
                    <li><a href="">IT開発</a></li>
                    <li><a href="">Cisco</a></li>
                    <li><a href="">コンセプトワーク</a></li>
                    <li><a href="">UNIX演習</a></li>
                    <li><a href="">Web演習</a></li>
                    <li><a href="">外国語</a></li>
                    <li><a href="">データベース</a></li>
                    <li><a href="">サーバーサイド</a></li>
                    <li><a href="">システム設計</a></li>
                </ul>
        <h1>Q & A</h1>
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