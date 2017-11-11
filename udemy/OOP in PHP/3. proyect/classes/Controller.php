<?php

abstract class Controller{
	protected $request;
	protected $action;

	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		//se ejecuta caulquier acción
		return $this->{$this->action}();
	}

	protected function returnView($viewmodel, $fullview){
		//crea la url con la carpeta views con la clase y la acción
		$view = 'views/'. get_class($this). '/' . $this->action. '.php';
		if($fullview){
			require('views/main.php');
		} else {
			require($view);
		}
	}
}