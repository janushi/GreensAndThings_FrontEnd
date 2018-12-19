<?php session_start();

?>
<?php
$isActive=1;
$isDeleted=0; 
$date="";
$uid=0;
$cidd=0;
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['hobby']) )
{
  require 'connection.php';
$username=$_SESSION['username'];
 $hobby = $_POST['hobby'];

   
 //$email=$_SESSION['email_patient'];
//  $ss="blocked";
//  $is=2;
//  if($np==$cp)
//  {
  $sel="SELECT * from users WHERE username='".$username."' ";
  $rs=mysqli_query($conn,$sel);
if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      $uid=$data['uid'];
      // 

      foreach ($hobby as $hobys=>$value) {
            // echo $value;
                 
             $date=date("Y-m-d");

                $sel5="SELECT * from product WHERE pid=".$value." ";
                $rs5=mysqli_query($conn,$sel5);
              if(mysqli_num_rows($rs5)>0)
                {
                  while($data5=mysqli_fetch_assoc($rs5))
                  {
                    $cidd=$data5['cid'];
                  }
                }
             // echo $uid."  ".$value."  ".$isActive."  ".$isDeleted."  ".$date."  ";
           $sel1="INSERT INTO orders(uid, pid, cid, isActive, isDeleted, createdOn, modifiedOn, createdBy, modifiedBy) VALUES (".$uid.",".$value.",".$cidd.",".$isActive.",".$isDeleted.",'".$date."','".$date."',".$uid.",".$uid.") ";
            // $sel1="SELECT * from product";
         // echo $sel1;
            $rs1=mysqli_query($conn,$sel1);
          if($rs1)
            {
              echo "inserted successfully";
            }
            else
            {
              echo "plz match";
            }  

        }
         exit();
    }
  }
  else
  {
    echo "plz match";
  }


// }
// else
//   {
//     echo "plz match";
//   }
  
}
else
{
  echo "plz match";
}



 ?>