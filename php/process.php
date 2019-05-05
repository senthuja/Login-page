<?php
	
	$con=mysqli_connect("localhost","root","","login");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// escape variables for security
	$username = mysqli_real_escape_string($con, $_POST['user']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	

	$sql="select * from users where username='$username' and password = '$password' ";
    

	if (!mysqli_query($con,$sql)) {
	  die('Error: ' . mysqli_error($con));
	}
	echo "Login Success";

	mysqli_close($con);


?>