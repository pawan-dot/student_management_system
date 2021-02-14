<?php
//echo "fdwhufeg";
session_start();
if(isset($_SESSION['uid'])){
  // echo  $_SESSION['uid'];
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
  include('../dbcon.php');
  $sid=$_GET['sid'];
  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  //echo $sql;
  $run= mysqli_query($con,$sql);
  $data= mysqli_fetch_assoc($run);
  ?>

<form action="updatedata.php" method="post" enctype="multipart/form-data" >
<table  border="1"  style="width=70%"; align="center" margin-top:"40px;">

<tr>
<th> Roll No </th>
<td><input type="text" name="index" value="<?php echo $data['rollno'];?>" required></td>
</tr>

<tr>
<th>Full Name</th>
<td><input type="text" name="name" value="<?php echo $data['studentname'];?>"required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" value="<?php echo $data['city'];?>"required></td>
</tr>


<tr>
<th> Contact No</th>
<td><input type="text" name="contactno" value="<?php echo $data['contactno'];?>" required></td>
</tr>

<tr>
<th>Class</th>
<td><input type="text" name="class" value="<?php echo $data['class'];?>" required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" required></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['id'];?>"> 
 <input type="submit" name="submit" value="Submit">
 </td>
</tr>
</table>
</form>
</body>
</html>