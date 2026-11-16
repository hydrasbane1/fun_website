<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../styles/Vampire_styles.css">
	<script type="text/javascript" src="../js/Vampire.js"></script>
</head>
	<body>
		<div id="titleBar">
			<H1>Vampire the masqurade BUT IN PHP!!!</H1>
			<div class = "login">
				<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/loginPage.php")?>
			</div>
		</div>
		<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/Menubar.php")?>
		<div id="mainText">
			<?php include($SERVER["DOCUMENT_ROOT"]."PhP_modules/Sidebar.php")?>
			<div>
				<H2 id="subtitleTest">I really like vampire the masqurade</H2>
				<p> I have been trying to find a larp group for vampire the masqurade in the city I live in. Unfortunately most of them are dead. It seems covid killed them all. Kinda ironic that the thing that killed the vampire larp scene (if there ever was one at all) was a virus that wouldn't affect vampires. the fact that playing immortal was killed by a worry over mortality. not that I think that the lockdowns and precautions were a bad thing after all its only playing immortal not being so.</p>
			</div>
			<div>
				<H2 id="subtitleTest">I am testing the picture capability</H2>
				<img url = ./pictures/blood_background_02.jpg></img>
			</div>
			<div>
			<?php
			$number = "third";
			echo "<H2 id =\"subtitleTest\">This is created with PHP</H2>";
			echo "<p>this is a paragraph made with PHP it is the" . $number ." Div </p>";			
			?>
			</div>
	
		</div>
	</body>
</html>
