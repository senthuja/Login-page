<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<div class ="container">
			<div class ="header">
				<h2>Register</h2>
			</div>
			<form action="login.php" method="POST">
				<div>
					<label for="username" >Username:</label>
					<input type="text" name="username">
				</div>
				
				<div>
					<label for="password" >Password:</label>
					<input type="password" name="password_1">
				</div>
				
				<button type="submit">Submit</button>
				<p>You are not  a user?<a href="register.php"><b>Register Here</b></a></p>
		</div>
	</body>

</html>