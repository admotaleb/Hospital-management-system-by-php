<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotro" style="background-color:#EDEDED;>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" style="background-color:#428BCA; color:#ffffff;">
						<h3>Book an appointment</h3>
					</div>
					<div class="card-body">
					 <form class="form-group" action="func.php" method="post">
						<label>First Name : </label>
						<input type="text" name="fname" class="form-control"><br>
						<label>Last Name : </label>
						<input type="text" name="lname" class="form-control"><br>
						<label>Email: </label>
						<input type="email" name="email" class="form-control"><br>
						<label>Address : </label>
						<textarea class="form-control" name="address" id="exampleTextarea" rows="3"></textarea><br>
						<label>Contact : </label>
						<input type="text" name="contact" class="form-control"><br>
						<label>Password : </label>
						<input type="password" name="password" class="form-control"><br>
						<label>Doctor Appointment : </label>
						<select class="form-control" name="docapp">
							<option value="Dr Sharam From 6pm to 8pm">Dr Shahid From 6pm to 8pm</option>
							<option value="Dr Emmi From 10pm to 8am">Dr Emmi From 10pm to 8am</option><br>	
							<option value="Dr Emmi From 10pm to 8am">Dr Raton From 10pm to 8am</option><br>	
							<option value="Dr Emmi From 10pm to 8am">Dr Ashik From 10pm to 8am</option><br>	
						</select><br>
						<label>Gender : </label>
						<label class="radio_inline"><input type="radio" name="gender" value="male">Male</label>
						<label class="radio_inline"><input type="radio" name="gender" value="Female">Female</label><br>
						<input type="submit" class="btn btn-primary" name="user_submit" value="Enter Appointment">
					 </form>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>