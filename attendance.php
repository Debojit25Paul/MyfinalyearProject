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
	$id=$_SESSION['i'];
    $sql=mysql_query("select * from attendance_student where User_id='$id'"); //shahzeb@mail.com
    while($row=mysql_fetch_array($sql))
    {
    if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}

     else{

        echo"<div align='center'>";

		echo"<br>Total Days: ".$row[1];
		echo"<br>Total Periods: ".$row[2];
        echo"<br>Days Present: ".$row[3];
        echo"<br>Periods Present: ".$row[4];
        echo"<br>Attendance Percentage: ".$row[5];
        echo"<br>Semester: ".$row[6];
    
		echo"</div>";
     }
    }
    ?>
</body>
</html>