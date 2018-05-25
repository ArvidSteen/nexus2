<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
	<link rel="stylesheet" type="text/css" href="/nexus2/pages_home\otherandrandomPages\TMH.css">
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
			include 'tmhSSLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1 class="heading">Aum - Encyclopedia Hermetica: A Big History (Part 31)</h1>
					<div class="text">
						<p>
							<?php
								include 'TMH31aum.txt';
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









