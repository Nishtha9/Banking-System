<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['user']);
$password=md5(mysqli_real_escape_string($con,$_POST['pass']));
$query="select * from login where email='$email';";
$res= mysqli_query($con, $query);
$num= mysqli_num_rows($res);
if ($num==0)
{ ?>
   <script> alert("No such account exists. Try again.");
   </script>
    <?php
}
else
{
    $r= mysqli_fetch_array($res);
    if ($r[2]==$password)
    {
        session_start();
        $_SESSION['id']=$r[0];
        $_SESSION['email']=$r[1];
        header('location:index.php');
    }
 else 
        
 {?>
   <script> alert("Incorrect password. Try again.");  </script>
    <?php
 }
}
?>