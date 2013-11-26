<?php include 'serverconnect.php' ?>

<?php 
	$sql="INSERT INTO `user_table` (`user`, `pass`, `f_name`, `l_name`) 
			VALUES ('$_POST[username]', '$_POST[password]', '$_POST[f_name]', '$_POST[l_name]') ";

	if (!mysql_query($con,$sql)) {die('Error: ' . mysqli_error($con));}
	else { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Registered</title>
		</head>
		<body>
			<h2>You're registered with following Information:</h2>
			<p>
				Name: <?php echo $_POST['f_name']. " ".$_POST['l_name'] ; ?> <br>
				UserName: <?php echo $_POST['username']; ?>
		</body>
		</html>

		<?php }
 ?>