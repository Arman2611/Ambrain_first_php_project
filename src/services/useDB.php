 <?php
	
	function useDB($dbname): void
	{
		$sql = "USE $dbname";
		
		if ($GLOBALS['connection']->query($sql) === TRUE) {
			echo "Switched to database $dbname<br>";
		} else {
			throw new Exception("Failed to switch to database $dbname");
		}
	}
