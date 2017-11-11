<?php

class Shares extends Controller{

	protected function Index(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->Index(), true);
		
		echo 'shares controller';
	}

	protected function add(){
		if(isset($_SESSION['is_logged_in'])){
			header('location: '.ROOT_URL.'shares');
		}

		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->add(), true);
		
		echo 'shares controller';
	}
}