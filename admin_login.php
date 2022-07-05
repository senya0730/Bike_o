<?php
//共通の前処理
require_once('./include/initialize.inc.php');


//テンプレート表示
$smarty->display('admin_login.tpl');


//共通の後処理
require_once('./include/finalize.inc.php');