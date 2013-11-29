<?php include 'serverconnect.php' ?>
<?php session_start(); 
	$user_name=$_SESSION["user_name"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update for Today</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	
	
</head>
<body>

	<?php 
		if ($_SESSION['Login']!="YES") {
			header('Location: error.php');
		}
	 ?>

	<form action="submit.php" method="POST">
	<div>
		<?php echo "Hello " . $user_name . "<br>";
	 		  echo "Today is ". date("D ,d M, Y") . "<br>";
	 		  echo "Current Time is ". date("h:i:s"). "<br>" ;
	 	?>

	 			
	 	<div class="divIndex" > 
	 		What Was Done: <br>
	 		<textarea class="taIndex" name="done"></textarea>
	 	</div>

	 	<div class="divIndex"> 
	 		What Was The Blocking: <br>
	 		<textarea class="taIndex" name="blocker"></textarea>
	 	</div>

	 	<div class="divIndex" >
	 		What is the plan for today: <br>
	 		<textarea class="taIndex" name="doing"></textarea>
	 	</div>

	 	<div class="divIndex">
	 		Do you have any Query you want an explanation: <br>
	 		<textarea class="taIndex" name="question"></textarea>
	 	</div> 

	 	<div align="center">
	 		<input type="submit" value="Post Activity" style="height: 2em; width:30%; font-size: 20px;" >
	 	</div>

	 </div>

</body>
</html>