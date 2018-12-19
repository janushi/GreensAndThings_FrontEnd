<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<?php
session_start();


$cat="";
$cat1="";
$cnt25=0;
$cnt26=0;
$cnt1=0;
$cnt2=0;
$flag=0;
// if(isset($_COOKIE['category'])){

//     $cat=$_COOKIE['name'];
// }
?>
 <!-- <head> -->
<script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#addcategoryform").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "chooseproductnext.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
        //alert(response);
        if(($.trim(response))=='plz match')
          {
            alert("Not Successfully!!");
             window.location.href='chooseproduct.php';
          } 
          else
          {
              alert("Data inserted Successfully!! ");
               window.location.href='chooseproduct.php';
          }
            }
        });
      });
});
//document.getElementById("categoryname").value="";
  </script>
<?php require "header.php"; ?>
<?php
require 'connection.php';
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
                           $qry22 = "SELECT COUNT(DISTINCT pid) AS noc FROM product";
                                              // echo $qry;
                                              $rs22 = mysqli_query($conn,$qry22);
                                              if (mysqli_num_rows($rs22) > 0) {
                                        // output data of each row
                                        while($row22 = mysqli_fetch_assoc($rs22)) 
                                        {
                                          $cnt1=$row22['noc'];
                                        //  echo $cnt1;
                                        }
                                      }
                                        $qry223 = "SELECT COUNT(DISTINCT oid) AS snoc FROM orders WHERE uid=".$uid." ";
                                              // echo $qry;
                                              $rs223 = mysqli_query($conn,$qry223);
                                              if (mysqli_num_rows($rs223) > 0) {
                                        // output data of each row
                                        while($row223 = mysqli_fetch_assoc($rs223)) 
                                        {

                                          $cnt2=$row223['snoc'];
                                         // echo $cnt2;
                                        }
                                      }

 ?>
