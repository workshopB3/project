<?php
include('plugins/smarty/libs/Smarty.class.php');
class View{
  private $smarty;
  public function __construct(){
    $this->smarty = new Smarty();
    $xml = new SimpleXMLElement('assets/lang/'.$_SESSION["lang"].'.xml', null, true);
    $this->smarty->assign('xml', $xml);
    $this->smarty->display('html/header.html');
  }
  public function displayOnePage(){
    $this->display('onepage/onepage');
  }
  public function displayNavigation($img){
    $this->smarty->assign('img', $img);
    $this->smarty->assign('encoded_img', json_encode($img));
    $this->display('navigation');
  }
  public function displayNavigationChoice($img){
    $this->smarty->assign('img', $img);
    $this->smarty->assign('encoded_img', json_encode($img));
    $this->display('navigation_choice');
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
