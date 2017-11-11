<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		//sanitize post;
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
			Messages::setMsg('Please fill in all fields', 'error');
			return;
		}

		if($_POST['submit']){
			$this->query('insert into nametable (title, name) values (:title, :name)' );
			$this->bind(':title', $post['title']);
			$this->bind(':name', $post['name']);
			$this->execute();

			//verify
			if($this->lastinsertId()){
				header('location: '.ROOT_URL.'shares');
			}
		}

		return ;
	}
}