<?php 
  if($cnt2!=$cnt1)
  {
        // $qry = "SELECT * FROM category WHERE isactive=1";
        // // echo $qry;
        // $rs = mysqli_query($conn,$qry);

 ?>  

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header card">
<div class="card-block">
<h5 class="m-b-10">Choose Products</h5>

</div>
</div>


<div class="page-body">
<form role="form" method="post" action="#" data-parsley-validate id="addcategoryform">
<div style="height:60%" class="card">
<div class="card-header">
<span></span>
</div>

<!-- <div style="margin-left: 65%;margin-right:30%;" class="row">
<div class="col-sm-12">
<a href="viewCategories.php"><button style="width:50%" type="button" class="btn btn-secondary">
<i class="ti-menu-alt" style="margin-left: -6px;"></i>
</button></a>
</div>
</div>
<br/> -->
<!-- <div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<input id="categoryname" name="categoryname" type="text" placeholder="Add Category" class="form-control" aria-label="Text input with dropdown button">
</div>
</div>
</div> -->
 <?php $qry15 = "SELECT * FROM sellercategorymapping WHERE isactive=1 AND uid=".$uid." ";
        // echo $qry;
        $rs15 = mysqli_query($conn,$qry15); 
        if (mysqli_num_rows($rs15) > 0) {
                                        // output data of each row
                                        while($row15 = mysqli_fetch_assoc($rs15)) 
                                        {


                                          $qry155 = "SELECT * FROM category WHERE cid=".$row15['cid']." ";
                                          // echo $qry;
                                          $rs155 = mysqli_query($conn,$qry155); 
                                          if (mysqli_num_rows($rs155) > 0) {
                                        // output data of each row
                                        while($row155 = mysqli_fetch_assoc($rs155)) 
                                        {
        ?>

<center>
<div class="col-sm-12 col-xl-6 m-b-30">
<div><h6><?php echo $row155['name']; ?></h6>
<hr style="color:red!important; background-color:green!important; "></div>
 <div class="border-checkbox-section">
 
 <?php }}
                                    // if (mysqli_num_rows($rs) > 0) {
                                    //     // output data of each row
                                    //     while($row = mysqli_fetch_assoc($rs)) 
                                    //     {
                         $qry2235 = "SELECT COUNT(DISTINCT pid) AS pnoc FROM product WHERE cid=".$row15['cid']." ";
                                              // echo $qry;
                                              $rs2235 = mysqli_query($conn,$qry2235);
                                              if (mysqli_num_rows($rs2235) > 0) {
                                        // output data of each row
                                        while($row2235 = mysqli_fetch_assoc($rs2235)) 
                                        {

                                          $cnt25=$row2235['pnoc'];
                                         // echo $cnt2;
                                        }
                                      }

                                       $qry22356 = "SELECT COUNT(DISTINCT oid) AS onoc FROM orders WHERE cid=".$row15['cid']." AND  uid=".$uid." ";
                                              // echo $qry;
                                              $rs22356 = mysqli_query($conn,$qry22356);
                                              if (mysqli_num_rows($rs22356) > 0) {
                                        // output data of each row
                                        while($row22356 = mysqli_fetch_assoc($rs22356)) 
                                        {

                                          $cnt26=$row22356['onoc'];
                                         // echo $cnt2;
                                        }
                                      }


                                      if($cnt25!=$cnt26)
                                      {
                                              $qry555 = "SELECT * FROM product WHERE cid=".$row15['cid']." ";
                                              // echo $qry;
                                              $rs555 = mysqli_query($conn,$qry555); 
                                              if (mysqli_num_rows($rs555) > 0) {
                                            // output data of each row
                                            while($row555 = mysqli_fetch_assoc($rs555)) 
                                            {
                                    //       //ahi nakhyu


                                    //       //ahi khatam

                                           $sel11="SELECT * from orders WHERE uid=".$uid." AND pid=".$row555['pid']." ";
                                           // echo $sel1;
                                              $rs11=mysqli_query($conn,$sel11);
                                            if(mysqli_num_rows($rs11) > 0)
                                              {
                                               
                                              }
                                              else
                                              {
                                                 

                                 ?>
  <div class="border-checkbox-group border-checkbox-group-success">
   <input class="border-checkbox" type="checkbox" name="hobby[]" value="<?php echo $row555['pid']; ?>" id="<?php echo $row555['pid']; ?>">
    <label class="border-checkbox-label" for="<?php echo $row555['pid']; ?>"><?php echo $row555['name']; ?></label> 
    </div>
     <?php 
   }
   }} }
   else{
    echo "No more products in this category";?> <i class="em em-sweat_smile"></i><?php
   }

   //}}
    //}
     
      ?>
      

</div>

</div>

</center>

<?php }} ?>

<div style="margin-left: 43%;margin-right: 35%" class="row">
<div class="col-sm-12">
<button style="width:50%" name="submit" type="submit" class="btn btn-secondary">
Add 
</button>
</div>
</div>
<br>
<div style="margin-left: 80%;margin-right: 20%" class="row">
<br>
</div>
</div>
</div>
</div>
</div>

</div></div>

</form>






<?php } 

  else
  {
        

 ?>  

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header card">
<div class="card-block">
<h5 class="m-b-10">Choose Products</h5>

</div>
</div>


<div class="page-body">
<form role="form" method="post" action="#" data-parsley-validate id="addcategoryform">
<div style="height:60%" class="card">
<div class="card-header">
<span></span>
</div>

<!-- <div style="margin-left: 65%;margin-right:30%;" class="row">
<div class="col-sm-12">
<a href="viewCategories.php"><button style="width:50%" type="button" class="btn btn-secondary">
<i class="ti-menu-alt" style="margin-left: -6px;"></i>
</button></a>
</div>
</div>
<br/> -->
<!-- <div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<input id="categoryname" name="categoryname" type="text" placeholder="Add Category" class="form-control" aria-label="Text input with dropdown button">
</div>
</div>
</div> -->

<center>
<div class="col-sm-12 col-xl-6 m-b-30">

 <div class="border-checkbox-section">
 
 <?php
                                   

                                          //ahi nakhyu


                                          //ahi khatam

                                          
                                                 

                                 ?>
  <div class="border-checkbox-group border-checkbox-group-success">
   
    </div>
    <?php 
    

      ?>
      

</div>

</div>

</center>

<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<h6>No more products to choose.<i class="em em-sweat_smile"></i></h6>
</div>
</div>
<br>
<div style="margin-left: 80%;margin-right: 20%" class="row">
<br>
</div>
</div>
</div>
</div>
</div>

</div></div>

</form>




<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php } ?>

<!-- else ending -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../files/assets/js/script.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/gradient-able/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:14:02 GMT -->
</html>
