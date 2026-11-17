<?php include($_SERVER["DOCUMENT_ROOT"].'/PhP_modules/SessionHandler.php');?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../styles/default_styles.css">
		<script type="text/javascript" src="../js/index.js"></script>
		<meta http-equiv="Cache-Control" content="no-store"/>
	</head>
	<body>
		<div id=titleBar>
			<a href="index.php"><H1>Hydra's Rest</H1></a>
			<div class = "login">
				<?php include($_SERVER["DOCUMENT_ROOT"]."/PhP_modules/loginPage.php")?>
			</div>
		</div>


		<?php include($_SERVER["DOCUMENT_ROOT"]."/PhP_modules/Menubar.php")?>

		<div id=MainContent>
			
			<?php include($_SERVER["DOCUMENT_ROOT"]."/PhP_modules/Sidebar.php")?>

			<div id="mainText"u>
				
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
			
			</div>
		</div>
	</body>
</html>
