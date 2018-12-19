<?php session_start();

?>
<?php
 

$msg="";
$is=1;
$same="";
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['newpassword']) )
{
  require 'connection.php';

 $np=$_POST['newpassword'];
 $cp=$_POST['confirmpassword'];
 $email=$_SESSION['email_patient'];
 $ss="blocked";
 $is=2;
 if($np==$cp)
 {
  $sel="UPDATE users SET pass='".$np."' WHERE username='".$email."' ";
  $rs=mysqli_query($conn,$sel);

  if($rs)
  {
    echo "login.php";
  }
  else
  {
    echo "plz match";
  }


}
else
  {
    echo "plz match";
  }
  
}
else
{
  echo "plz match";
}



 ?>