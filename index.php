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

			<div id="mainText">
				<div>
					<H3>Welcome to hydra's rest</H3>
					</p>Sit down, take a rest! this is a site I created to have a fun website I can mess with an modify so the place may change a bit but thats a part of the fun! take a look at my "about me" if you would like to know more!</p>
				</div>
				<div>
					<H3>here is your user ID</H3>
					<p>your user ID is: <?php echo($User[0]);?></p>
					<p>your name is: <?php echo($User[1]);?>
					</p>
				</div>
				<div>
					<H3>here is the URL file path</H3>
					<p>your file path is: 
						<?php foreach($_SESSION as $x => $y){
							echo "$x: $y <br>";
						}
						?>
					</p>
				</div>
			
			</div>
		</div>
	</body>
</html>
