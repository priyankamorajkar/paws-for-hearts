<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;

		}
		body {
			margin:0;
			font-family:Arial;
			background-color: #fff6e3;
			overflow-x: hidden;
		}
		.form-div{
			margin: 150px auto 50px;
			padding: 25px 15px 10px 15px;
			border: 1px solid blue;
			border-radius: 5px;
			font-size: 1.1em;

		}
		.font-control:focus{
			box-shadow: none;
		}
		form p{
			font-size: .89em;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div" >
				<form action="signup.php" method="post">
					<h3 class="text-center">Register</h3>
					<!--<div class="alert alert-danger">
						<li>Username required</li>
					</div>-->
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" name="email" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div> 
					<div class="form-group">
						<label for="passwordConf">Confirm Password</label>
						<input type="password" name="passwordConf" class="form-control form-control-lg">
					</div> 
					<div class="form-group">
						<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">
							Sign Up
						</button>
					</div>
				</form>
				<p class="text-center">
					Already a member? <a href="login.php">Sign In</a>
				</p>
			</div>
		</div>

	</div>
		<video autoplay muted loop id="myVideo">
			<source src="images/waiting-at-door.mp4" type="video/mp4">
					Your browser does not support the video tag.
			</video>
	</body>
</html>