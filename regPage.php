<?php
session_start();
require_once 'LoginModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$profile = $_POST['ProfileP'];
	print_r($_FILES);

	$loginModel = new LoginModel();
	$loginModel->createUser($username, $password, $email, $_FILES);
	$output = $loginModel->checkUser($username, $password);
	$_SESSION['userID'] = $output;

	header('Location: User_Info.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="../styles/default_styles.css">
		<script type="text/javascript" src="../js/index.js"></script>
		<meta http-equiv="Cache-Control" content="no-store"/>
	</head>
<body>
	<div>
		<form action="regPage.php" method="POST" enctype="multipart/form-data">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<br>
			<label for="password">Password:</label>
			<input type="text" id="password" name="password" required>
			<br>
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" required>
			<br>
			<label for="ProfileP">Profile Picture:</label>
			<input type="file" id="ProfileP" name="ProfileP">
			<br>
			<button type="submit">Create Account</button>
		</form>
	</div>
</body>
</html>
