<?php
//共通の前処理
// require_once('./include/initialize.inc.php');


echo "ログイン情報入力しました。";
//var_dump($_POST);

//確認
$user = $_POST['user'];
$password = $_POST['password'];
//var_dump($user);
//var_dump($password);


//ハッシュします
$h = $password;
for( $i = 0 ; $i < 1000 ; $i ++ ){
     $h = hash('sha1' , $user . $h);
}
var_dump($h);
exit;


//入力されたユーザーとパスワードが正しかったら
//（仮のロジック）
if ($_POST['user'] == 'hoge'
     && $_POST['password'] == 'hogehoge'){
     //トップページに遷移する
     header('Location: http://133.242.133.66/erinashanti/newsfeed/index.html' );
     exit;
}else {
     //ログインページに遷移する
     header('Location: http://133.242.133.66/erinashanti/newsfeed/admin_login.php' );
     exit;
}


//共通の後処理
// require_once('./include/finalize.inc.php');