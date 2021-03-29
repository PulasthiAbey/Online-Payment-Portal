<?php 
	require("db_con.php");
	session_start();
	if(isset($_POST['submit'])){
		$email=validate($_POST['email']);
		$password=validate($_POST['password']);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password' limit 1;";
		$result=mysqli_query($con,$query);
		if($row=mysqli_fetch_assoc($result)){
			$_SESSION["uname"]=$row['email'];
			$_SESSION["role"]=$row['role'];
			header("Location: dashboard.php");
		}
		else{
			header("Location: login.php");
		}
	}

	function validate($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
}
 ?>