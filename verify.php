<?php include 'serverconnect.php' ?>

<?php 
	$user_name=$_POST['submit'];
	$user_pass=$_POST['PassKey'];
	$verify= mysql_query($con, "SELECT * FROM `user` WHERE `user`='$user_name'" );
	var_dump($verify);
	// while ($check=mysql_fetch_array($verify)) {
	// 	if ($user_name==$check['user'] && $user_pass==$check['pass']){
	
 ?>

