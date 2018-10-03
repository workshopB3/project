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
  public function ajax($post) {
		ob_end_clean ();
		$msg = "";
		if (isset ( $post ["act"] )) {
			$action = $post ["act"];
			$msg = $this->model->$action ( $_POST );
		}
		echo $msg;
	}
  public function home(){
    $this->view->displayOnePage();
  }
  public function navigation(){
    $this->view->displayNavigation();
  }
  public function contact(){
    $this->view->displayContact();
  }
}
