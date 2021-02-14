<?php
function showdetails($class,$rollno)
{
  include('dbcon.php');
$qry="SELECT * FROM `student` WHERE `class`='$class' AND `rollno`='$rollno'";

$run=mysqli_query($con,$qry);

if(mysqli_num_rows($run)>0)
{
 $data=mysqli_fetch_assoc($run);
 //echo $qry;
?>

<link rel="stylesheet" href="css/style.css">
<table align="center" style="margin-top:50px; background-color:rgba(255, 99, 71, 0.5);">
  <tr>
<th colspan="3">Student Details</th>
</tr>
<tr>
<td rowspan="5"><img src="dataimage/<?php echo $data['image'];?>" style="max-hight:150px; max-width:120px;" ></td>
<th>Roll No.</th>
<td><?php echo $data['rollno'];?></td>
</tr>

<tr>
   <th>Name.</th>
    <td><?php echo $data['studentname'];?></td>
</tr>
<tr>
   <th>class</th>
    <td><?php echo $data['class'];?></td>
</tr>
<tr>
   <th>contactno:</th>
    <td><?php echo $data['contactno'];?></td>
</tr>
<tr>
   <th>city</th>
    <td><?php echo $data['city'];?></td>
</tr>
</table>

<?php 
}
else

{
    echo "<script> alert('NO DATA FOUND!!!');</script>";
}

}
?>