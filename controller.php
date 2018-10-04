<?php
include('view.php');
include('model.php');
class Controller {
  private $model;
  private $view;
  public function __construct(){
    $this->model = new Model();
    $this->view = new View();
  }
  public function home(){
    $this->view->displayOnePage();
  }
  public function navigation($type){
    $data_url = './assets/json/image.json';
    $data = file_get_contents($data_url);
    $json_data = stripslashes(html_entity_decode($data));
    $img = json_decode($json_data, true);
    if($type == 'choice') {
      $this->view->displayNavigationChoice($img);
    }
    else {
      $this->view->displayNavigation($img);
    }
  }
  public function contact(){
    $this->view->displayContact();
  }
}
