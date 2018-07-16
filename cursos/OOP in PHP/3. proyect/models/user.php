<?php
class UserModel extends Model{
	public function register(){
		//sanitize post;
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($_POST['submit']){	
		    if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please fill in all fields', 'error');
				return;
			}
			
			$this->query('insert into nametable (name, password) values (:name, :password)' );
			$this->bind(':name', $post['name']);
			$this->bind(':password', $password);
			$this->execute();

			//verify
			if($this->lastinsertId()){
				header('location: '.ROOT_URL.'users/login');
			}
		}

		return;		
	}

	public function login(){
		//sanitize post;
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		$password = md5($post['password']);

		if($_POST['submit']){
			$this->query('select * from users where emai = :email and password = :password' );
			$this->bind(':name', $post['name']);
			$this->bind(':password', $password);

			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					'id' => $row['id'],
					'name'=>$row['name'],
					'emai'=>$row['email'],
					'password'=>$row['password']
				);

				header('location: '.ROOT_URL.'shares');
			}else{
				Messages::setMsg('Incorrect message', 'error');
			}
		}

		return;	
	}
}