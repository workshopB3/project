<?php
ob_start();
session_start();
include ('controller.php');
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';

$controller = new Controller();
switch ($page){
  case 'navigation': $controller->navigation();
  break;
  default: $controller->home();
}

?>