<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="accountSetupStyle.css">
	<link rel="stylesheet" type="text/css" href="/nexus2/header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<div id="shadowStyle"></div>
	<section>
		<?php
			include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/pages_forum/forumSLB.php';
		?>

		<div class="wrapper">
			<div class="mainText">
				<article>
					<p>what is life</p><br><br><br><br><br>
						<div class="form-box">
							<form action="form.php" method="GET"> <!--We could write POST for it to be more secure-->
								<div id="accountSetupform1">
									<input type="text" name="first" placeholder="First Name">
									<input type="text" name="last" placeholder="Last Name">
									<input type="radio" name="gender" value="male">Male
									<input type="radio" name="gender" value="female">Female
								</div>
								<br>
								<div id="accountSetupform2">
									Your backstory:
									<textarea type="text" name="message" placeholder="Wandering soul" maxlength="500"></textarea>
									Your clan:
									<select>
										<option>Herring</option>
										<option>Ridgehead</option>
										<option>Salmon</option>
										<option>Ziege</option>
										<option>Gulper</option>
									</select>
									<br><br>
									
								</div>
								<br>
								<div id="accountSetupform3">
								</div>
								<button type="submit">Submit</button>
							</form>
							<fieldset>
								<legend>Personalia:</legend>
								Name: <input type="text"><br>
								Email: <input type="text"><br>
								Date of birth: <input type="text">
							</fieldset>
						</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>hej
				</article>
			</div>
		</div>
	</section>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/footer.php';
	?>

</body>
</html>




