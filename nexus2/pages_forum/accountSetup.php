<!DOCTYPE html>
<html>
<head>
	<?php
	    include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/meta.txt'
	?>
	
	<link rel="stylesheet" type="text/css" href="/nexus2/pages_forum/accountSetupStyle.css">
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
					<div class="caform-box">
						<form action="form.php" method="GET"> <!--We could write POST for it to be more secure-->
							<div class="pdetails">	
								<div class="SOF">
									<input type="text" name="email" placeholder="Email">
									<input type="text" name="first" placeholder="First Name">
									<input type="text" name="last" placeholder="Last Name">
								</div>
								<div class="SOF">
									<input type="radio" name="gender" value="male">Male
									<input type="radio" name="gender" value="female">Female
									<input type="radio" name="gender" value="other">Other
								</div>
							</div>
							<div style="height: 50px;"></div>
							<div class="cdetails">
								<div class="SOF">
									<div class="SOFw">Your clan:</div>
									<select>
										<option>Herring</option>
										<option>Ridgehead</option>
										<option>Salmon</option>
										<option>Mandarinfish</option>
										<option>Gulper</option>
									</select>
								</div>
								<div class="SOF">
									<div class="SOFw">Your backstory:</div>
									<textarea type="text" name="message" placeholder="Wandering soul" maxlength="500"></textarea>
								</div>
							</div>
							<dir style="height: 30px;"></dir>
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


<!--
<div class="SOF">
	<div class="SOFw"></div>
</div>
-->

