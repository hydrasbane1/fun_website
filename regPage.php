<?php
require_once 'LoginModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$loginModel = new LoginModel();
	$loginModel->createUser($username, $password, $email);

	header('Location: loginPage.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div>
		<form action="regPage.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<br>
			<label for="password">Password:</label>
			<input type="text" id="password" name="password" required>
			<br>
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" required>
			<br>
			<button type="submit">Create Account</button>
		</form>
	</div>
	<div>
		<h3>this is a test div</h3>
		<p>this is a test div to make sure that things dont just dissapear when the form is sent</p>
	</div>
</body>
</html>
