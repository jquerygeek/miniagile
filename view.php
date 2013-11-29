<?php include 'serverconnect.php';
 

	session_start();
	if ($_SESSION['Login']!="YES") {
		header('Location: error.php');
	}


	$data= "SELECT * FROM `table_miniagile`";
	$info_query=mysql_query($data);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>MiniAgile Log</title>
 </head>
 <body>	
 	
 	<h1>MiniAgile Log</h1>
 	<a href="index.php">Home</a><br>
 	<div align="center">
 	<table border="1px" width="800px;">
 		<tr><th>Submitted By </th> <th> Did</th> <th>Doing</th> <th>Blocker </th> <th>Question</th> <th>Reported At</th></tr>
 		<?php while ($info = mysql_fetch_array($info_query)) {
 		  echo "<tr>";
		  echo "<td>" . $info['submitted_by'] 	. "</td>";
		  echo "<td>" . $info['did'] 			. "</td>";
		  echo "<td>" . $info['doing'] 			. "</td>";
		  echo "<td>" . $info['blocker']		. "</td>";
		  echo "<td>" . $info['question'] 		. "</td>";
		  echo "<td>" . date("h:i",$info['time'] ). "<br>" .  date("D, d.m.y",$info['time'] ) 	. "</td>";
		  echo "</tr>";
 		} ?>

 	</table> 
 	</div>
 	
 
 </body>
 </html>