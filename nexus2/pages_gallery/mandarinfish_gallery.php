<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
	<link rel="stylesheet" type="text/css" href="galleryStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_gallery/gallerySLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>Mandarinfish</h1>
					<div class="text">
						<div class="columns2">
							<?php
								$dirname = "img_mandarinfish/";
								$images = glob($dirname."*.*");

								foreach($images as $image) {
							    	echo '<div class="element"><img class="normalimg" src="'.$image.'"></div>';
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




