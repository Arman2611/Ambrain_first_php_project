<?php
$servername = "ambrain.am";
$username = "root";

$connection = new mysqli($servername, $username);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";