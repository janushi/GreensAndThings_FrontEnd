<?php
session_start();

$id=$_GET['id'];
$cat="";
$cat1="";


// if(isset($_COOKIE['category'])){

//     $cat=$_COOKIE['name'];
// }
?>
 <!-- <head> -->
 <script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  

    $temp="";
  $(document).ready(function() {
    
     
$(".update").click(function(e) {                
        //alert("hi");
          e.preventDefault();
          var element = $(this);
          var update_id = element.attr("id");
          var update_name=$("#categoryname").val();
         // alert(update_id);
          //alert(update_name);
          var qrystrng = 'id='+update_id+'&'+'name='+update_name;
          alert(qrystrng);
           $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "checkupdatecategorynx.php",             
            data:qrystrng,
            dataType: "html",  //expect html to be returned                
            success: function(response){
                  alert(response);
            if(($.trim(response))=='Updated successfully')
          {
            alert("Data Updated Successfully!!");
             window.location.href='viewcategories.php';
          } 
          else if(($.trim(response))=='Category already exists.')
          {
            alert("Category already exists.");
             window.location.href='#';
          } 
          else
          {
              alert("Oops! Data is not updated Successfully!! ");
          }
              //window.location.href="viewcategories.php";
                 
            }
            

        });
    });

  });
  </script>
<?php require "header.php"; ?>

<?php require "connection.php"; ?>



<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header card">
<div class="card-block">
<h5 class="m-b-10">Update Category</h5>

</div>
</div>


<div class="page-body">
<form role="form" method="post" action="#" data-parsley-validate id="addcategoryform">
<div style="height:60%" class="card">
<div class="card-header">
<span></span>
</div>

<div style="margin-left: 65%;margin-right:30%;" class="row">
<div class="col-sm-12">
<a href="viewcategories.php"><button style="width:50%" type="button" class="btn btn-secondary">
<i class="ti-menu-alt" style="margin-left: -6px;"></i>
</button></a>
</div>
</div>
<br/>
<?php
 $qry = "SELECT * FROM category WHERE cid=$id";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);

                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {
                                              ?>
<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<input id="categoryname" name="categoryname" type="text" placeholder="Add Category" value="<?php echo $row['name'];?>" class="form-control" aria-label="Text input with dropdown button">
</div>
</div>
</div>
                                        <?php }} ?>

<div style="margin-left: 43%;margin-right: 35%" class="row">
<div class="col-sm-12">
<button style="width:50%" id="<?php echo $id ?>" name="submit" type="submit" class="btn btn-secondary update">
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



</form>




<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


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
