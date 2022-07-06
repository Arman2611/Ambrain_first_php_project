<?php

// Connecting to database
require_once './src/configuration/connection.php';

// Connecting services
require_once './src/services/useDB.php';
require_once './src/services/addUser.php';
require_once './src/services/loginUser.php';

class Controller
{
	public function userRegistration(): void
	{
		try {
			(new Connection())->open();
			useDB('myDB');
			if(addUser() === true) {
				loginUser();
			}
		} catch (Exception $err) {
			echo $err;
		}
	}
	public function userLogin(): void
	{
		try {
			(new Connection())->open();
			useDB('myDB');
			loginUser();
		} catch (Exception $err) {
			echo $err;
		}
	}
}