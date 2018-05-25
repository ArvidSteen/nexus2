<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
	<link rel="stylesheet" type="text/css" href="defultStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/pages_home/mainStyle.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_home/homeSLB.php';
		?>

		<?php
			include 'tmhSSLB.php';
		?>
		
		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<div class="rubrik">
						<h1>The Modern Hermeticist</h1>
					</div>
					<div class="text">
						Subtitles to many of <a href="https://www.youtube.com/user/ArcesseEum/featured">the modern hermeticist</a>'s videos are found here!
					</div>
				</article>
			</div>
		</div>
	</section>
	<br>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/footer.php';
	?>

</body>
</html>









