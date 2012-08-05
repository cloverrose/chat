<?php
require_once('Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';

include "db_info.php";
$link = mysql_connect($host, $username, $password);
mysql_select_db($dbname, $link);
$sql = "SELECT * FROM chat;";
$result = mysql_query($sql, $link);
$rows = mysql_num_rows($result);
$speaks = array();
for ($i=1;$i<=$rows; $i++) {
  list($n, $w) = mysql_fetch_row($result);
  $speaks[] = array('nick' => $n, 'words' => $w);
}
mysql_close($link);
$smarty->assign('speaks', $speaks);
$smarty->display('display.tpl');
?>
