<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-3.4.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>
<body>
	<div class="container col-md-6 col-xs-12 col-md-offset-3 espaceur">
		<div class="panel panel-default">
			<div class="panel-heading">
				AUTHENTIFICATION
			</div>
			<div class="panel-body">
				<form method="POST" action="LogIn.php">
					<div class="form-group">
						<label class="control-label">Login :</label>
						<input class="form-control" type="text" name="">
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input class="form-control" type="password" name="">
					</div>
					<button class="btn btn-success" type="submit">SE CONNECTER</button>
					<button class="btn btn-danger" type="reset">ANNULER</button>
				</form>
			</div>
		</div>
	</div>


<!--	<h1>AUTHENTIFICATION</h1>

	<form>
		<div>
			<label>Login :</label>
			<input type="text" name="">
		</div>
		<div>
			<label>Password :</label>
			<input type="password" name="">
		</div>
		<div>
			<input type="submit" value="SE CONNECTER" name="">
			<input type="reset" value="ANNULER" name="">
		</div>
	</form> -->


</body>
</html>