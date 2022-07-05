<?php
//初期処理
include('./include/admin_initialize.inc.php');


//主処理
//スマーティで表示
$smarty->display('index.tpl');



//後処理
include('./include/finalize.inc.php');