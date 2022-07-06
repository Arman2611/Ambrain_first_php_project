<?php
	
	function loginUser(): void
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE email='$email'";
		
		// Returns array of associative arrays
		$result = mysqli_fetch_all($GLOBALS['connection']->query($sql), MYSQLI_ASSOC);
		
		if (count($result) === 0) {
			echo "Wrong email or password <br>";
			
		} else if (count($result) === 1) {
			$hashedPassword = $result[0]['password'];
			
			if (password_verify($password, $hashedPassword)) {
				
				session_start([
					// 1 month
					'cookie_lifetime' => 2592000,
				]);
				$_SESSION['user_id'] = $result[0]['user_id'];
				$_SESSION['name'] = $result[0]['name'];
				$_SESSION['surname'] = $result[0]['surname'];
				$_SESSION['email'] = $result[0]['email'];
				
				header( 'Location: ../', true, 303 );
				
			} else {
				echo "Wrong email or password <br>";
			}
			
		} else {
			echo "Failed to login <br>";
		}
	}
