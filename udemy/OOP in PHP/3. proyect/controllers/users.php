<?php

class Users extends Controller{

    protected function register(){
		$viewmodel = new UserModel();
        $this->ReturnView($viewmodel->register(), true);
        
        //echo 'user controller';
    }
    
    protected function login(){
		$viewmodel = new UserModel();
        $this->ReturnView($viewmodel->login(), true);
        
        //echo 'user controller';
    }
    
    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('location: '.ROOT_URL);
    }
}