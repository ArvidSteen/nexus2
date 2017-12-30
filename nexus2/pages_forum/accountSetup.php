<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<link rel="shortcut icon" href="/nexus2/logo/favicon.jpg">
	<meta charset="utf-8">
	
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
					<div class="form-box">
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
					<!--<div>
						<form action="/action_page.php">
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="firstname" placeholder="Your name..">

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lastname" placeholder="Your last name..">

							<label for="country">Country</label>
							<select id="country" name="country">
								<option value="australia">Australia</option>
								<option value="canada">Canada</option>
								<option value="usa">USA</option>
							</select>
						  
						<input type="submit" value="Submit">
						</form>
					</div>-->
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

