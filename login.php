<?php
//if user already register
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/adminedash.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 align="center">Admin Login</h1>
    <form method="post" action="login.php" >

    <table class="p" align="center" style=" border:1px solid black;";>
    <tr>
            <td><input type="text" name="uname" placeholder="UserName" require></td>
        </tr>
    
    
       
    <tr>
            <td><input type="password" name="pass" placeholder="Password" require></td>
        </tr>
        <tr>
            <td align="center"><input type="submit"name="Login" value="Login"></td>
        </tr>
    </table>
    

    </form>
</body>
</html>

<?php
include('dbcon.php');
if(isset($_POST['Login'])){
    $Username=$_POST['uname'];
    $Password=$_POST['pass'];
    $qry="SELECT * FROM `admine` WHERE `username`='$Username' AND `password`='$Password'";
   $run= mysqli_query($con,$qry);

  $row=mysqli_num_rows($run);

   if($row<1){
?>
<script>
    alert('UserName Or Password not match!!!');
    window.open('login.php','_self');
</script>
<?php
   }
else{
    $data=mysqli_fetch_assoc($run);
    $id=$data['id'];
    //echo "<br/> id=".$id;
    
    $_SESSION['uid']=$id;
    header('location:admin/adminedash.php');
}
}
?>