<!doctype html>
<html>
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
<div align="right">
	<form action="logout.php" method="post">
		<input type="submit" value="logout"/>
		</form>
	</div>
	<?php
	include("connect.php");
	session_start();
	$id=$_SESSION['i'];
    $grade=$_SESSION['j'];
    echo $grade;
	echo $id;
	$_SESSION['k']=$id;
	
	
if($grade=='Student')
{
    echo "<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>";
	echo "<li><a href='profile.php'>Profile</a></li>";
    echo "<li><a href='attendance.php' >Attendance</a></li>";
    echo "<li><a href='schedule.php' >Class Schedule</a></li>";
	echo "<li><a href='online_class.php' >Join Class</a></li>";
	echo "<li><a href='syllabus.php' >Syllabus & Courses</a></li>";
	echo "<li><a href='assignment.php' >Assignments & Materials</a></li>";
	echo "<li><a href='document.php' >Document Status</a></li>";
	echo "<li><a href='fees.php' >Fees</a></li>";
	echo "<li><a href='exam.php' >Exam</a></li>";
	echo "<li><a href='result.php' >Result</a></li>";
	echo "<li><a href='edit.php' >Edit</a></li>";
    echo "</ul>";
	echo "</div>";   
					
	$sql=mysql_query("select * from student where User_id='$id'"); //shahzeb@mail.com 123
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{
		echo"<div align='left'>";
		
        $img=$row['Image'];
		echo"<img src='$img' height='300px' width='300px' align='left'/><br>";
		echo"<br> Name: ".$row[0];
		echo"<br>Department: ".$row[1];

		echo"</div>";
		
		echo"<div align='center'>";

		echo"<br>Address: ".$row[2];
		echo"<br>Date of Birth: ".$row[3];
        echo"<br>Blood Group: ".$row[5];
        echo"<br>University Roll Number: ".$row[6];
        echo"<br>Year of Admission: ".$row[7];
        echo"<br>User_id: ".$row[8];
        echo"<br>Student's Contact Number: ".$row[9];
        echo"<br>Guardian's Contact Number: ".$row[10];
		echo"<br>Semester: ".$row[11];
        $_SESSION['m']=$row[1];
		$_SESSION['n']=$row[11];
		echo"</div>";
		//$_SESSION['k']=$arr[8];
	
	}
}
elseif ($grade=='Faculty') //amitdas@mail.com 123
{
	echo "<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>";
	echo "<li><a href='profile.php'>Profile</a></li>";
    echo "<li><a href='attendence_f.php' >Attendance & Leaves</a></li>";
    echo "<li><a href='schedule_f.php' >Class Schedule</a></li>";
	echo "<li><a href='time_table_f.php' >My Schedule</a></li>";
	echo "<li><a href='online_class_f.php' >Arrange Class</a></li>";
	echo "<li><a href='study_material_f.php' >Study Material</a></li>";
	echo "<li><a href='assignment_f.php' >Assignments</a></li>";
	echo "<li><a href='documents_f.php' >Document Status</a></li>";
	echo "<li><a href='salary_f.php' >Salary</a></li>";
	echo "<li><a href='Student_f.php' >Manage Student's Attendeance</a></li>";
	echo "<li><a href='account_f.php' >Manage Account</a></li>";
	echo "<li><a href='online_exam_f.php' >Conduct Exam</a></li>";
	echo "<li><a href='result_f.php' >Result</a></li>";
    echo "</ul>";
	echo "</div>";   
    $sql=mysql_query("select * from faculty where User_id='$id'");
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
 	}
	else
	{ 
		echo"<div align='left'>";
		$img=$row['Image'];
		echo"<img src='$img' height='300px' width='300px' align='left'/><br>";
		echo"<br> Name: ".$row[0];
		echo"<br>Department: ".$row[7];

		echo"</div>";

		echo"<div align='center'>";

		echo"<br>Address: ".$row[2];
        echo"<br>User_id: ".$row[1];
        echo"<br>Contact: ".$row[3];
		echo"<br>Year of Joining: ".$row[4];
		echo"<br>Date of Birth: ".$row[5];
		echo"<br>Designation: ".$row[6];
		echo"<br>Blood_Group: ".$row[9];	

		
		echo"</div>";
	
	}
}
elseif ($grade=='HOD') //sagar@mail.com 123
{
	echo "<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>";
	echo "<li><a href='profile.php'>Profile</a></li>";
    echo "<li><a href='attendence_h.php' >Attendance & Leaves</a></li>";
    echo "<li><a href='schedule_h.php' >Class Schedule</a></li>";
	echo "<li><a href='time_table_h.php' >My Schedule</a></li>";
	echo "<li><a href='online_class_H.php' >Arrange Class</a></li>";
	echo "<li><a href='study_material_h.php' >Study Material</a></li>";
	echo "<li><a href='assignment_h.php' >Assignments</a></li>";
	echo "<li><a href='documents_h.php' >Document Status</a></li>";
	echo "<li><a href='salary_h.php' >Salary</a></li>";
	echo "<li><a href='Student_h.php' >Manage Student's Attendeance</a></li>";
	echo "<li><a href='account_h.php' >Manage Departmental Data</a></li>";
	echo "<li><a href='online_exam_H.php' >Conduct Exam</a></li>";
	/*echo "<li><a href='result_h.php' >Result</a></li>";*/
    echo "</ul>";
	echo "</div>";   
	$sql=mysql_query("select * from hod where User_id='$id'");
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
	}	
	else
	{
		echo"<div align='left'>";
		$img=$row['Image'];
		echo"<img src='$img' height='300px' width='300px' align='left'/><br>";
		echo"<br> Name: ".$row[0];
		echo"<br>Department: ".$row[7];

		echo"</div>";

		echo"<div align='center'>";

		echo"<br>Address: ".$row[2];
        echo"<br>User_id: ".$row[1];
        echo"<br>Contact: ".$row[3];
		echo"<br>Year of Joining: ".$row[4];
		echo"<br>Date of Birth: ".$row[5];
		echo"<br>Designation: ".$row[6];
		echo"<br>Blood_Group: ".$row[9];	

		
		echo"</div>";
	
	}
}
elseif($grade=='Office_Admin') //amit@mail.com 123
{

	echo "<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>";
	echo "<li><a href='profile.php'>Profile</a></li>";
    echo "<li><a href='attendence_f.php' >Attendance & Leaves</a></li>";
    echo "<li><a href='registration.php' >New Registration</a></li>";
	echo "<li><a href='registration_s.php' >Manage Student's Account</a></li>";
	echo "<li><a href='registration_t.php' >Manage Teaching Staff's Account</a></li>";
	echo "<li><a href='registration_n.php' >Manage Non-Teaching Staff's Account</a></li>";
	echo "<li><a href='assignment_f.php' >Student's Fees Status</a></li>";
	echo "<li><a href='documents_f.php' >Document Status</a></li>";
	echo "<li><a href='salary_f.php' >Salary</a></li>";
	//echo "<li><a href='account_a.php' >Manage All Accounts</a></li>";
	echo "<li><a href='account_o.php' >My Account</a></li>";
	//echo "<li><a href='online_exam_f.php' >Conduct Exam</a></li>";
	//echo "<li><a href='result_f.php' >Result</a></li>";
    echo "</ul>";
	echo "</div>";   
	$sql=mysql_query("select * from office_admin where User_id='$id'");
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
	}	
	else
	{
		echo"<div align='left'>";
		$img=$row['Image'];
		echo"<img src='$img' height='300px' width='300px' align='left'/><br>";
		echo"<br> Name: ".$row[0];
		echo"<br>Department: ".$row[7];

		echo"</div>";

		echo"<div align='center'>";

		echo"<br>Address: ".$row[2];
        echo"<br>User_id: ".$row[1];
        echo"<br>Contact: ".$row[3];
		echo"<br>Year of Joining: ".$row[4];
		echo"<br>Date of Birth: ".$row[5];
		echo"<br>Designation: ".$row[6];
		echo"<br>Blood_Group: ".$row[9];	

		
		echo"</div>";
	}
}
elseif($grade=='Master_Admin') //zeb@mail.com 123
{

	echo "<div class='collapse navbar-collapse' width='100%'>
         <ul class='nav navbar-nav navbar-nav-first'>";
	echo "<li><a href='profile.php'>Profile</a></li>";
    echo "<li><a href='attendence_f.php' >Attendance & Leaves</a></li>";
    //echo "<li><a href='registration.php' >New Registration</a></li>";
	echo "<li><a href='registration_s.php' >Manage Student's Account</a></li>";
	echo "<li><a href='registration_t.php' >Manage Teaching Staff's Account</a></li>";
	echo "<li><a href='registration_n.php' >Manage Non-Teaching Staff's Account</a></li>";
	echo "<li><a href='account.php' >All Accounts</a></li>";
	echo "<li><a href='documents_f.php' >Document Status</a></li>";
	echo "<li><a href='salary_f.php' >Salary</a></li>";
	echo "<li><a href='complain.php' >Complains</a></li>";
	echo "<li><a href='account_o.php' >My Account</a></li>";
	//echo "<li><a href='online_exam_f.php' >Conduct Exam</a></li>";
	//echo "<li><a href='result_f.php' >Result</a></li>";
    echo "</ul>";
	echo "</div>";   
	$sql=mysql_query("select * from master_admin where User_id='$id'");
	$row=mysql_fetch_array($sql);
	if($id=='')
	{
		echo"<script>window.loction.href='index.html'</script>";
	}	
	else
	{
		echo"<div align='left'>";
		$img=$row['Image'];
		echo"<img src='$img' height='300px' width='300px' align='left'/><br>";
		echo"<br> Name: ".$row[0];
		echo"<br>Department: ".$row[7];

		echo"</div>";

		echo"<div align='center'>";

		echo"<br>Address: ".$row[2];
        echo"<br>User_id: ".$row[1];
        echo"<br>Contact: ".$row[3];
		echo"<br>Year of Joining: ".$row[4];
		echo"<br>Date of Birth: ".$row[5];
		echo"<br>Designation: ".$row[6];
		echo"<br>Blood_Group: ".$row[9];	

		
		echo"</div>";
	}
}
else
{
    echo"<script>window.loction.href='index.html'</script>";
}


	?>
	
</body>
</html>