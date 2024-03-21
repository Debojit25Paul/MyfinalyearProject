<!DOCTYPE html>
<html lang="en">
<head>
<title>Seacom Engineering College</title>
     <link rel="icon" type="image/x-icon" href="images/College_Logo.jpg">
<!-- 

Known Template 

http://www.templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
<!--<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>
	<li><a href='#'>CSE</a></li>
    <li><a href='#' >IT</a></li>
    <li><a href='#' >ECE</a></li>
	<li><a href='#' >EE</a></li>
	<li><a href='#' >ME</a></li>
	<li><a href='#' >CE</a></li>
</ul>
</div>-->
    
<div align="right">
	<form action="logout.php" method="post">
		<input type="submit" value="logout"/>
		</form>
	</div>
	<?php
	include("connect.php");
    session_start();
    $dep=$_SESSION['m'];
    echo "<h1>Assignment(s):</h1>"."<br>";

    $sql=mysql_query("select * from assignments where Department='$dep' and Assign_material='Assignment'"); //shahzeb@mail.com 123
    while($row=mysql_fetch_array($sql))
     {
        if($dep=='')
        {
            echo"<script>window.loction.href='index.html'</script>";
         }
         else
         {
            
         
	
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2]."<br>";
        //echo"<br>Doc type:".$row[3]."<br>";
        
       // $a=$row[3];
        $a=$row[4];

        echo "<iframe src='$a' height='750px' width='1000px' ></iframe>"."<br>";
       

        echo"</div>";
    }
}
    echo "<h1>Material(s):</h1>"."<br>";
     
    $sql=mysql_query("select * from assignments where Department='$dep' and Assign_material='Material'"); //shahzeb@mail.com 123
	while($row=mysql_fetch_array($sql))
     {
     if($dep=='')
     {
         echo"<script>window.loction.href='index.html'</script>";
      }
 
      else
      {
 
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2]."<br>";
        //echo"<br>Doc type:".$row[3]."<br>";
        
       // $a=$row[3];
        $b=$row[4];

        echo "<iframe src='$b' height='750px' width='1000px' ></iframe>"."<br>";
       

        echo"</div>";
    }
}

   /* $sql=mysql_query("select * from assignments where Department='IT'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	
	{
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2];
        echo"<br>Assignment:".$row[3];
        echo"</div>";
    }

    $sql=mysql_query("select * from assignments where Department='ECE'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	
	{
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2];
        echo"<br>Assignment:".$row[3];
        echo"</div>";
    }

    $sql=mysql_query("select * from assignments where Department='EE'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	
	{
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2];
        echo"<br>Assignment:".$row[3];
        echo"</div>";
    }

    $sql=mysql_query("select * from assignments where Department='ME'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	
	{
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2];
        echo"<br>Assignment:".$row[3];
        echo"</div>";
    }

    $sql=mysql_query("select * from assignments where Department='CE'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	
	{
		echo"<div align='left'>";
        echo"<br>Department:".$row[0];
        echo"<br>Subject:".$row[1];
        echo"<br>Semester:".$row[2];
        echo"<br>Assignment:".$row[3];
        echo"</div>";
    }*/
    ?>

</body>
</html>