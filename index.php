<?php
  #Comente a próxima linha para exibir os erros
  error_reporting(0);
  require_once("application/class/Pg.class.php");
  require_once("application/class/DB.class.php");
  require_once("application/functions/Includes.php");
  $pg = new Pg($_GET['pg']);

?>
