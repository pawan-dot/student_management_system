<?php

include('../dbcon.php');

$id=$_REQUEST['sid'];
 $qry= "DELETE FROM `student` WHERE `id`='$id'";
 $run= mysqli_query($con,$qry);
 //for echoing error:
 if($run == true){
  ?>
  
 <script>
 alert('data Deleted successfully!!');
     
    window.open('deletestudent.php', '_self');
     
 </script>
 <?php
 }else{
   echo("Error: ".mysqli_error($con));
 }
 
 ?>
 