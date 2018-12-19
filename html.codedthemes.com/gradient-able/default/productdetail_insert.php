<?php session_start();

?>
<?php
 require 'connection.php';
// $u_id=$_POST['user_id'];
// $sel11="SELECT * FROM patient ";
//   $rs11=mysqli_query($conn,$sel11);
//   if(mysqli_num_rows($rs11)>0)
//   {
//     while($data11=mysqli_fetch_assoc($rs11))
//     {
//       if($data11['user_id']==$u_id)
//       {
       
//         echo "mail already exist";
//         exit();
//       }
//     }
//   }
 
$msg="";
$isa=1;
$isd=0;
date_default_timezone_set("Asia/Kolkata");
 $date=date("Y-m-d");
$same="";

if(isset($_POST['categoryname']))
{
  require 'connection.php';
  require 'finalupload.php';
  //quantity,price,description
  $cn=$_POST['categoryname'];
  $qty=$_POST['quantity'];
  $price=$_POST['price'];
$desc=$_POST['description'];
  $picname=$_FILES["fileToUpload"]["name"];

 // $_SESSION['email_patient']=$u_id;
 // $_SESSION['contact']=$cont;
$username=$_SESSION['username'];
  $sel21="SELECT * from users WHERE username='".$username."' ";
  $rs21=mysqli_query($conn,$sel21);
if(mysqli_num_rows($rs21)>0)
  {
    while($data21=mysqli_fetch_assoc($rs21))
    {
      $uid=$data21['uid'];
    }
  }
 
      $is=2;
      $ss="blocked";
    $qry="INSERT INTO productdetails(pid,uid,price,qty,descr,photo,isActive,isDeleted,createdOn,modifiedOn,createdBy,modifiedBy) VALUES(".$cn.",".$uid.",".$price.",".$qty.",'".$desc."','".$picname."',".$isa.",".$isd.",'".$date."','".$date."',".$uid.",".$uid.")";
  $rs1=mysqli_query($conn,$qry);

    if($rs1)
    {
      echo "happy";
      //echo "$msg";

    }
    else
    {
      
        echo $qry;
    }
  
}
else
{
  echo "plz select product";
}



 ?>