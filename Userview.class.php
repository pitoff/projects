<?php
	class Userview extends User{
		public function showUser($name){
			$results = $this->getUser($name);
			echo "full name: " .$results[0]['name'];
			echo "user name: " .$results[0]['username'];
			echo "password: " .$results[0]['password'];
		}
	}