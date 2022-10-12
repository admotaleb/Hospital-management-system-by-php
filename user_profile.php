<?php session_start() ?>

<?php 

if(empty($_SESSION['id'])){

	header("location:login.php");
} 

$session_id = $_SESSION['id'];


$con=mysqli_connect("localhost","root","","hmsdb");
$userquery = "select * from doctorapp where pat_id='$session_id'";

$userresult=@mysqli_query($con,$userquery);

$data = mysqli_fetch_assoc($userresult);
	 


$fname=$data['fname'];
$lname=$data['lname'];
$email=$data['email'];
$contact=$data['contact'];
$docapp=$data['docapp'];
$gender=$data['gender'];
$address=$data['address'];
$permission=$data['permission'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
	body{
		background:url('img/gty.jpg') no-repeat;
		background-size:cover;
		
		
	}
	.panel{
		background:rgba(0, 100, 0, .4);
		
	}
	.panel-heading span{
		padding-left:10px;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-4" style="margin:150px 0 0 300px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<i class="fa fa-user" aria-hidden="true"></i><span>User Profile</span>
				</div>
				<div class="panel-body">
					<div class="col-md-8" style="margin-left:30px;">
						<table class="table">
							  <tbody>
								<tr>
								  <td></td>
								  <td>Name:</td>
								  <td><?php echo $fname;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Last Name:</td>
								  <td><?php echo $lname;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>E-mail</td>
								  <td><?php echo $email;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Contuct</td>
								  <td><?php echo $contact;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Dr. Name</td>
								  <td><?php echo $docapp;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Gender</td>
								  <td><?php echo $gender;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Address</td>
								  <td><?php echo $address;?></td>
								  <td></td>
								</tr>
								<tr>
								  <td></td>
								  <td>Permission</td>
								  <td><?php echo $permission;?></td>
								  <td></td>
								</tr>
							  </tbody>
							</table>
						</div>
				</div>
			</div>
		</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
</body>
</html>