<?php
session_start();
if (empty($_SESSION["lang"])){
  $_SESSION["lang"] = 'fr';
}
register_shutdown_function ( 'ob_end_flush' );
include ('controller.php');
if (!empty($_GET["lang"])){
  $_SESSION["lang"] = $_GET["lang"];
}
$controller = new Controller();
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';
switch ($page){
  case 'navigation': $controller->navigation();
  break;
  case 'contact': $controller->contact();
  break;
  default: $controller->home();
}
var_dump($_SESSION);


?>
