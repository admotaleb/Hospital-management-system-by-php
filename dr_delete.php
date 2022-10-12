<?php
    $d_id = $_GET['id'];
	
	$con=mysqli_connect("localhost","root","","hmsdb");
	
	$delete = mysqli_query($con, "DELETE FROM drdetails where dr = '$d_id' ");
	if($delete == true){
		header("Location:dr_details.php");
	}
	else{
		echo "!Delete error";
	}
?>