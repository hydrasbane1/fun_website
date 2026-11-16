<?php
session_start();
require('LoginModel.php');
$LM = new LoginModel();
if($_SESSION['userID'] == null){
	$_SESSION['userID'] = -1;
}
$Userlist = $LM->getUserByID($_SESSION['userID']);
$User = $Userlist[0];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../styles/default_styles.css">
		<script type="text/javascript" src="../js/index.js"></script>
		<meta http-equiv="Cache-Control" content="no-store"/>
	</head>
	<body>
		<div>
			<img src = <?php echo($User[4])?>></img>
			<p>the users picture is: <?php echo($User[4])?></p>
		</div>
		<div>
			<h3></h3>
			<p>your user ID is: <?php echo($_SESSION['userID'])?></p>
			<p>your name is: <?php echo($User[1]);?></p>
			<p>your email is: <?php echo($User[2]);?></p>
		</div>
	</body>
</html>
