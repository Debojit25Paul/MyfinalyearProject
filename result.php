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
    
    $sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

        

    $sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

    $sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='1' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='2' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='3' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='4' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='5' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='6' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='7' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='CA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='CA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='CA_3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='CA_4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='PA_1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

$sql=mysql_query("select * from internal_result where User_id='$id' and Semester='8' and Phase='PA_2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Exam: ".$row[2];
        echo"<br>Subject: ".$row[3];
        echo"<br>Marks: ".$row[4];
        echo"</div>";
    }
}

echo"<h1>EXTERNAL RESULT</h1>";

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='1'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='2'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='3'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='4'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='5'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='6'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='7'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}

$sql=mysql_query("select * from external_result where User_id='$id' and Semester='8'");
     while($row=mysql_fetch_array($sql))
     {
	//$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
        echo"<br>Semester: ".$row[1];
        echo"<br>Subject: ".$row[2];
        echo"<br>Marks: ".$row[3];
        echo"</div>";
    }
}



    ?>
    

</body>
</html>