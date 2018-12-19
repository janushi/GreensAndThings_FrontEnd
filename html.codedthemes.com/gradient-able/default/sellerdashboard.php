

<?php
session_start();
 require "header.php";

$cnt1=0;
$cnt2=0;
$cnt3=0;
$cnt11=0;
$cnt115=0;
$uid=0;
 ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>



<div class="pcoded-content">
<div class="pcoded-inner-content">



<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">
<!-- <a href="sellerviewcategories.php"> -->
<div class="col-md-12 col-xl-4">
<a href="sellerviewcategories.php">
<div class="card widget-statstic-card borderless-card">
<div class="card-header">
<div class="card-header-left">
<h5>My Categories</h5>
<p class="p-t-10 m-b-0 text-muted">Compared to all the categories given.</p>
</div>
</div>
<div class="card-block">
<i class="ti-more st-icon bg-primary"></i>
<div class="text-left">
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
   $qry22 = "SELECT COUNT(DISTINCT name) AS noc FROM category";
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

$qry221 = "SELECT COUNT(DISTINCT cid) AS noc FROM sellercategorymapping WHERE uid=".$uid."";
                                              // echo $qry;
                                              $rs221 = mysqli_query($conn,$qry221);
                                              if (mysqli_num_rows($rs221) > 0) {
                                        // output data of each row
                                        while($row221 = mysqli_fetch_assoc($rs221)) 
                                        {
                                          $cnt2=$row221['noc'];
                                        //  echo $cnt1;
                                        }
                                      } 
                                      ?>
                                     
<h3 class="d-inline-block"><?php echo 5; ?></h3>
<span class="f-right bg-success"><?php echo round(ceil($cnt2*100)/$cnt1,2); ?>%</span>
</div>
</div>
</div>
</a>
</div><!-- </a> -->
<div class="col-md-6 col-xl-4">
<a href="sellerviewproduct.php">
<div class="card widget-statstic-card borderless-card">
<div class="card-header">
<div class="card-header-left">
<h5>View Products</h5>
<p class="p-t-10 m-b-0 text-muted">Compare to all the products given.</p>
</div>
</div>
<div class="card-block">
<i class="ti-eye st-icon bg-warning txt-lite-color"></i>
<div class="text-left">
<?php 
$cid1=0;
$countproduct=0;
 

$qry1221 = "SELECT * FROM sellercategorymapping WHERE uid=".$uid."";
                                              // echo $qry;
                                              $rs1221 = mysqli_query($conn,$qry1221);
                                              if (mysqli_num_rows($rs1221) > 0) {
                                        // output data of each row
                                        while($row1221 = mysqli_fetch_assoc($rs1221)) 
                                        {
                                          $cid1=$row1221['cid'];
                                        //  echo $cnt1;
                                                      $qry1222 = "SELECT * FROM product WHERE cid=".$cid1."";
                                                          // echo $qry;
                                                          $rs1222 = mysqli_query($conn,$qry1222);
                                                          if (mysqli_num_rows($rs1222) > 0) {
                                                    // output data of each row
                                                    while($row1222 = mysqli_fetch_assoc($rs1222)) 
                                                    {
                                                      $countproduct=$countproduct+1;
                                                    //  echo $cnt1;
                                                    }
                                                  } 
                                        }
                                      } 


$qry122 = "SELECT COUNT(DISTINCT oid) AS noc FROM orders WHERE uid=".$uid."";
                                              // echo $qry;
                                              $rs122 = mysqli_query($conn,$qry122);
                                              if (mysqli_num_rows($rs122) > 0) {
                                        // output data of each row
                                        while($row122 = mysqli_fetch_assoc($rs122)) 
                                        {
                                          $cnt11=$row122['noc'];
                                        //  echo $cnt1;
                                        }
                                      } 
?>
<h3 class="d-inline-block"><?php echo 14; ?></h3>
<span class="f-right bg-danger"><?php echo round(ceil($cnt11*100)/$countproduct,2); ?>%</span>
</div>
</div>
</div>
</a>
</div>
<div class="col-md-6 col-xl-4">
<a href="sellerviewproductdetails.php">
<div class="card widget-statstic-card borderless-card">
<div class="card-header">
<div class="card-header-left">
<h5>Details of Products</h5>
<p class="p-t-10 m-b-0 text-muted">Details of Number of  Products.</p>
</div>
</div>
<div class="card-block">
<i class="ti-info-alt st-icon bg-success"></i>
<div class="text-left">
<?php 
 
$qry1225 = "SELECT COUNT(DISTINCT pid) AS noc FROM productdetails WHERE uid=".$uid."";
                                              // echo $qry;
                                              $rs1225 = mysqli_query($conn,$qry1225);
                                              if (mysqli_num_rows($rs1225) > 0) {
                                        // output data of each row
                                        while($row1225 = mysqli_fetch_assoc($rs1225)) 
                                        {
                                          $cnt115=$row1225['noc'];
                                        //  echo $cnt1;
                                        }
                                      } 
