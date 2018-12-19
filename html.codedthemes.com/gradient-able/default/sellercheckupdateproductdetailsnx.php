<?php
 
session_start();

$username=$_SESSION['username'];
$cpassword=$_SESSION['change_product'];
if($_FILES["fileToUpload"]["name"]=="") 
{
  
    
      $msg="";
      $is=1;
      $same="";

      if(isset($_POST['quantity']))
      {
        require 'connection.php';

       // $an=$_POST['productname'];
        $dt=$_POST['quantity'];
        $add=$_POST['price'];
        $cty=$_POST['description'];
     
        $cnt=1;
       
        date_default_timezone_set("Asia/Kolkata");
       
       //date("Y-m-d") 
            $is=1;
            $ss="active";
          
            $qry="UPDATE productdetails SET price=".$add.",qty=".$dt.",descr='".$cty."',modifiedOn='".date("Y-m-d")."' WHERE pdid=".$cpassword." ";
        $rs1=mysqli_query($conn,$qry);
          if($rs1)
          {
            $msg="updated successfully";
            echo "$msg";

          }
          else
          {
            $msg="not successfully";
              echo "$msg";
          }
        
      }
      else
      {
        echo "plz match1";
      }


}
else
{
       

      $msg="";
      $is=1;
      $same="";

      if(isset($_POST['quantity']))
      {
        require 'connection.php';
        require 'finalupload.php';
        
       //  $an=$_POST['productname'];
        $dt=$_POST['quantity'];
        $add=$_POST['price'];
        $cty=$_POST['description'];
     
        $picname=$_FILES["fileToUpload"]["name"];

      
       
        $cnt=1;

       
       
       
            $is=1;
            $ss="active";
          
            
  $qry="UPDATE productdetails SET price=".$add.",qty=".$dt.",descr='".$cty."',photo='".$picname."',modifiedOn='".date("Y-m-d")."' WHERE pdid=".$cpassword." ";
        $rs1=mysqli_query($conn,$qry);
          if($rs1)
          {
            $msg="updated successfully";
            echo "$msg";

          }
          else
          {
            $msg="not successfully";
              echo "$msg";
          }
       
      }
      else
      {
        echo "plz match2";
      }



}


 ?>

