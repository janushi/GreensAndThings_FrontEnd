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
  $update_cid=$_POST['id1'];
  $sel11="SELECT * FROM product WHERE name='".$cat."' AND cid=".$update_cid." ";
  $rs11=mysqli_query($conn,$sel11);
  if(mysqli_num_rows($rs11)>0)
  {
    $flag=1;
  }    
if($flag!=1)
{
 $data1 = array("name" => $cat,"cid" => $update_cid);
$url="http://localhost:3000/product/".$id;
 $data_string = json_encode($data1);                                                              

 $ch = curl_init($url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data1));
 $result = curl_exec($ch);
 if($result)
 {
       $msg="updated successfully";
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
      $msg="product already exists.";
      echo $cat.$update_cid;
      exit();
}
}
?>