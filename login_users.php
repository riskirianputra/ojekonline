<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Login Page</title>
</head>
<body>
<div class="container">
	<div class="card" style="margin-top: 1rem">
		<div class="card-title text-white bg-primary mb-3">
			<h3 class="text-center">Login</h3>
		</div>
		<div class="card-body border-primary mb-3">
			<form method="post" action="act_login_users.php">
				<div class="col-sm-12">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-md btn-info form-control" name="btnmasuk" value="Masuk">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>