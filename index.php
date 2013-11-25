<!DOCTYPE html>
<html>
<head>
	<title>miniAgile</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<?php date_default_timezone_set('Asia/Dhaka'); ?> 
</head>
<body>
<h1>Submit your Activities</h1>

<?php echo "Today is ". date("D ,d M, Y") . "<br>" ; ?> 
<?php echo "Current Time is ". date("h:i:s"). "<br>" ;?>

	<form action="submit.php" method="POST">
	<div>
		<div align="center"> 
			<p>
				Submit as: 
					<select name="submit">
						<option value=" ">Select</option>
					  	<option value="Alamin Babar">Alamin Babar</option>
					 	<option value="Asif Nawaz">Asif Newaz</option>
					  	<option value="Mehedee Hasan">Mehedee Hasan</option>
					  	<option value="Zakir Hossain">Zakir Hossain</option>
					  	<option value="Ziaul Haq">Ziaul Haq</option>
					</select>
			</p>
		</div>

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