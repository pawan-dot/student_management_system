<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h3> <a href="login.php" > admin_Login</a></h3>
    <h1>Welcome To Student Management System</h1>

    <form method="post" action="index.php">
    <table align="center">
    <tr>
    <td colspan="2" align="center"><h4>Student Imformation</h4></td>
    </tr>
    <tr>
    <td align="center">Choose Standerd:</td><td>
    <select  align ="center" name="class" require>
    <option value="1">1st</option>
    <option value="2">2nd</option>
    <option value="3">3rd</option>
    <option value="4">4th</option>
    <option value="5">5th</option>
    <option value="6">6th</option>
    
    <option value="7">7th</option>
    <option value="8">8th</option>
    <option value="9">9th</option>
    <option value="10">10th</option>
    <option value="11">11th</option>
    <option value="12">12th</option>
    
    </select>
</td>
    </tr>
    <tr>
    <td align="right">Student Rollno..</td>
    <td>
    
    <input type="text" name="rollno" required>
    </td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
 { 
    $class= $_POST['class'];
    $rollno= $_POST['rollno'];
    
   include ('dbcon.php');
   include ('function.php');

   showdetails($class,$rollno);
 }
  ?>