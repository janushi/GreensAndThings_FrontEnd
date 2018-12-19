<?php
session_start();
$result="";
$id=$_POST['id'];
$name="";
$flag=0;



date_default_timezone_set("Asia/Kolkata");

if(isset($_POST['name']) )
{
  require 'connection.php';
  $cat=$_POST['name'];
  $sel11="SELECT * FROM category WHERE name='".$cat."' ";
  $rs11=mysqli_query($conn,$sel11);
  if(mysqli_num_rows($rs11)>0)
  {
    $flag=1;
  }    
if($flag!=1)
{
 $data1 = array("name" => $cat);
$url="http://localhost:3000/category/".$id;
 $data_string = json_encode($data1);                                                              

 $ch = curl_init($url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data1));
 $result = curl_exec($ch);
 if($result)
 {
       $msg="Updated successfully";
      echo $msg;
       
       exit();
 }
 
 else
 {
     $msg="not successfully";
      echo $msg;
       exit();
 }
}
 else
{
      $msg="Product already exists.";
      echo $msg;
      exit();
}
}
?>