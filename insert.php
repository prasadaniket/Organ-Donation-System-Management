<?php
include "connection.php";
  $name =$_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "insert into donationhistory(`name`,`email`,`password`) values('$name','$email','$password')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>window.open('index.php','_self')</script>";
	}
	else
	{
		echo "error:".mysqli_error($conn);
	}
	mysqli_close($conn);
?>

