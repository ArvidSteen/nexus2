<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<link rel="shortcut icon" href="/nexus2/logo/favicon.jpg">
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="contactStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_contact/contactSLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>Contacts Herring Inc</h1>
					<div class="text">
						<div class="columns2">
							<div class="element">
								<p class="rubrik">Arvid Steen</p>
								<p class="brod">
									<?php
										include 'ArvidContact.txt';
									?>
									
								</p>
							</div>
							<div class="element">
								<p class="rubrik">Test is real</p>
								<p class="brod">Integer posuere id nisi ac feugiat. Suspendisse lacinia lectus et justo sagittis, eu lacinia nunc pharetra. Pellentesque in tempor ante. Vivamus tincidunt erat eget leo tristique feugiat. Ut pharetra neque ut lectus hendrerit, tristique rutrum libero commodo. Nulla iaculis molestie euismod. Ut eleifend porttitor neque, a imperdiet augue gravida id. Sed eu porttitor orci. Proin eget erat eu odio dapibus consequat eget id turpis. Duis eu ante nec nibh tincidunt fermentum vitae at tellus. Etiam augue arcu, efficitur in risus sit amet, tristique luctus diam. Duis porta eleifend ex, at molestie odio interdum eu.</p>
							</div>
						</div>
					</div>
					<div>
						
					</div>
				</article>
			</div>
		</div>
	</section>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/footer.php';
	?>
</body>
</html>




