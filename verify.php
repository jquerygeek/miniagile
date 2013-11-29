<?php include 'serverconnect.php' ?>

<?php 
	$user_name=$_POST['submit'];
	$user_pass=$_POST['PassKey'];
	$sql_query= "SELECT * FROM `user_table` WHERE user='$user_name'";

	$verify= mysql_query($sql_query );
	
	 while ($check=mysql_fetch_array($verify)) {
	 	if ($user_name==$check['user'] && $user_pass==$check['pass']){ header( 'Location: tasks.php' ) ;}
	 	else {header('Location: index.php');}
	 }
 ?>

