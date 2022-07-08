<?php


?>
<link rel="stylesheet" href="login.css">
<h1>Q&Aログインページ</h1>
<form action="login.php" method="post">
<div>
    <label>社員番号　：<label>
    <input type="text" name="namber" required>
</div>
<div>
    <label>名前　　　：<label>
    <input type="text" name="name" required>
</div>
<div>
    <label>パスワード：<label>
    <input type="password" name="pass" required>
</div>
<input type="submit" value="ログイン">
</form>