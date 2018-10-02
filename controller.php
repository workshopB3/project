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
    $this->view->displayNavigation();
  }
}
