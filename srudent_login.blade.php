<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ mix('css/login.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    

</html>
<div id="form">
    <h1 style="color:green">Q&Aログインページ</h1>
    <form action="login.php" method="post">
    <div>
        <label>学籍番号:<label>
        <input type="text" name="namber" required>
    </div>
    <div>
        <label>名前:<label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>パスワード：<label>
        <input type="password" name="pass" required>
    </div>
    <input type="submit" value="ログイン">
    </form>
</div>
</body>