<?php
    $d_id = $_GET['id'];
	
	$con=mysqli_connect("localhost","root","","hmsdb");
	
	$delete = mysqli_query($con, "DELETE FROM doctorapp where pat_id = '$d_id' ");
	if($delete == true){
		header("Location:patient_details.php");
	}
	else{
		echo "!Delete error";
	}
?>