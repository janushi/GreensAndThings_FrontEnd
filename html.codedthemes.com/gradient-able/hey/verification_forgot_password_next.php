<?php session_start();

?>
<?php
 

$msg="";
$is=1;
$same="";
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['verificationid']) )
{
  require 'connection.php';

 $ver=$_POST['verificationid'];
 $email=$_SESSION['email_patient'];
 $ss="blocked";
 $is=2;
 
  $sel="SELECT * FROM users WHERE username='".$email."' ";
  $rs=mysqli_query($conn,$sel);

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['verificationid']==$ver)
      {

      echo "new_password.php";
      //echo "$msg";

   
      }
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