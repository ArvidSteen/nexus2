<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<link rel="shortcut icon" href="/nexus2/logo/favicon.jpg">
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="/nexus2/pages_home/otherandrandomPages/katabasisStyle.css">
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
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_home/otherandrandomSSLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1 class="heading">Kenosis and Katabasis, Encyclopedia Hermetica: A Big History Part 45. Subtitles</h1>
					<div class="text">
						<p>
							<?php
								include 'Kenosis-and-Katabasis-Encyclopedia-Hermetica-A-Big-History-Part-45.txt';
							?>
						</p>

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









