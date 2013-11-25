<?php include 'serverconnect.php' ?>
<?php 
	$time=time();
	$sql="INSERT INTO `table` (`submited`, `did`, `do_doing`, `blocker`, `question`, `time`)
		VALUES ( '$_POST[submit]','$_POST[done]', '$_POST[doing]', '$_POST[blocker]', '$_POST[question]', $time )" ; 
	
	if (!mysqli_query($con,$sql)) {	die('Error: ' . mysqli_error($con)); }
	else { echo "Submitted"; } 

?>

