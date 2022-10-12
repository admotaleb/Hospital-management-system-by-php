<?php @session_start(); ?>
<?php
$con=mysqli_connect("localhost","root","","hmsdb");


if(isset($_POST['login_submit'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$query = "select * from logintb where username='$username' and password='$password'";
	$result=@mysqli_query($con,$query);
	$userquery = "select * from doctorapp where contact='$username' and password='$password'";
	$userresult=@mysqli_query($con,$userquery);
	$data = mysqli_fetch_assoc($userresult);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("location: admin_panal.php");
		
	}
	elseif(mysqli_num_rows($userresult)==1){
		$_SESSION['id'] = $data['pat_id'];
		header("Location:user_profile.php");
	}
	
	else{
		header("Location:index.php");
	}
	
}
if(isset($_POST['pat_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$doctorapp=$_POST['doctorapp'];
	$gender=$_POST['gender'];
	$indata= @mysqli_query($con,"INSERT INTO doctorapp(fname, lname, email, address, contact, docapp, gender)" ."VALUES('$fname', '$lname', '$email', '$address', '$contact', '$doctorapp', '$gender') ");
	if($indata){
		echo 'sucsses';
		echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('admin_panal.php','_self')</script>";
	}
	else{ echo 'error';
	}
}

if(isset($_POST['user_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	$docapp=$_POST['docapp'];
	$gender=$_POST['gender'];
	$panding=$_POST['panding'];  
	$indata= @mysqli_query($con,"INSERT INTO doctorapp(fname, lname, email, contact, docapp, gender, address,   password,   permission)" ."VALUES('$fname', '$lname', '$email', '$contact', '$docapp',  '$gender', '$address',  '$password',  '$panding') ");
	if($indata){
		echo 'sucsses';
		echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	else{ echo 'error';
	}
}

function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)){
		$id=$row['pat_id'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$address=$row['address'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		$gender=$row['gender'];
		echo "<tr>
				<td>$id</td>
				<td>$fname</td>
				<td>$lname</td>
				<td>$email</td>
				<td>$address</td>
				<td>$contact</td>
				<td>$docapp</td> 
				<td>$gender</td>
				<td><a href='http://localhost/hospital/patient_delete.php?id=".$row['pat_id']."' class='btn btn-light' onclick='return confirm();'>Delete</a></td>
				<td><a href='http://localhost/hospital/patient_update.php?id=".$row['pat_id']."' class='btn btn-light' onclick='return confirm();'>Update</a></td>
			</tr>";
	}
	
	
} 

if(isset($_POST['dr_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$title=$_POST['title'];
	$gender=$_POST['gender'];
	$indata= @mysqli_query($con,"INSERT INTO drdetails(fname, lname, address, contact, title, gender)" ."VALUES('$fname', '$lname', '$address', '$contact', '$title', '$gender') ");
	if($indata){
		
		echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('admin_panal_doctor.php','_self')</script>";
	}
	
	}

function get_doctor_details(){
	global $con;
	$query="select * from drdetails";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)){
		$id=$row['dr'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		$address=$row['address'];
		$contact=$row['contact'];
		$title=$row['title'];
		$gender=$row['gender'];
		echo "<tr>
				<td>$id</td>
				<td>$fname</td>
				<td>$lname</td>
				<td>$address</td>
				<td>$contact</td>
				<td>$title</td> 
				<td>$gender</td>
				<td><a href='http://localhost/hospital/dr_delete.php?id=".$row['dr']."' class='btn btn-light' onclick='return confirm();'>Delete</a></td>
			</tr>";
	}
	
	
} 

if(isset($_POST['staff_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$title=$_POST['title'];
	$gender=$_POST['gender'];
	$indata= @mysqli_query($con,"INSERT INTO staffdetails(fname, lname, address, contact, title, gender)" ."VALUES('$fname', '$lname', '$address', '$contact', '$title', '$gender') ");
	if($indata){
		
		echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('admin_panal_staff.php','_self')</script>";
	}
	
	}
	
	function get_staff_details(){
	global $con;
	$query="select * from staffdetails";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)){
		$id=$row['staff_id'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		$address=$row['address'];
		$contact=$row['contact'];
		$title=$row['title'];
		$gender=$row['gender'];
		echo "<tr>
				<td>$id</td>
				<td>$fname</td>
				<td>$lname</td>
				<td>$address</td>
				<td>$contact</td>
				<td>$title</td> 
				<td>$gender</td>
				<td><a href='http://localhost/hospital/staff_delete.php?id=".$row['staff_id']."' class='btn btn-light' onclick='return confirm();'>Delete</a></td>
			</tr>";
	}
	
	
} 


?>