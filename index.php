<?php
session_start();
if($_SESSION['userID'] == null){
	$_SESSION['userID'] = -1;
}

?>
<!DOCTYPE html>i
<html>
	<head>
		<link rel="stylesheet" href="../styles/default_styles.css">
		<script type="text/javascript" src="../js/index.js"></script>
	</head>
	<body>
		<div id=titleBar>
			<H1>Hydra's Rest</H1>
			<form class="login">
				<label for="uname">username: </label>
				<input type="text" id="uname"></input><br>
				<label for="pword">password: </label>
				<input type="text" id="pword"></input>
			</form> 
		</div>


		<div id=menuBar >
			<ul>
				<li><a href="VampireFanPage.html">vtm fan page</a></li>
				<li><a href="3DTesting.html">3D testing</a></li>
				<li><a href="aboutMe.php">about me!</a></li>
				<li><a href="regPage.php">create Account</a></li>
			</ul>

		</div>

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
					<H3>Welcome to hydra's rest</H3>
					</p>Sit down, take a rest! this is a site I created to have a fun website I can mess with an modify so the place may change a bit but thats a part of the fun! take a look at my "about me" if you would like to know more!</p>
				</div>
				<div>
					<H3>this is for the old default page</H3>
					<a href="default_page.html">this is a link to a default page</a>
				</div>
				<div>
					<H3>here is your user ID</H3>
					<p>this is your user ID <?php echo($_SESSION['userID']) ?></p>
				</div>
			
			</div>
		</div>
	</body>
</html>
