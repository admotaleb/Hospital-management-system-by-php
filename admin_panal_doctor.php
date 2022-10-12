<?php/* session_start();*/ ?>
<?php 
	/*
    if(empty($_SESSION['username'])){ 
      header("location: login.php");
	}
 */
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
	<div class="jumbotron" style="background:url('img/hnd.jpg') no-repeat; background-size:cover; height:400px;"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item active"> Categori</a>
					<a href="admin_panal.php" class="list-group-item">Add Patient</a>
					<a href="patient_details.php" class="list-group-item">Patient Details</a>
					<a href="" class="list-group-item">Payment/checkout</a>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item active">Doctor</a>
					<a href="admin_panal_doctor.php" class="list-group-item">Add New Doctor</a>
					<a href="dr_details.php" class="list-group-item">Doctor details</a>
					<a href="" class="list-group-item">Remove Doctor</a>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item active">Staff</a>
					<a href="admin_panal_staff.php" class="list-group-item">Add New Staff</a>
					<a href="staff_details.php" class="list-group-item">Staff details</a>
					<a href="" class="list-group-item">Remove Staff Member</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
						<h3>Add Doctor</h3>
					</div>
					<div class="card-body">
					 <form class="form-group" action="func.php" method="post">
						<label>First Name : </label>
						<input type="text" name="fname" class="form-control"><br>
						<label>Last Name : </label>
						<input type="text" name="lname" class="form-control"><br>
						<label>Address : </label>
						<textarea class="form-control" name="address" id="exampleTextarea" rows="3"></textarea><br>
						<label>Contact : </label>
						<input type="text" name="contact" class="form-control"><br>
						<label>Title : </label>
						<input type="text" name="title" class="form-control"><br>
						<label>Gender : </label>
						<label class="radio_inline"><input type="radio" name="gender" value="male">Male</label>
						<label class="radio_inline"><input type="radio" name="gender" value="Female">Female</label><br>
						
						<input type="submit" class="btn btn-primary" name="dr_submit" value="Enter Appointment">
					 </form>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>