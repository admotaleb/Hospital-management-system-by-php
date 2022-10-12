<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
	
	<style>
			body{
				background-image:url("img/pic-5.jpg");
				background-repeat:no-repeat;
				background-size:cover;
				opacity: 0.7;
			}
		.contain{
			width:400px;
			margin: 0 auto;
			padding-top:50px;
		}
	
	</style>
</head>
<body>
	<div class="contain">
		<div class="card">
		<img class="card-img-top" src="img/im.jpg" alt="Card image cap">
			<div class="card-body">
				<form action="func.php" method="post">
				  <div class="form-group">
					<label for="email">Username :</label>
					<input type="text" class="form-control" id="email" name="username" placeholder="Enter Email">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter Password">
				  </div>
				  <button type="submit" class="btn btn-default" name="login_submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>