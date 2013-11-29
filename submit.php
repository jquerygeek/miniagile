<?php include 'serverconnect.php';
	 session_start();
	 $user_name=$_SESSION["user_name"];
	 
	if ($_SESSION['Login']!="YES") {
		header('Location: error.php');
	}
	 
 ?>

<?php 
	$time=time();
	$sql="INSERT INTO `table_miniagile` (`did`, `doing`, `blocker`, `question`, `time` , `submitted_by`)
		VALUES ( '$_POST[done]', '$_POST[doing]', '$_POST[blocker]', '$_POST[question]', '$time', '$user_name' )" ; 
	
	if (!mysql_query($sql)) {	die('Error: Something Went Wrong ' . mysql_error($con)); }
	else {  ?> 
		<!DOCTYPE html>
		 <html>
		 <head>
		 	<title>Submitted</title>
		 </head>
		 <body>
		 	<div align="center">
				<h2>Your Information is Submitted Successfully!</h2>
			 	<a href="view.php"><input type="button" value="View Agile Log"> </a> <br>
			 	<a href="logout.php"><input type="button" value="Log Out"> </a>
			</div>	 	
		 </body>
		 </html> 

	<?php  } ?> 



