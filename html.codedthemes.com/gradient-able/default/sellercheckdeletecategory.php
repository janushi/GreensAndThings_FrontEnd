<?php
session_start();
$result="";
$id=$_POST['id'];


date_default_timezone_set("Asia/Kolkata");

if(isset($_POST['id']) )
{
  require 'connection.php';
  $cat=$_POST['id'];

//  $data1 = array("isActiveZero" => 0, "isDeletedOne" => 1, "modifiedOn" => date("Y-m-d"), "modifiedBy" => 1 );
// $url="http://localhost:3000/category".$id;
//  $data_string = json_encode($data1);

//  $user_insert = curl_init($url);                                                                      
//  $data = array("a" => $a);
//  $ch = curl_init($this->_serviceUrl . $id);

//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//  curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
// $result=curl_exec($user_insert);, array(                                                                          
//     'Content-Type: application/json',                                                                                
//     'Content-Length: ' . strlen($data_string))                                                                       
// );                                                                                                                   

$url1="http://localhost:3000/sellercategorymapping/".$id;
//$recordId="8";
 $curl = curl_init($url1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($curl);
if($result)
{
      $msg="Deleted successfully";
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