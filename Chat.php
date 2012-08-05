<?php
class Chat{
  private $link;
  private $name = 'chat';

  public function __construct(){
    include "db_info.php";
    $this->link = mysql_connect($host, $username, $password);
    mysql_select_db($dbname, $this->link);
  }

  public function __destruct(){
    mysql_close($this->link);
  }

  public function select_dict(){
    $sql = "SELECT * FROM chat;";
    $result = mysql_query($sql, $this->link);
    $rows = mysql_num_rows($result);
    $speaks = array();
    for($i=1;$i<=$rows; $i++) {
      list($n, $w) = mysql_fetch_row($result);
      $speaks[] = array('nick' => $n, 'words' => $w);
    }
    return $speaks;
  }
  
  public function insert($nick, $words){
    $sql = "INSERT INTO chat(nick, words) values ('$nick', '$words');";
    mysql_query($sql, $this->link);
  }
}
?>