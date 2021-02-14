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
  <table align="center" style=" margin:auto;margin-top:15px;" >
  <form action="deletestudent.php" method="post">
      <tr>
          <th>Class:</th>
          <td><input type="number" name="class" placeholder="  class"> </td>
          <th>Student Name:</th>
         <td>
           <input type="text" name="sname" placeholder="Student Name"><br>
         </td>
         <td>
          <input type="submit" name="submit" value="Search">
           </td>
    </tr>
  </form>
  </table>


<table  align="center"  width="80%"  border="1"style=" margin:auto;margin-top:15px;" >
<tr style="background-color:#000; color:#fff">
<th>S.N.</th>
<th>Student Image</th>
<th>Name</th>
<th>Roll No.</th>
<th>Edit</th>

</tr>
<?php
  if(isset($_POST['submit']))
  {
   include('../dbcon.php');
   $class=$_POST['class'];
   $name=$_POST['sname'];

  $sql= "SELECT * FROM `student` WHERE `class`= '$class' AND `studentname` LIKE '%$name%'";
  $run=mysqli_query($con,$sql);
   ///echo $sql;
  if(mysqli_num_rows($run)<1)
  {
    echo "<tr><td colspan='5'>NO Record Found!!!</td></tr>";
  }

  else{
    $count=0;
  while($data=mysqli_fetch_assoc($run))
  {
    $count++;
   ?>

<tr>
    <td><?php echo $count;?></td>
    <td><img src="../dataimage/<?php echo $data['image'];?>" style="max-width:100px;"></td>
    <td><?php  echo $data['studentname'];?></td>
     <td><?php  echo $data['rollno'];?></td>
    <td><a href="deleteform.php?sid=<?php echo $data['id']?>">Delete</a></td>
</tr>
<?php
  }
  }
  }
  ?>
</table>
  