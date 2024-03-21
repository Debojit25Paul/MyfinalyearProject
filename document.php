<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="right">
	<form action="logout.php" method="post">
		<input type="submit" value="logout"/>
		</form>
	</div>
	<?php
	include("connect.php");
    session_start();
    $id=$_SESSION['k'];
    echo $id;
    
    $sql=mysql_query("select * from document where User_id='$id'");
     //while($row=mysql_fetch_array($sql))
     
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Adhaar: ".$row[0];
        echo"<br>Birth Certificate: ".$row[1];
        echo"<br>Class X: ".$row[2];
        echo"<br>Class XII/Diploma: ".$row[3];
        echo"<br>WBJEE: ".$row[4];
        echo"<br>JEE-MAINS: ".$row[5];
        echo"</div>";
    }
    ?>
    
</body>
</html>