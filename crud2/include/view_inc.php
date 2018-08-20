<?php

class ViewUsers extends User {
	
	public function showAllUsers() {
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {
			echo $data['userid'];
			echo $data['firstname'];
			echo $data['lastname'];
			echo $data['address'];
		}
			
	}
}
?>