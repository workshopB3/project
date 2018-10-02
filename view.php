<?php
include('plugins/smarty/libs/Smarty.class.php');
class View{
  private $smarty;
  public function __construct(){
    $this->smarty = new Smarty();
    $this->display('header');
  }
  public function displayHome(){
    $this->display('home');
  }
  public function displayNavigation($img){
    $img_url = $img['url'];
    $this->display('navigation', $img_url);
  }
  private function display($html){
    $this->smarty->display('html/'.$html.'.html');
    $this->smarty->display('html/footer.html');
  }
}

 ?>
