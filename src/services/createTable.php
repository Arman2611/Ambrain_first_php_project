<?php
	
	function createTable($schemaname): void
	{
		$schemapath = './src/schemas/' . $schemaname . '.php';
		$schema = require_once $schemapath;
		
		// Crafting sql query
		$sql = "CREATE TABLE IF NOT EXISTS $schemaname (";
		foreach ($schema as $key => $value) {
			$sql .= " " . $key . " " . $value . ',';
		}
		$sql = substr($sql, 0, -1);
		$sql .= ')';
		
		if ($GLOBALS['connection']->query($sql) === TRUE) {
			echo "Created table $schemaname<br>";
		} else {
			throw new Exception("Failed to create table $schemaname");
		}
	}
