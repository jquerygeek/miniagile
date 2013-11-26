<?php include 'serverconnect.php' ?>

<?php 
	$user_name=$_POST['submit'];
	$user_pass=$_POST['PassKey'];
	$sql_query= "SELECT * FROM `user_table`";
	var_dump($sql_query);
	$verify= mysql_query($sql_query );
	var_dump($verify);
	// while ($check=mysql_fetch_array($verify)) {
	// 	if ($user_name==$check['user'] && $user_pass==$check['pass']){ 


	
 ?>

