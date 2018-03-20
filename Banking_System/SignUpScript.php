<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$fn=mysqli_escape_string($con,$_POST['fname']);
$ln=mysqli_escape_string($con,$_POST['lname']);
$dob=mysqli_escape_string($con,$_POST['dob']);
$contact=mysqli_escape_string($con,$_POST['contact']);
$pan=mysqli_escape_string($con,$_POST['pan']);
$nation=mysqli_escape_string($con,$_POST['nation']);
$add= mysqli_escape_string($con,$_POST['add']);
$pin=mysqli_escape_string($con,$_POST['pin']);
$type=mysqli_escape_string($con,$_POST['type']);
$pass=md5(mysqli_escape_string($con,$_POST['pass']));
$pass2=md5(mysqli_escape_string($con,$_POST['repass']));
$name=$fn + " " + $ln;
 if ($pass!=$pass2)
 {
     ?> <script> alert("Passwords do not match"); </script> <?php
 }
if (strlen($pass)<6)
{
    ?> <script> alert("Password should have at least 6 characters."); </script> <?php
}
$q1="Select * from signup where email='$email';";
$res1= mysqli_query($con, $q1);
$n1= mysqli_num_rows($res1);
if ($n1!=0)
{
    ?> <script> alert("This email is already registered."); </script> <?php
}
 else {
   $q2="Insert into signup values('$name','$dob','$contact','$email','$pan','$nation','$add','$pin','$type','$pass');";
   $q3="insert into login (email,password) values ('$email','$pass');";
   $res2= mysqli_query($con, $q2);
   $res3= mysqli_query($con, $q3);
   if ($res2 && $res3)
   {
       echo "User successfully registered.";
    session_start();
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:index.php');
   }
   else
   {
       ?> <script> alert("Some error occured. Try again.") </script> <?php
   }
 }
?>