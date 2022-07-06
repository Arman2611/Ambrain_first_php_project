<?php
	
	require_once './src/services/getRandomId.php';
	
	function addUser(): bool
	{
		$user_id = getRandomId();
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$sql1 = "INSERT INTO users (user_id,name,surname,email,password) VALUES ($user_id,'$name','$surname','$email','$password')";
		
		if ($GLOBALS['connection']->query($sql1) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
