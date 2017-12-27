<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="galeryStyle.css">
	<link rel="stylesheet" type="text/css" href="header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<div id="shadowStyle"></div>
	<section>
		<div class="subLinkbar">
			<div class="wrapper">
				<nav role="subNav">
					<ul>
						<li><a href="accountSetup.htm">Create account</a></li>
						<li><a href="">Make a post</a></li>
						<li><a href="">Browse content</a></li>
					</ul>
				</nav>
				<img src="img/border.png">
			</div>
		</div>



		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>The inovating world of Herring Inc</h1>
					<div class="text">
						<div class="columns2">
							<?php
								$dirname = "galery_img/";
								$images = glob($dirname."*.*");

								foreach($images as $image) {
							    	echo '<div class="element">
									<img class="normalimg" src="'.$image.'">
									</div>';
								}
							?>
						</div>
					</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</article>
			</div>
		</div>
	</section>
	<footer class="wrapper">
		<div class="bottomBar">
			<br><br>
			<nav role="bottomNav">
				<ul>
					<li><a href="">my name</a></li>
					<li><a href="">zelda</a></li>
					<li><a href="">därför</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
				</ul>
			</nav>
		</div>
	</footer>
</body>
</html>




