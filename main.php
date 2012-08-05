<?
setcookie("nick", $_POST["nick"])
?>
<html>
  <head>
    <title>My Chat Room</title>
  </head>
  <frameset rows="80%,*">
    <frame src="display.php" name="chatdisplay">
    <frame src="speak.php" name="speak">
  </frameset>
</html> 