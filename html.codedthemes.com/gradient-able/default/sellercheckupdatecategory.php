<?php
session_start();
$result="";
$id=$_GET['id'];
$name="";
$isActive="1";
$is=0;


date_default_timezone_set("Asia/Kolkata");


  require 'connection.php';
  $qry = "SELECT * FROM sellercategorymapping WHERE isActive=".$is." AND scid=".$id." ";

        $rs = mysqli_query($conn,$qry);
 
                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                      // echo "hii";
                                      // exit();
                                        

 $data1 = array("isActive" => $isActive);
 $str=implode(' ', $data1);
$url="http://localhost:3000/sellercategorymapping/".$id;
 $data_string = json_encode($data1);                                                              

 $ch = curl_init($url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data1));
 $result = curl_exec($ch);
 if($result)
 {
       $msg="Updated successfully";?>
       <script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
       window.location.href="sellerviewcategories.php";</script><?php
     //  window.location.href = 'sellerviewcategories.php';
     // echo $result;
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
           $data1 = array("isActive" => $isActive);
         $str=implode(' ', $data1);
        $url="http://localhost:3000/sellercategorymapping1/".$id;
         $data_string = json_encode($data1);                                                              

         $ch = curl_init($url);

         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
         curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data1));
         $result = curl_exec($ch);
         if($result)
         {
               $msg="Updated successfully";?>
               <script src="jquery.js" type="text/javascript"></script>
           <script type="text/javascript">
               window.location.href="sellerviewcategories.php";</script><?php
             //  window.location.href = 'sellerviewcategories.php';
             // echo $result;
               exit();
         }
         
         else
         {
             $msg="not successfully";
              echo $result;
               exit();
         }
}
?>