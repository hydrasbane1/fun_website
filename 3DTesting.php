<?php
session_start();
require($SERVER["DOCUMENT_ROOT"]."PhP_modules/LoginModel.php");
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
		<div id=titleBar>
			<H1>3D Testing</H1>
			<div class = "login">
				<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/loginPage.php")?>
			</div>
		</div>


		<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/Menubar.php")?>

		<div id=MainContent>
			
			<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/Sidebar.php")?>

			<div id="mainText">
				<div>
					<H3>Welcome The 3D Test Page</H3>
					</p>this is the test page for 3d models</p>
				</div>
			
			</div>
		</div>
	</body>
</html>
