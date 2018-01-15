<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
	<link rel="stylesheet" type="text/css" href="defultStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

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
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_home/musicSSLB.php';
		?>
		
		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>Music Pics</h1>
					<div class="text">
						<?php
							$dirname = "pics/";
							$images = glob($dirname."*.*");

							foreach($images as $image) {
						    	echo '<img src="'.$image.'">';
							}
						?>
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









