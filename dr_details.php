<?php session_start() ?>
<?php 
	
    if(empty($_SESSION['username'])){ 
      header("location: login.php");
	}
 
?>

<!DOCTYPE HTML>
<?php include("func.php"); ?>
<html lang="en-US">
<head>
	<title>Hospital Management System</title>
	<link rel="icon" href="img/icon.png" >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background:url('img/hnd.jpg') no-repeat; background-size:cover; height:400px;"></div>
		<div class="container">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
					<div class="row">
						<div class="col-md-1">
							<a href="admin_panal_doctor.php" class="btn btn-light">Go Back</a>
						</div>
						<div class="col-md-3">
							<h3>Doctor Details</h3>
						</div>
						<div class="col-md-8">
							<form class="form-group" action="dr_search.php" method="post">
								<div class="row">
									<div class="col-md-10">
										<input type="text" name="search" class="form-control" placeholder="Enter Contact" > 
									</div>
									<div class="col-md-2">
										<input type="submit" name="dr_search_submit" class="btn btn-light" value="search">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
					<table class="table table-hover">
					  <thead>
						<tr>
						  <th>Dr.Id</th>
						  <th>First Name</th>
						  <th>Last Name</th>
						  <th>Address</th>
						  <th>Contact</th>
						  <th>Title</th>
						  <th>Gender</th>
						</tr>
					  </thead>
					  <tbody>
						<?php get_doctor_details(); ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>