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
    $a=8;
    $b=7;
    $c=6;
    $d=5;
    $e=4;
    $f=3;
    $g=2;
    $h=1;
    echo $a;
    
    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$a'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$b'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$c'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }


    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$d'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$e'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$f'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$g'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }

    $sql=mysql_query("select * from fees where User_id='$id' and Sem='$f'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Sem:".$row[1];
        echo"<br>Fees:".$row[2];
        echo"<br>Status:".$row[3];
        echo"<br>Payment Date:".$row[4];
        echo"</div>";
    }
    ?>
</body>
</html>