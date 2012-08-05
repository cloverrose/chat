<html>
  <head>
    <title>Display Messages</title>
    <meta http-equiv="refresh" content="1;url=display.php">
  </head>
  <body>
    <?
    include "db_info.php";
    $link = mysql_connect($host, $username, $password);
    mysql_select_db($dbname, $link);
    $sql = "SELECT * FROM chat;";
    $result = mysql_query($sql, $link);
    $rows = mysql_num_rows($result);
    for ($i=1;$i<=$rows; $i++) {
      list($n, $w) = mysql_fetch_row($result);
      echo $n; echo":";
      echo $w; echo "<br />";
    }
    mysql_close($link);
    ?>
  </body>
</html>
