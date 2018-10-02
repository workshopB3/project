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
  public function displayNavigation(){
    $img_url = !empty($_GET["img_url"]) ? $_GET["img_url"] : "test";
    $this->smarty->assign('img_url', $img_url);
    $this->display('navigation');
  }
  private function display($html){
    $this->smarty->display('html/'.$html.'.html');
    $this->smarty->display('html/footer.html');
  }
}

 ?>
