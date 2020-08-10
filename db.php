<?php
$conn = new mysqli("localhost", "root", "", "artgallery");

//check connection
if($conn->connect_error){
	die("Error accessing database: " . $conn->connect_error);
}
?>
