<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<link rel="shortcut icon" href="/nexus2/logo/favicon.jpg">
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="forumStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_forum/forumSLB.php';
		?>
		
		<div class="wrapper">
			<div class="mainText">
				<article>
					<div style="height: 50px;"></div>
					<div class="form-box">
						<form action="form.php" method="GET"> <!--We could write POST for it to be more secure-->
							<textarea name="message"></textarea>
							<button type="submit">Submit</button>
						</form>
					</div>
					<div style="height: 200px;"></div>
				</article>
			</div>
		</div>
	</section>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/footer.php';
	?>

</body>
</html>




