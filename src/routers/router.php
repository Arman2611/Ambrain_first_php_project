<?php
class Router
{
	private array $pages = array();
	
	public function addRoute($url, $path): void
	{
		$this->pages[$url] = $path;
	}
	
	public function route($url): void
	{
		if (!isset($this->pages[$url])) {
			require "./src/views/404.php";
			die();
		}
		
		$path = $this->pages[$url];
		
		$file_dir = "src/views/" . $path;
		if ($path == "") {
			require "./src/views/404.php";
			die();
		}
		
		if (file_exists($file_dir)) {
			require $file_dir;
		} else {
			require "./src/views/404.php";
			die();
		}
	}
}