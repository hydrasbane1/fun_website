<?php
session_start();
require_once 'LoginModel.php';

$_SESSION['userID'] = -1;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$loginModel = new LoginModel();
	$output = $loginModel->checkUser($username, $password);
	if ($output <= 0){
		$_SESSION['userID'] = $output;
	}
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div>
		<form action="loginPage.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<br>
			<label for="password">Password:</label>
			<input type="text" id="password" name="password" required>
			<button type="submit">Create Account</button>
		</form>
	</div>
	<div>
		<h3>this is the user</h3>
		<p>the user is:</p> 
			<?php
				echo($_SESSION['userID']);
//				if($_SESSION['userID'] >= 0){
//					echo(getUserByID($_SESSION['userID']));
//				}
			?>
		<p></p>
	</div>
</body>
</html>
