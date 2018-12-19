<?php require "sellerheader.php"; ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>



<div class="pcoded-content">
<div class="pcoded-inner-content">


<div class="w3-content w3-section" style="max-width:100px;max-height:100px;">
  <img class="mySlides" src="download.jpg" style="width:100%">
  <img class="mySlides" src="Micah-Gaudio-Smith-Mountain-Lake1200by700_0002_DSC02044Glenda.jpg" style="width:100%">
  <img class="mySlides" src="download.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">
<div class="col-md-12 col-xl-4">
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
<h3 class="d-inline-block">5,456</h3>
<span class="f-right bg-success">23%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-4">
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
<h3 class="d-inline-block">600</h3>
<span class="f-right bg-danger">-5%</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-4">
<div class="card widget-statstic-card borderless-card">
<div class="card-header">
<div class="card-header-left">
<h5>Details of Products</h5>
<p class="p-t-10 m-b-0 text-muted">View Details of Products.</p>
</div>
</div>
<div class="card-block">
<i class="ti-info-alt st-icon bg-success"></i>
<div class="text-left">
<h3 class="d-inline-block">$2,65,500</h3>
</div>
</div>
</div>
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
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction ID</th>
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
</table>
</div>
<div class="text-center">
<button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
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
