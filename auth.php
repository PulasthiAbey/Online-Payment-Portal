<?php 
	session_start();
	if(!isset($_SESSION["uname"]) || !isset($_SESSION["role"])){
		header("Location: login.php");
		exit();
	}
 ?>