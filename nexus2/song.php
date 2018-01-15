

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
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/XXX.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article><br><br>
					<h1>Heading</h1>
					<div class="text">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/_-xIgeuYeCc?autoplay=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						<br><br><br>
						<script type="text/javascript">
							var $ = document.querySelector.bind(document);

							// Once the user clicks a custom fullscreen button
							$(playButtonClass).addEventListener('click', function(){
							  // Play video and go fullscreen
							  player.playVideo();

							  var playerElement = $(playerWrapperClass);
							  var requestFullScreen = playerElement.requestFullScreen || playerElement.mozRequestFullScreen || playerElement.webkitRequestFullScreen;
							  if (requestFullScreen) {
							    requestFullScreen.bind(playerElement)();
							  }
							})
						</script>	
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

