
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="login.css">
  	<link rel="icon" href="images/favicon.png" type="image/png" />
  	<link rel="shortcut icon" href="images/favicon.ico" />
  	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title>Registration</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm text-light">
      <div class="container-fluid">
      	<a class="navbar-brand text-dark h2">
      	<img src="images/bg.png " width="60" height="60" class="d-inline-block align-center">
        Anonpay Register
      </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse text-dark">
          <ul class="navbar-nav ml-auto p-2 text-dark">
              <li class="nav-item"><a href="#" class="nav-link text-dark">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-dark">Profile</a></li>
              <li class="nav-item dropdown text-dark">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-align-justify" title="Align Justify"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Home</a>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item " href="dashboard.php">Dashboard</a>
                  <a class="dropdown-item" href="anonpay.php">Anon Pay</a>
                  <a class="dropdown-item" href="login.php">login</a>
                  <a class="dropdown-item" href="#">Conatct</a>
                  <a class="dropdown-item" href="#">About US</a>
                </div>
            </li>
            </ul>
        </div>
      </div>
  </nav>



<div class="container">
	<!-- <div class="d-flex justify-content-center h-100"> -->
		<div class="card">
			<div class="d-flex justify-content-center">
				<h3>Registration</h3>
			</div>
			<div class="card-body">
				<form method="post" action="reg.php">
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="user name" name="username" required>
						
					</div>
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="user email" name="useremail" required>
						
					</div>
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" required>
					</div>
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="confirm-password" name="con_password" required>
					</div>
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-book"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Address" name="address" required>
						
					</div>
					<div class="input-group form-group p-1">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="+94775846251" name="tpno" required>
						
					</div>
					<div class="input-group form-group p-1">
					<div class="form-group d-flex justify-content-center">
						<button type="submit" name="submit" class="btn btn-outline-success"> Register  </button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Allredy have an account?<a href="login.php">Login</a>
				</div>
			</div>
		</div>
	<!-- </div> -->
</div>



<footer class="container-fluid d-flex fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
    <p class="text-muted mb-0 py-2">&copy; 2021 All rights reserved.</p>
  </footer>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
