<?php
session_unset();
session_start();
require_once 'LoginModel.php';

//$_SESSION['userID'] = -1;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$loginModel = new LoginModel();
	$output = $loginModel->checkUser($username, $password);
	$_SESSION['userID'] = $output;
	header('Location: loginPage.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Cache-Control" content="no-store"/>
</head>
<body>
	<form style = "height:100" action="loginPage.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<br>
		<label for="password">Password:</label>
		<input type="text" id="password" name="password" required>
		<br>
		<button type="submit">login</button>
		<a href = "regPage.php">register!</a>
	</form>
</body>
</html>
