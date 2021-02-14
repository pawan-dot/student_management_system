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

  <div class="dashboard">
      <table align="center" width="30%">
<tr>
    <td>1.</td><td><a href="addstudent.php"> Insert Student Details</a></td>
</tr>
<br/>
<tr>
    <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr><br/>
<tr>
    <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
</tr>
</table>
  </div>
</body >
</html>