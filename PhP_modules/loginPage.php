<?php
//session_unset();
//session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/PhP_modules/SessionHandler.php';

//$_SESSION['userID'] = -1;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	session_unset();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$loginModel = new LoginModel();
	$output = $loginModel->checkUser($username, $password);
	$_SESSION['userID'] = $output;
	header('Location: ../User_Info.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Cache-Control" content="no-store"/>
</head>
<body>
	<?php
		if($User[1] != "none"){
		echo('<div style = "padding:0px; display:inline-block; outline:0px dotted red; width:inherit; height:inherit;">
				<a style = "height:inherit;" href = "User_Info.php">
					<img src = '. $User[4] .' style = "height:100%; width:self.height;">
					</img>
				</a>
				<div style = "height:95%; width:60%; float:right; padding:0px; outline:0px dotted red;">
					<H2 style = "height:40%; outline:0px dotted red; display:block; padding:0px; margin:0px;">
						'. $User[1] .'
					</H2>
					<Button style = "height:40%; display:block; padding:0px; margin:0px;">
						logoff
					</Button>
				</div>
			</div>');
		}else{
			echo('<div style = "padding:0px;">
			<form style = "height:100" action="PhP_modules/loginPage.php" method="POST">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
				<br>
				<label for="password">Password:</label>
				<input type="text" id="password" name="password" required>
				<br>
				<button type="submit">login</button>
				<a href = "../regPage.php">register!</a>
				</form>
			</div>');
		}
	?>
</body>
</html>