?>
<h3 class="d-inline-block"><?php echo 13; ?></h3>
</div>
</div>
</div>
</a>
</div>


<div class="col-sm-12">
<div class="card tabs-card">
<div class="card-block p-0">

<center><h4 style="margin-top:20px !important;">Product Details</h4></center>
<hr>

<div class="tab-content card-block" style="margin-top: -20px !important;">
<div class="tab-pane active" id="home3" role="tabpanel">
<div class="table-responsive">
<table class="table" >
<tr >
<th>Image</th>
<th>Product</th>
<th>Category</th>
<th>Price</th>
<th>Quantity</th>
<th>Description</th>
</tr>



<?php
$isa=1;
$cid=0;
$qry = "SELECT * FROM productdetails WHERE isDeleted=0 AND uid=".$uid." ";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);

                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {
                                              $qry155 = "SELECT * FROM product WHERE pid=".$row['pid']." ";
                    // echo $qry;
                                                $rs155 = mysqli_query($conn,$qry155);

                                                if (mysqli_num_rows($rs155) > 0) {
                                                    // output data of each row
                                                    while($row155 = mysqli_fetch_assoc($rs155)) 
                                                    {
                                                      $cid=$row155['cid'];
                                 ?>

<tr>
<td><img src="upload/<?php echo $row['photo']; ?>" height="50px" width="50px" class="img-fluid"></img></td>
<td><?php echo $row155['name']; }}?></td>
<?php $qry1 = "SELECT * FROM category WHERE cid=".$cid." ";
                    // echo $qry;
                                                $rs1 = mysqli_query($conn,$qry1);

                                                if (mysqli_num_rows($rs1) > 0) {
                                                    // output data of each row
                                                    while($row1 = mysqli_fetch_assoc($rs1)) 
                                                    { ?>
<td><?php echo $row1['name']; ?></td>
<?php }} ?>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['qty']; ?></td>
<td><?php echo $row['descr']; ?></td>
</tr>

<?php 
//} }
 }}?>


 

</table>
</div>

</div>

</div>





<!--<div class="col-xl-8 col-md-12">
<div class="card">
<div class="card-header">
<h5>Recent Orders</h5>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li><i class="fa fa-chevron-left"></i></li>
<li><i class="fa fa-window-maximize full-card"></i></li>
<li><i class="fa fa-minus minimize-card"></i></li>
<li><i class="fa fa-refresh reload-card"></i></li>
<li><i class="fa fa-times close-card"></i></li>
</ul>
</div>
</div>
<div class="card-block p-0">
<div class="table-responsive">
<table class="table">
<tr>
<th>Image</th>
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction</th>
</tr>
<tr>
<td><img src="../files/assets/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002413</td>
<td>Jane Elliott</td>
<td>06-01-2017</td>
<td><span class="label label-primary">Shipping</span></td>
<td>#7234421</td>
</tr>
<tr>
<td><img src="../files/assets/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002344</td>
<td>John Deo</td>
<td>05-01-2017</td>
<td><span class="label label-danger">Failed</span></td>
<td>#7234486</td>
</tr>
<tr>
<td><img src="../files/assets/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002653</td>
<td>Eugine Turner</td>
<td>04-01-2017</td>
<td><span class="label label-success">Delivered</span></td>
<td>#7234417</td>
</tr>
<tr>
<td><img src="../files/assets/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002156</td>
<td>Jacqueline Howell</td>
<td>03-01-2017</td>
<td><span class="label label-warning">Pending</span></td>
<td>#7234454</td>
</tr>
<tr>
<td><img src="../files/assets/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002344</td>
<td>John Deo</td>
 <td>05-01-2017</td>
<td><span class="label label-primary">Shipping</span></td>
<td>#7234489</td>
</tr>
</table>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>-->

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
<script src="../files/assets/pages/widget/excanvas.js"></script>

<script src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="../files/bower_components/modernizr/js/modernizr.js"></script>

<script src="../files/assets/js/SmoothScroll.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="../files/bower_components/chart.js/js/Chart.js"></script>

<script src="../files/assets/pages/widget/amchart/amcharts.js"></script>
<script src="../files/assets/pages/widget/amchart/gauge.js"></script>
<script src="../files/assets/pages/widget/amchart/serial.js"></script>
<script src="../files/assets/pages/widget/amchart/ammap.js"></script>
<script src="../files/assets/pages/widget/amchart/continentsLow.js"></script>
<script src="../files/assets/pages/widget/amchart/light.js"></script>

<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>

<script src="../files/assets/pages/dashboard/ecommerce-dashboard.js"></script>
<script src="../files/assets/js/script.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/gradient-able/default/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:10:21 GMT -->
</html>
