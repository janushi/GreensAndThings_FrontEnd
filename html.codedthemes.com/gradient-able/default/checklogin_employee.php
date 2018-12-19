<?php
session_start();
set_time_limit(0);

//$uname = $_POST['uid_txt'];
//$pass = $_POST['pass_txt'];
if(isset($_POST['email_id']))
{
	$uname = $_POST['email_id'];
	$pass = $_POST['password'];
}


    
   $url="http://localhost:3000/seller_login_check";
  
  $someArray =    json_decode(get_data($url), true);
  $temp=null; // Replace ... with your PHP Array
  $flag=0;
  foreach ($someArray as $key => $value) {
  	if($value["username"]==$uname)
{
   $flag=1;
 }
  }

  if($flag==1)
  {
 foreach ($someArray as $key => $value) {
  echo $value["username"] . ", " . $value["pass"] . "<br>";
if($value["username"]==$uname && $value["pass"]==$pass)
{
   $_SESSION['username']=$uname;
    header("location:index.php");
 }
// else if($value["username"]!=$uname && $value["pass"]!=$pass)
// {
// 	header("location:login_my.php?er_ms=you have enter wrong user-id and password");
// }
else if($value["username"]==$uname && $value["pass"]!=$pass)
{
	header("location:login.php?er_ms=you have entered wrong password");
}
else if($value["username"]!=$uname && $value["pass"]==$pass)
{
	header("location:login.php?er_ms=you have entered wrong email id");
}
// else if($value["username"]!=$uname || $value["pass"]!=$pass)
// {
// 	header("location:login_my.php");
// }

}
   
  }
  else
  {
  	header("location:login.php?er_ms=you have entered wrong userid or not yet approved by admin");
  }


//   // Loop through Object
//  /// $someObject =   json_decode(get_data($url)); // Replace ... with your PHP Object
//   //foreach($someObject as $key => $value) {
//     //echo $value->empname . ", " . $value->empage . "<br>";
//   //}
// //echo($url);
// }
function get_data($url)
{
$ch = curl_init();
//$timeout = 500;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}



?>