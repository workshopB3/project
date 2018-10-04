<?php
include ('controller.php');
$page = !empty($_GET["page"]) ? $_GET["page"] : 'home';
$controller = new Controller();
switch ($page){
  case 'navigation_choice': $controller->navigation('choice');
  break;
  case 'navigation': $controller->navigation('');
  break;
  default: $controller->home();
}

?>
