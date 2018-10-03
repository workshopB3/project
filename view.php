<?php
include('plugins/smarty/libs/Smarty.class.php');
class View{
  private $smarty;
  public function __construct(){
    $this->smarty = new Smarty();
    $this->smarty->display('html/header.html');
  }
  public function displayOnePage(){
    $this->display('onepage/onepage');
  }
  public function displayNavigation(){
    $this->display('navigation');
  }
  public function displayContact(){
    $this->display('contact');
  }
  private function display($html){
    $this->smarty->display('html/'.$html.'.html');
    $this->smarty->display('html/footer.html');
  }
}

 ?>
