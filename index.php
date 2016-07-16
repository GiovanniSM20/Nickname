<?php
  #Comente a próxima linha para exibir os erros
  error_reporting(0);
  require_once("application/class/Pg.class.php");
  require_once("application/class/DB.class.php");
  require_once("application/functions/Includes.php");
  echo "<base href='http://localhost/Nickname/' />";
  $pg = new Pg($_GET['pg']);
  session_name(sha1("nick".$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
?>
