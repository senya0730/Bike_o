<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン画面</title>
<style>
#container {
     margin:50px auto;
     width:500px;
     border:1px solid #666;
     border-radius:20px;
     background:#ffc;
}
#wrapper {
     padding: 20px;
}
</style>
</head>
<body>
<h1>ログイン画面</h1>
<p><a href="https://www.8190.jp/">TOPへ戻る</a></p>
<div id="container">
<div id="wrapper">
<form action="main.html" method="POST">
<p>ユーザー名：<input type="text" name="user" value=""></p>
<p>パスワード：<input type="password" name="password" value=""></p>
<input type="submit" value="ログイン">
</form>
</div>
</div>
</body>
</html>