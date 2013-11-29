<?php include 'serverconnect.php' ?>

<?php 
	$user_name=$_POST['submit'];
	$user_pass=$_POST['PassKey'];
	$sql_query= "SELECT * FROM `user_table` WHERE user='$user_name'";

	$verify= mysql_query($sql_query );
	
	 while ($check=mysql_fetch_array($verify)) {
	 	if ($user_name==$check['user'] && $user_pass==$check['pass']){ 
	 		session_start();
	  		$_SESSION["Login"] = "YES";
	  		$_SESSION["user_name"] = $user_name;
	 		header( 'Location: tasks.php' ) ;
	 	}
	 	else {
	 		session_start();
	 		$_SESSION["Login"]="NO";
	 		header('Location: index.php');
	 	}
	 }
 ?>

