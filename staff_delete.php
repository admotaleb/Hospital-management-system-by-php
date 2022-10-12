<?php session_start() ?>
<?php 
	
    if(empty($_SESSION['username'])){ 
      header("location: login.php");
	}
 
?>
<?php
    $d_id = $_GET['id'];
	
	$con=mysqli_connect("localhost","root","","hmsdb");
	
	$delete = mysqli_query($con, "DELETE FROM staffdetails where staff_id = '$d_id' ");
	if($delete == true){
		header("Location:staff_details.php");
	}
	else{
		echo "!Delete error";
	}
?>