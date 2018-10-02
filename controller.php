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
    $this->view->displayHome();
  }
  public function navigation(){
    $url = "./assets/json/img.json";
    $data = file_get_contents($url);
    $img = json_decode($data)[0];
    $this->view->displayNavigation($img);
  }
}
