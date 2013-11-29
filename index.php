<!DOCTYPE html>
<html>
<head>
	<title>miniAgile</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<?php include 'serverconnect.php';  
	
		$all_user= "SELECT * FROM `user_table`";
		$user_query=mysql_query($all_user);
	 ?>
</head>

<body>
<div style="margin-top:20%; margin-left:15%; ">
<h1>Submit your Activities</h1>

<?php echo "Today is ". date("D, d M, Y") . "<br>" ; ?> 
<?php echo "Current Time is ". date("h:i:s"). "<br>" ;?>

	<form action="verify.php" method="POST">
	<div >
			<p>
				Submit as: 
					<select name="submit" style="width:150px;">
						<option value="">Select</option>
						<?php while($user=mysql_fetch_array($user_query)) { ?>
					  	<option value="<?php echo "$user[user]" ?>"> <?php echo "$user[f_name]" . " " . "$user[l_name]"  ?></option>
					  	<?php } ?>
					</select>
					 & PassKey: <input type="password" name="PassKey" required>
			</p>
			<input type="submit" value="LogIn">  <a href="new_reg.php"><input type="button" value="Register"></a>
	 </div>
	 
</div>
</body>
</html>