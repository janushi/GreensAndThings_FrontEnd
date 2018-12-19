<?php
session_start();
require 'connection.php';

$cat="";


// if(isset($_COOKIE['category'])){

//     $cat=$_COOKIE['name'];
// }
?>
<script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
   $temp="";
  $(document).ready(function() {
    
      $(".delete").click(function(e) {                
          //alert("hi");
          e.preventDefault();
          var element = $(this);
          var del_id = element.attr("id");
         // alert(del_id);
          var qrystrng = 'id='+del_id;
        // alert(qrystrng);
         var retval=confirm("Are you sure you want to delete? ");
                if(retval==true)
                {
                    $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "sellercheckdeletecategory.php",             
                 data:qrystrng,
               dataType: "html",  //expect html to be returned                
                 success: function(response){
                alert(response)
                         window.location.href="sellerviewcategories.php";
                //return true;
                          } 
});
            }
                else
                {
                    $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "sellerviewcategories.php",             
                 data:qrystrng,
               dataType: "html",  //expect html to be returned                
                 success: function(response){
                
                         window.location.href="sellerviewcategories.php";
                //return true;
                          }   
});
            }
            

        
    });
$(".update").click(function(e) {                
        // alert("hi");
          e.preventDefault();
          var element = $(this);
          var update_id = element.attr("id");
         // alert(del_id);
          var qrystrng = 'id='+update_id;
           $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "sellercheckupdatecategory.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
              window.location.href="viewcategories.php";
//          alert(response);          
            }
            

        });
      });
});
  </script>

<?php require "header.php"; ?>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header card">
<div class="card-block">
<h5 class="m-b-10">List of Categories</h5>

</div>
</div>


<div class="page-body">

<div class="card">
<div class="card-header">
<span></span>
</div>
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" action="#" data-parsley-validate class="table table-striped table-bordered nowrap">
<?php
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
 ?>
<thead>
<tr>
<th>Name</th>
<th>Status</th>
<th>Block</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
$is=0;
$isa=1;
$isb=0;
 // echo $data21['uid'];
$qry = "SELECT * FROM sellercategorymapping WHERE isDeleted=".$is." AND uid=".$uid." ";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);

                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {

                                          $qry9 = "SELECT * FROM category WHERE cid=".$row['cid']." ";
        // echo $qry;
                                              $rs9 = mysqli_query($conn,$qry9);

                                              if (mysqli_num_rows($rs9) > 0) {
                                                  // output data of each row
                                                  while($row9 = mysqli_fetch_assoc($rs9)) 
                                                  {
                                 ?>
<tr>
<td><?php echo $row9['name']; ?></td>
<?php if($row['isActive']==$isa){ ?>
<td ><span style="color:white;background-color: green; padding-right: 4%;padding-left: 4%; border-radius: 8%;"><?php echo "active"; ?></span></td>
<?php } else{ ?>
<td ><span style="color:white;background-color: red; padding-right: 4%;padding-left: 4%; border-radius: 8%;"><?php echo "block"; ?></span></td>
<?php } ?>
<td><a href="sellercheckupdatecategory.php?<?php echo "id=".$row['scid']?>"><button type="button" class="btn btn-warning"  style="border-radius: 50%; width:5px !important;"><i class="ti-na" style="color:white; margin-left:-5px !important;"></li></button></a></td>
<td><button type="button" class="btn btn-danger delete" style="border-radius: 50%; width:5px !important;" href="#" id="<?php echo $row['scid']; ?>" ><i class="ti-trash" style="color:white; margin-left:-5px !important;"></li></button></td>

</tr>
<?php }} } } ?>
</tbody>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</table>


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
