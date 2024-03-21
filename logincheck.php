<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include("connect.php");
	session_start();
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$q=md5($p);
	$sql = mysql_query("select * from mail where User_id='$u' and Pass='$p'");
	$row=mysql_num_rows($sql);
	if($row==1)
	{
		$arr=mysql_fetch_array($sql);
		$_SESSION['i']=$arr[2];
        $_SESSION['j']=$arr[1];
		echo"<script>window.location.href='profile.php'</script>";

		
	}
	else{
		$a=1;
		echo"<script>window.location.href='index.html'</script>";
	}
	?>
</body>
</html>