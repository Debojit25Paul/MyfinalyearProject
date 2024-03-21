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
    include ("connect.php");
    $uid=$_POST['user_id'];
    $sem=$_POST['semester'];
    $sub=$_POST['subject'];
    $ph=$_POST['phase'];
    $mar=$_POST['marks'];
    $query="insert into internal_result (User_id,Semester,Phase,Subject,Marks) values ('$uid','$sem','$ph','$sub','$mar')";
    $result=mysql_query($query) or die("insert query error".mysql_error());
    echo "<script> window.location.href='result_f.php'</script>";

    ?>
</body>
</html>