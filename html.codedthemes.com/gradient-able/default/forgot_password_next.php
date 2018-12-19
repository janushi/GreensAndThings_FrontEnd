<?php session_start();

?>
<?php
   require 'connection.php';
$u_id=$_POST['email_id'];
$flag=0;
$sel11="SELECT * FROM users WHERE username='".$u_id."' ";
  $rs11=mysqli_query($conn,$sel11);
  if(mysqli_num_rows($rs11)>0)
  {
    $flag=1;
  }

if($flag==1)
{
   $verification=rand(1000, 9999);
   $qry="UPDATE users set verificationid=".$verification." WHERE username='".$u_id."' ";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
     echo "congratulations";
      //echo $_POST['email_id'];
    }
  
}
 else
    {
     
  echo "plz match";
    }
if(isset($_POST['email_id']))
{
  require 'connection.php';
$u_id=$_POST['email_id'];
  $_SESSION['email_patient']=$u_id;
}
 ?>