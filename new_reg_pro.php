<?php include 'serverconnect.php';


	$sql="INSERT INTO `user_table` (`user`, `pass`, `f_name`, `l_name`) 
			VALUES ('$_POST[username]', '$_POST[password]', '$_POST[f_name]', '$_POST[l_name]') ";


	$result = mysql_query($sql);
	if(!$result){
		die('Error: ' . mysql_error());
	} else { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Registered</title>
		</head>
		<body>
		<div align="center">
			<h2>You're registered with following Information:</h2>
			<p>
				Name: <?php echo $_POST['f_name']. " ".$_POST['l_name'] ; ?> <br>
				UserName: <?php echo $_POST['username']; ?> <br>
				Password: *******
			</p>
		</div>
		</body>
		</html>

	<?php } ?>