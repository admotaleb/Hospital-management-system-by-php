<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
include("func.php");
if(isset($_POST['patient_search_submit'])){
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact LIKE '%$contact%' OR email LIKE '%$contact%'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:50px;'>
			<a href='patient_details.php' class='btn btn-light'>Go bck</a>
			<div class='card'>
				<img src='img/5.jpg' class='card-img-top'>
				<div class='card-body' style='background-color:#3498DB; color:#ffffff;'>
				<table class='table table-hover'>
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email id</th>
								<th>Contact</th>
								 <th>Doctor Appointment</th>
							</tr>
						</thead>
					<tbody>
				";
	while($row=mysqli_fetch_array($result)){
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		echo "<tr>
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$docapp</td>
		</tr>";
	}
	echo "</tbody></table></div></div></div>";
}

?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>