<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="accountSetupStyle.css">
	<link rel="stylesheet" type="text/css" href="header.css">

</head>
<body style="background-color:#999;">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/nexus2/header.php';
	?>
	
	<div id="shadowStyle"></div>
	<section>
		<div class="subLinkbar">
			<div class="wrapper">
				<nav role="subNav">
					<ul>
						<li><a href="accountSetup.htm">Create account</a></li>
						<li><a href="">Make a post</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
						<li><a href="">Browse content</a></li>
					</ul>
				</nav>
				<img src="img/border.png">
			</div>
		</div>


		
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
						</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>hej
				</article>
			</div>
		</div>
	</section>
	<footer class="wrapper">
		<div class="bottomBar">
			<br><br>
			<nav role="bottomNav">
				<ul>
					<li><a href="">my name</a></li>
					<li><a href="">zelda</a></li>
					<li><a href="">därför</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
					<li><a href="">varför?</a></li>
				</ul>
			</nav>
		</div>
	</footer>
</body>
</html>




