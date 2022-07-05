<?php
//初期処理
include('./include/initialize.inc.php');


//主処理
//セッションを削除して
$_SESSION['login'] = array();
unset($_SESSION['login']);

//ログインページに戻る
header('Location: admin_login.tlp');
exit;


//後処理
include('./include/finalize.inc.php');