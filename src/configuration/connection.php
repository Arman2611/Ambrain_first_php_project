<?php

class Connection
{
	private string $servername = "ambrain.am";
	private string $username = "root";
	
	public function open() : void
	{
		$connection = new mysqli($this->servername, $this->username);
		
		// Check connection
		if ($connection->connect_error) {
			throw new Exception("Connection failed: " . $connection->connect_error);
		}
		
		echo "Connected successfully <br>";
		$GLOBALS['connection'] = $connection;
	}
}





