<!DOCTYPE html>
<html>
<head>
	<title>miniAgile</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<?php date_default_timezone_set('Asia/Dhaka'); ?> 
</head>
<body>
<div style="margin-top:20%; margin-left:15%; ">
<h1>Submit your Activities</h1>

<?php echo "Today is ". date("D ,d M, Y") . "<br>" ; ?> 
<?php echo "Current Time is ". date("h:i:s"). "<br>" ;?>

	<form action="verify.php" method="POST">
	<div >
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
				<input type="submit" value="Next">
			</p>
	 </div>
</div>
</body>
</html>