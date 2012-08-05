<?php
require_once('Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';

include "Chat.php";
$chat = new Chat();
$speaks = $chat->select_dict();

$smarty->assign('speaks', $speaks);
$smarty->display('display.tpl');
?>
