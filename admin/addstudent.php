<?php
//echo "fdwhufeg";
session_start();
if(isset($_SESSION['uid'])){
   //echo  $_SESSION['uid'];
 }
// else{
//     echo "error";
// }
else{
    header('location: ../login.php');//redirect log in page
}
?>
<?php
  include('header.php');
  include('title.php');
  ?>
<form action="addstudent.php" method="post" enctype="multipart/form-data" >
<table  border="5" align="center" style=" width:50%; margin:auto;margin-top:20px;padding:5px">

<tr>
<th> Roll No </th>
<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
</tr>

<tr>
<th>Full Name</th>
<td><input type="text" name="name" placeholder="Enter Full Name" required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter City" required></td>
</tr>


<tr>
<th> Contact No</th>
<td><input type="text" name="contactno" placeholder="Enter Contact No." required></td>
</tr>

<tr>
<th>Class</th>
<td><input type="text" name="class" placeholder="Enter class" required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" required></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>

   <?php
if (isset($_POST['submit']));
 { 
  include('../dbcon.php');
 
  $rollno= $_POST['rollno'];
  $sname= $_POST['name'];
 $city= $_POST['city'];
 $contactno= $_POST['contactno'];
  $class= $_POST['class'];
  $imagename=$_FILES['simg']['name'];
  $tempname=$_FILES['simg']['tmp_name'];

  move_uploaded_file( $tempname, "../dataimage/$imagename");

  $qry= "INSERT INTO `student`( `rollno`, `studentname`, `city`, `contactno`, `class` , `image`) VALUES ('$rollno','$sname','$city','$contactno','$class','$imagename')";
  $run= mysqli_query($con,$qry);
  //for echoing error:
  if($run == true){
   ?>
   
  <script>
  alert('data inserted successfully');
  </script>
  <?php
  }else{
    echo("Error: ".mysqli_error($con));
  }
  }
  ?>
  

  
 
