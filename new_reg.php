<?php include 'serverconnect.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<div align="center">
			<h3>Please Complete The Form</h3>

			<form>
			<table>
				<tr><td> First Name 	  : </td> 	<td> <input type="text" name="f.name" required>  		</td></tr>
				<tr><td> Last Name 		  : </td> 	<td> <input type="text" name="l.name" required>  		</td></tr>
				<tr><td> User Name 		  : </td> 	<td> <input type="text" name="username" required> 		</td></tr>
				<tr><td> Password 		  : </td> 	<td> <input type="password" name="password" required>  	</td></tr>
				<tr><td> Repeat Password  : </td> 	<td> <input type="password" name="r.password" required> </td></tr>
			</table>

			<input type="submit" value="Register">	<input type="reset">
	</div>

</body>
</html>