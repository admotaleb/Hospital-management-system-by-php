<?php
	if(!empty($_GET)){
		$id=$_GET['id'];
		
	}
	$con = mysqli_connect("localhost","root","","hmsdb");
	
	if(!empty($_POST)){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$docapp=$_POST['docapp'];
	$gender=$_POST['gender'];
	$panding=$_POST['panding'];
	
	$edit = mysqli_query($con, "UPDATE doctorapp SET fname='$fname', lname='$lname', email='$email',  contact='$contact',  docapp='$docapp', gender='$gender', address='$address', password='$password', permission='$panding' where pat_id='$id'" );
	}
	if($edit = true){
		echo "Edit is successful";
	}
	$select=mysqli_query($con, "select * from doctorapp where pat_id='$id'");
	$data = mysqli_fetch_assoc($select);
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotro" style="background-color:#EDEDED;">
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
						 <form class="form-group" action="" method="post">
							<label>First Name : </label>
							<input type="text" name="fname" value="<?php echo $data['fname']; ?>" class="form-control"><br>
							<label>Last Name : </label>
							<input type="text" name="lname" value="<?php echo $data['lname']; ?>" class="form-control"><br>
							<label>Email: </label>
							<input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control"><br>
							<label>Address : </label>
							<textarea class="form-control" name="address"  id="exampleTextarea" rows="3"> <?php echo $data['address']; ?> </textarea><br>
							<label>Contact : </label>
							<input type="text" name="contact" value="<?php echo $data['contact']; ?>" class="form-control"><br>
							<label>Password : </label>
							<input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control"><br>
							<label>Doctor Appointment : </label>
							<select class="form-control" name="docapp">
								<option value="Dr Sharam From 6pm to 8pm">Dr Shahid From 6pm to 8pm</option>
								<option value="Dr Emmi From 10pm to 8am">Dr Emmi From 10pm to 8am</option><br>	
								<option value="Dr Emmi From 10pm to 8am">Dr Raton From 10pm to 8am</option><br>	
								<option value="Dr Emmi From 10pm to 8am">Dr Ashik From 10pm to 8am</option><br>	
							</select><br>
							<label>Gender : </label><br>
							<label class="radio_inline"><input type="radio" name="gender" value="male">Male</label>
							<label class="radio_inline"><input type="radio" name="gender" value="Female">Female</label><br>
							<label class="radio_inline"><input type="radio" name="panding" value="Granted" checked>Accept</label><br>
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