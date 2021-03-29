<?php 
  require("db_con.php"); 
  require("auth.php")
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <link rel="icon" href="images/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body class="bg-light">

  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm text-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-dark h2">
        <img src="images/bg.png " width="60" height="60" class="d-inline-block align-center">
        Anonpay Dashboard
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto pr-5">
              <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-align-justify" title="Align Justify"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Home</a>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item active" href="dashboard.php">Dashboard</a>
                  <a class="dropdown-item" href="anonpay.php">Anon Pay</a>
                  <a class="dropdown-item" href="#">Conatct</a>
                  <a class="dropdown-item" href="logout.php">LogOut</a>
                  <a class="dropdown-item" href="#">About US</a>
                </div>
            </li>
            </ul>
        </div>
      </div>
  </nav>


  <!-- body -->
  <br>
  <h3 class="text-dark text-center">Daily Transection Summery</h3>
<div class="container-fluid">
<div class="d-flex justify-content-center h-100">
<div class="card">

  <table id="my_table1" class="display bg-dark">
    <thead>
      <tr class="text-light">
        <th>ID</th>
        <th>Bank Name</th>
        <th>Benificiary Name</th>
        <th>NIC</th>
        <th>Ammount</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $u= $_SESSION['uname'];
      if($_SESSION["role"] == 'user'){
        $query="SELECT * FROM anonpay where date = (select curdate()) AND username ='$u';";
      }
      else if($_SESSION["role"] == 'admin'){
        $query="SELECT * FROM anonpay where date = (select curdate());";
      }
      else{
        header("Location: login.php");
      }
      
      $result=mysqli_query($con,$query);
      $i=1;
      while($row=mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td><?php echo $i;$i++;?></td>
          <td><?php echo $row['bank_name']; ?></td>
          <td><?php echo $row['bname']; ?></td>
          <td><?php echo $row['nic']; ?></td>
          <td><?php echo $row['ammount']; ?></td>
          <td><?php echo $row['date']; ?></td>
        </tr>
      <?php }
    ?>
    </tbody>
  </table>
</div>
</div>
</div>
<br><br><br><br>



<h3 class="text-dark text-center">Full Transection Summery</h3>

<div class="container-fluid">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div id="my_chart"></div>
</div>
</div>
</div>
<br><br>

<div class="container-fluid">
<div class="d-flex justify-content-center h-100">
<div class="card">
  <table id="my_table2" class="display bg-dark ">
    <thead>
      <tr class="text-light">
        <th>ID</th>
        <th>Bank Name</th>
        <th>Benificiary Name</th>
        <th>NIC</th>
        <th>Ammount</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    <?php  
      if($_SESSION["role"] == 'user'){
        $query="SELECT * FROM anonpay where username ='$u';";
      }
      else if($_SESSION["role"] == 'admin'){
        $query="SELECT * FROM anonpay;";
      }
      else{
        header("Location: login.php");
      }
      $result=mysqli_query($con,$query);
      $chart_data='';
      $i=1;
      while($row=mysqli_fetch_assoc($result)){
        $chart_data.="{date:'".$row['date']."',ammount:'".$row['ammount']."'}, ";
      ?>
        <tr>
          <td><?php echo $i;$i++;?></td>
          <td><?php echo $row['bank_name']; ?></td>
          <td><?php echo $row['bname']; ?></td>
          <td><?php echo $row['nic']; ?></td>
          <td><?php echo $row['ammount']; ?></td>
          <td><?php echo $row['date']; ?></td>
        </tr>
      <?php }$chart_data=substr($chart_data, 0,-2)
    ?>
    </tbody>
  </table>
</div>
</div>
</div>
  


  <!-- footer -->
	<footer class="container-fluid" style="background-color: rgba(0, 0, 0, 0.2);">
    <p class="text-muted mb-0 py-2">&copy; 2021 All rights reserved.</p>
  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#my_table1').DataTable();
    $('#my_table2').DataTable();
} );
</script>

</body>
</html>

<script type="text/javascript">
  Morris.Bar({
    element : 'my_chart',
    data: [
    <?php echo $chart_data;?>
  ],
    xkey: 'date',
    ykeys: ['ammount'],
    labels: ['amount','amount']
  });
</script>