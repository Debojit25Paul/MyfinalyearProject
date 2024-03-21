<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload Internal Result</h1>
    <form action="result_f1.php" name="result" method="post" enctype="multipart_data">
        User Id:<input type="text" name="user_id"><br>
        Semester:<select name="semester">
            <?php
            for($i=1;$i<=8;$i++)
            {?><option><?php echo $i;?></option><?php } ?></select><br>
        Subject:<input type="text" name="subject"><br>
        Phase:<select name="phase">
              <?php $arr=array('CA_1','CA_2','CA_3','CA_4','PA_1','PA_2');
              foreach($arr as $i)
              {?>
              <option><?php echo $i;?></option>
              <?php } ?></select><br>
        Marks:<select name="marks">
            <?php
            for($i=1;$i<=25;$i++)
            {?><option><?php echo $i;?></option><?php } ?></select><br>
            <input type="submit" value="Upload internal marks" >
</form>
<h1>Upload External Result</h1>
<form action="result_f2.php" name="result_1" method="post" enctype="multipart_data">
    User Id:<input type="text" name="user_id"><br>
        Semester:<select name="semester">
            <?php
            for($i=1;$i<=8;$i++)
            {?><option><?php echo $i;?></option><?php } ?></select><br>
            <intput type="submit" value="Upload External Marksheet">
</form>
</body>
</html>