<?php
session_start();
 date_default_timezone_set("Asia/Kolkata");
$result="";
if(isset($_POST['email_id']) && $_POST['password']==$_POST['cpassword'])
{
  require 'connection.php';
  //require 'finalupload.php';
  $email_id=$_POST['email_id'];
  $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];
   $name=$_POST['name'];
  $address=$_POST['address'];
  $zipcode=$_POST['zipcode'];
  $mobileno1=$_POST['mobileno1'];
$mobileno2=$_POST['mobileno2'];

 $data1 = array("name" => $name, "address" => $address, "zipcode" => $zipcode, "mobileNum1" => $mobileno1, "mobileNum2" => $mobileno2, "username" => $email_id, "pass" => $password, "isActive" => 0, "isDeleted" => 0, "createdOn" => date("Y-m-d"), "modifiedOn" => date("Y-m-d"), "createdBy" => 0, "modifiedBy" => 0 , "rid" => 2);

 $data_string = json_encode($data1);

 $user_insert = curl_init('http://localhost:3000/seller_login_check');                                                                      
curl_setopt($user_insert, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($user_insert, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($user_insert, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($user_insert, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result=curl_exec($user_insert);

if($result)
{
      $msg="inserted successfully";
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
?>