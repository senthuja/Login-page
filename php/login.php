<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<h1>Welcome to Login Page</h1>
			<p>
				<label>Username:</label>
				<button name="login" type="submit"></button>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" value="Login"/>
			</p>
		</form>
	</div>
</body>
</html>
