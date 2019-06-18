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
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto" style="width: 20rem;">
				  <img src="./images/logo_profile.png" class="card-img-top mx-auto" style="width: 60%;" alt="Profile Logo">
				  <div class="card-body">
				    <h5 class="card-title">Profile Information</h5>
				    <p class="card-text"><i class="fa fa-user"></i> MD : Shahariar Ikbal</p>
				    <p class="card-text"><i class="fa fa-user"></i> Admin</p>
				    <p class="card-text">Last Login : xxx - xxx - xxx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%; height: 100%;">
					<h2>Welcome Admin</h2>
					<div class="row">
						<div class="col-md-6">
							<iframe src="http://free.timeanddate.com/clock/i6t7mpob/n73/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
						<div class="col-md-6">
						    <div class="card">
						      <div class="card-body">
						        <h5 class="card-title">New Orders</h5>
						        <p class="card-text">Here You Can make invoice and create new orders</p>
						        <a href="#" class="btn btn-primary">New Orders</a>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
