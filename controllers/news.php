<?php
// контролер
Class Controller_News Extends Controller_Base {
	
	// шаблон
	public $layouts = "index_layout";
	
	// главный экшен
	// если в url нет явно указанного экшена, то по дефолту вызывается index
	function index() {
		$obj = new Model_News();

		$this->template->vars('var', $obj->getAllRows());
		// вызов представления по имени
		//$this->model_news->getTableName();
		$this->template->view('index');
	}

	function view($params) {

		$obj = new Model_News();
		print_r($params);
		$id = $params[0];
		$this->template->vars('var', $obj->getRowById($id));


		$this->template->view('one');
	}
}