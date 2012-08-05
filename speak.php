<html>
  <head>
    <title>Speak</title>
  </head>
  <body>
    <?
    include "db_info.php";
    if($_POST["words"]){
      $nick = $_COOKIE["nick"];
      $words = $_POST["words"];
      $link = mysql_connect($host, $username, $password);
      mysql_select_db($dbname, $link);
      $sql = "INSERT INTO chat(nick, words) values ('$nick', '$words');";
      mysql_query($sql, $link);
      mysql_close($link);
    }
    ?>
    <form action="speak.php" method="POST" target="_self">
      <input type="text" name="words" cols="20">
      <input type="submit" value="Speak">
    </form>
  </body>
</html>