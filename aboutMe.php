<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../styles/default_styles.css">
		<script type="text/javascript" src="../js/index.js"></script>
	</head>
	<body>
		<div id=titleBar>
			<H1><a href = index.html>Hydra's Rest</a></H1>
			<form class="login">
				<label for="uname">username: </label>
				<input type="text" id="uname"></input><br>
				<label for="pword">password: </label>
				<input type="text" id="pword"></input>
			</form> 
		</div>

		<?php 
			include 'navbar.php'; 
		?>

		<div id=MainContent>
			
			<div id=sideBar>
				<ul>
					<li><a href="">thing 1</a></li>
					<li><a href="">thing 2</a></li>
					<li><a href="">thing 3</a></li>
					<li><a href="">thing 4</a></li>
					<li><a href="">thing 5</a></li>
				</ul>
			</div>

			<div id="mainText">
				<div>
					<H3>About me!</H3>
					<p>27 - USA - EST - guy? - he/she/they - bisexual</p>
					<p>hello I am Hydrasbane, it's an old handle I have used for most of my life! I have a passion for making things I paint miniatures, draw and build legos. </p>
				</div>
			
			</div>
		
		</div>
	</body>
</html>
