<?php 
	require("db_con.php");
	if(isset($_POST['submit'])){
		$bank_name=$_POST['bank'];
		$bname=$_POST['bname'];
		$nic=$_POST['nic'];
		$ammount=$_POST['ammount'];
		$quer="SELECT curdate() as date;";
  		$res =mysqli_query($con,$quer);
 	 	$row=mysqli_fetch_assoc($res);
  		$date=$row['date'];
  		$user=$_POST['user'];

  		$id_srt_old="/([0-9]){9}v$/i";
  		$id_srt_new="/([0-9]){12}$/i";

		if(is_numeric($ammount) && (preg_match($id_srt_new, $nic) || preg_match($id_srt_old, $nic))){
			$query="INSERT INTO anonpay(bank_name,bname,nic,ammount,`date`,USERNAME) values('$bank_name','$bname','$nic',$ammount,'$date','$user');";
			$result=mysqli_query($con,$query);
			if($result){
				echo "<h4><font color=red>Transection Success!!<br> <a href='anonpay.php'>Anon pay</a><br><a href='dashboard.php'>Dashboard</a> </font></h4>";
				//header('Location: anonpay.php');
			}
			else{
				header('Location: anonpay.php');
			}
		}
		else{
			echo "<h4><font color=red>Invalid details  <a href='anonpay.php'>try again!</a> </font></h4>";
		}
		
	}
?>