<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<link rel="shortcut icon" href="/nexus2/logo/favicon.jpg">
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="galleryStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<div id="shadowStyle"></div>
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_gallery/gallerySLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>The inovating world of Herring Inc</h1>
					<div class="text">
						<div class="columns2">
							<?php
								$dirname = $_SERVER['DOCUMENT_ROOT'] . "/nexus2/gallery_img/";
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
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/footer.php';
	?>
	
</body>
</html>




