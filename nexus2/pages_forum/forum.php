<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
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
					<?php
						include 'post.php';
					?>
					
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




