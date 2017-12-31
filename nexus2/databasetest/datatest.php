<?php
	include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>datatest</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn, $sql);
		$reslutCheck = mysqli_num_rows($result);
		
		if($reslutCheck > 0) {
			while ($row = mysqli_fetch_assoc($reslut)) {
				echo $row['user_uid'] . "<br>";
			}
		}
	?>
</body>
</html>