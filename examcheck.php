<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
		echo"<script>window.location.href='examcheck_1.php'</script>";

		
	}
	else{
		$a=1;
		echo"<script>window.location.href='profile.html'</script>";
	}
	?>
</body>
</html>