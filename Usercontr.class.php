<?php
	class Usercontr extends User{
		public function createUser($name, $username, $password){
			$this->setUser($name, $username, $password);

		}
	} 