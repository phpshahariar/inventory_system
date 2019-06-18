<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<?php include_once("./templates/header.php");?>
	<br>
	<br>
	<div class="container">
		<div class="card mx-auto" style="width: 20rem;">
  			<img src="./images/user_login.png" class="card-img-top mx-auto" style="width: 60%" alt="User Login">
		  	<div class="card-body">
			    <h5 class="card-title"></h5>
			    <p class="card-text">
			    	<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Submit</button>
					  <span>
					  	<a href="#">Register</a>
					  </span>
					</form>
			    </p>
			   
			</div>
			<div class="card-footer">
			    <a href="#">Forget Password ?</a>
			</div>
		</div>
	</div>
</body>
</html>
