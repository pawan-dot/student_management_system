<?php

include('../dbcon.php');
$id=$_POST['sid'];     //taking id from update page 
 $rollno= $_POST['index'];
 $sname= $_POST['name'];
$city= $_POST['city'];
$contactno= $_POST['contactno'];
 $class= $_POST['class'];
 $imagename=$_FILES['simg']['name'];
 $tempname=$_FILES['simg']['tmp_name'];

 move_uploaded_file( $tempname, "../dataimage/$imagename");

 $qry= "UPDATE `student` SET `rollno` = '$rollno', `studentname` = '$sname', `city` = '$city', `contactno` = '$contactno', `class` = '$class', `image` = '$imagename' WHERE `student`.`id` = $id;";
 $run= mysqli_query($con,$qry);
 //for echoing error:
 if($run == true){
  ?>
 <script>
 alert('data Updated successfully!!');
     
    window.open('updateform.php?sid=<?php echo $id?>', '_self');
     
 </script>
 <?php
 }else{
   echo("Error: ".mysqli_error($con));
 }
 
 ?>
 