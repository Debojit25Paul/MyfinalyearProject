<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="examcheck.php" name="exam" method="post" enctype="multipart/form-data">
Email: <input type="email" name="user" class="form-control" placeholder="Your email address" required=""><br><br>
Password: <input type="password" name="pass" class="form-control" placeholder="Your password" required=""><br><br>
Department: <select name="department">
  <option value="CSE">CSE</option>
  <option value="IT">IT</option>
  <option value="ECE">ECE</option>
  <option value="EE">EE</option>
  <option value="ME">ME</option>
  <option value="CE">CE</option>
</select><br><br>

Semester: <select name="semester">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select><br><br>
<input type="submit" value="Start Exam"/>
</form>
    
</body>
</html>