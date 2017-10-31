<?php 
	$hostname = "localhost";
	$password = "123";
	$username = "root";

	$connection = new mysqli($hostname , $username, $password);
	$sql = "CREATE DATABASE mydb";
	$createtable = "CREATE TABLE mydb (
		name VARCHAR(255) NOT_NULL,
		age INT(3) NOT_NULL,
		sex VARCHAR(255) NOT_NULL,

	)";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Mysql connection</title>
	<style type="text/css">

	</style>
 </head>
 <body>
 	<p>
 	<?php  
 		if ($connection->connect_error) {
		# code...
		die("connection failed".$connection->connect_error); 
		} else {
			echo "<span>". "connection to mysql database succesfully established" . "</span>";
			echo "</br>";
		}


		if ($connection->query($sql) === true) {
			echo "<span>"."mydb is succefully created" . "</span>" .
			     "<br>";
		} else {
			echo "<span>" . "mydb is not succefully created" . "</span>" . 
				"<br>";
		}
		$connection->close();
 	?></p>
 </body>
 </html>