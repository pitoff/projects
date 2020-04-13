<?php
	class User extends Db{
		protected function getUser($name){
			$sql = "SELECT * FROM user WHERE  name = ?";
			$stmt = $this->con()->prepare($sql);
			$stmt->execute([$name]);

			$results = $stmt->fetchAll();
			return $results;
		}

		protected function setUser($name, $username, $password){
			$sql = "INSERT INTO user (name, username, password) VALUES (?, ?, ?)";
			$stmt = $this->con()->prepare($sql);
			$stmt->execute([$name, $username, $password]);
		}
	}