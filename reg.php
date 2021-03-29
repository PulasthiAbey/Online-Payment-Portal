<?php 
	require("db_con.php");
	if(isset($_POST['submit'])){
		$name=validate($_POST['username']);
		$useremail=validate($_POST['useremail']);
		$password=validate($_POST['password']);
		$con_password=validate($_POST['con_password']);
		$address=validate($_POST['address']);
		$tpno=validate($_POST['tpno']);
		$query = "INSERT INTO users(username,email,password,address,tp_no,role) values('$name','$useremail','$password','$address','$tpno','user');";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location: success.php");
		}
		else{
			// header("Location: login.php");
		}
	}

	function validate($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
}
 ?>