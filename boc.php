<?php 
  require("db_con.php");
  require("auth.php");
  $quer="SELECT curdate() as date;";
  $res =mysqli_query($con,$quer);
  $row=mysqli_fetch_assoc($res);
  $date=$row['date'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anon Pay</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="anonpay.css">
  <link rel="icon" href="images/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm text-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-dark h2">
        <img src="images/bg.png " width="60" height="60" class="d-inline-block align-center">
        Anonpay Transection
      </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto pr-5">
              <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-align-justify" title="Align Justify"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Home</a>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item " href="dashboard.php">Dashboard</a>
                  <a class="dropdown-item active" href="anonpay.php">Anon Pay</a>
                  <a class="dropdown-item" href="#">Conatct</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                  <a class="dropdown-item" href="#">About US</a>
                </div>
            </li>
            </ul>
        </div>
      </div>
  </nav>


  <!-- body -->
  
<div class="container ">
<div class="d-flex justify-content-center h-100">
<div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 400px;">
  <form method="post" action="insert_data.php">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link " href="anonpay.php">People's Bank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="boc.php">Bank Of Ceylon</a>
      </li>
    </ul>
    <br><br>
    <div class="form-group input-group p-1">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-cog"></i> </span>
       </div>
          <input name="bname" placeholder="Beneficiary Name" required class="form-control"  type="text">
      </div>

      <div class="form-group input-group p-1">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
       </div>
          <input name="nic" placeholder="NIC" required class="form-control"  type="text">
      </div>

  
      <div class="form-group input-group p-1">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fas fa-dollar-sign"></i> </span>
      </div>
        <input class="form-control" name="ammount" placeholder="Amount" required type="text">
      </div>
       <div class="form-group input-group p-1">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="far fa-calendar"></i> </span>
       </div>
          <input name="date" placeholder="Date & Time" required class="form-control"  type="text" disabled value="<?php echo $date; ?>">
      </div>
       <input type="hidden" name="bank" value="Bank Of Ceylon">
       <input type="hidden" name="user" value="<?php echo $_SESSION["uname"]; ?>">
       <p><?php include('insert_data.php'); ?></p>
      <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block"> Submit  </button>
      </div>                                                               
  </form>
  </article>
</div> 
</div>
</div>


  <!-- footer -->
	<footer class="container-fluid d-flex fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
    <p class="text-muted mb-0 py-2">&copy; 2021 All rights reserved.</p>
  </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>