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
     $dep=$_SESSION['m'];
     $sql=mysql_query("select * from syllabus where Department='$dep'"); //shahzeb@mail.com
     while($row=mysql_fetch_array($sql))
     {
     if($id=='')
     {
         echo"<script>window.loction.href='index.html'</script>";
      }
 
      else{
 
         echo"<div align='center'>";
 
         echo"<br>Department: ".$row[0];
         echo"<br>Semester: ".$row[2];
         echo"<br>Subject: ".$row[1];
         echo"<br>";
         //$file='BTECH.pdf';
         //$filename='BTECH.pdf';
         //$syl=$row['syllabus'];
		 //echo"<a href='C:\xampp\htdocs\College\syllabus&courses'/><br>";
         //echo"<br>Syllabus: ".$row[3];
         $a=$row[3];

        echo "<iframe src='$a' height='750px' width='1000px' ></iframe>";


         echo"</div>";
      }
     }
    
    ?>
</body>
</html>