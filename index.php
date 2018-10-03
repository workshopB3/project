<?php
ob_start ( 'ob_gzhandler' );
register_shutdown_function ( 'ob_end_flush' );
include ('controller.php');
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';
$controller = new Controller();
switch ($page){
  case 'navigation': $controller->navigation();
  break;
  case 'contact': $controller->contact();
  break;
  default: $controller->home();
}


?>
