<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$mysql_host="localhost";
		$mysql_user="root";
		$mysql_pass="";
	
		$connection=mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("couldnot connect to server");
		$db=mysql_select_db("college",$connection) or die("couldnot connect to database");
	?>
</body>
</html>