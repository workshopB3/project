<?php
include('plugins/smarty/libs/Smarty.class.php');
class View{
  private $smarty;
  public function __construct(){
    $this->smarty = new Smarty();
    $this->display('header');
  }
  public function displayOnePage(){
    $this->display('onepage/onepage');
  }
  public function displayNavigation($img){
    $this->smarty->assign('img', $img);
    $this->smarty->assign('encoded_img', json_encode($img));
    $this->display('navigation');
  }
  private function display($html){
    $this->smarty->display('html/'.$html.'.html');
    $this->smarty->display('html/footer.html');
  }
}

 ?>
