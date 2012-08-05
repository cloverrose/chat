<?php
if($_POST["words"]){
  include "Chat.php";
  $chat = new Chat();
  $nick = $_COOKIE["nick"];
  $words = $_POST["words"];
  $chat->insert($nick, $words);
}
require_once('Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';
$smarty->display('speak.tpl');
?>
