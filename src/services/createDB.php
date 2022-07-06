<?php

	function createDB($dbname): void
	{
		$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
		
		if ($GLOBALS['connection']->query($sql) === TRUE) {
			echo "Created database $dbname <br>";
		} else {
			throw new Exception("Failed to create database $dbname");
		}
	}
