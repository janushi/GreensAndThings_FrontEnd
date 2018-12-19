<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<?php
session_start();
$uid=0;
?>
<script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#addcategoryform").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "productdetail_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
       // alert(response);
        if(($.trim(response))=='happy')
          {
            alert("product inserted successfully");
             window.location.href='#';
          }
          else
          {
            alert("not successfully");
             window.location.href=''+'#'+'';
          }
         
                 
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
<h5 class="m-b-10">Add Product Details</h5>

</div>
</div>


<div class="page-body">
<form role="form" method="post" action="#" data-parsley-validate id="addcategoryform">
<div style="height:60%" class="card">
<div class="card-header">
<span></span>
</div>



<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
  <select name="categoryname" id="categoryname" class="form-control" autofocus>
    <option value="opt1">Select a Product</option>
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
  }?>
<?php
$qry = "SELECT * FROM orders WHERE uid=".$uid."";
        // echo $qry;
        $rs = mysqli_query($conn,$qry);

                                    if (mysqli_num_rows($rs) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($rs)) 
                                        {
                                        	$pid=$row['pid'];
                                        	$qry1 = "SELECT * FROM product WHERE pid=".$pid."";
										        // echo $qry;
										        $rs1 = mysqli_query($conn,$qry1);

		                                    if (mysqli_num_rows($rs1) > 0) {
		                                        // output data of each row
		                                        while($row1 = mysqli_fetch_assoc($rs1)) 
		                                        {
		                                        		$qry155 = "SELECT * FROM productdetails WHERE pid=".$pid." AND uid=".$uid."";
													        // echo $qry;
													        $rs155 = mysqli_query($conn,$qry155);

					                                    if (mysqli_num_rows($rs155) > 0) {
					                                        // output data of each row
					                                        }
					                                        else
					                                        {

                                 ?>


<option value="<?php echo $row['pid'];?>"><?php echo $row1['name']; ?></option>
<?php }} } } }?>

</select>
</div>
</div>
</br>

<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<input type="text" placeholder="Quantity" name="quantity" class="form-control" aria-label="Text input with dropdown button" id="phone_number" required autofocus data-parsley-pattern="^[0-9]{1,6}" title="only Number till 6 digits required" pattern="^[0-9]{1,6}">
</div>
</div>
</div>



<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<input type="text" placeholder="Price/KG" name="price" class="form-control" aria-label="Text input with dropdown button" id="phone_number" required autofocus data-parsley-pattern="^[0-9]{1,9}" title="only Number till 6 digits required" pattern="^[0-9]{1,9}">
</div>
</div>
</div>


<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<textarea rows="1" cols="50" name="description" placeholder="Description" class="form-control" aria-label="Text input with dropdown button" id="phone_number" required autofocus></textarea>
</div>
</div>
</div>


<div style="margin-left: 35%;margin-right: 35%" class="row">
<div class="col-sm-12">
<div class="input-group input-group-dropdown">
<label for="exampleInputFile">Picture:&nbsp;</label>
<input type="file" name="fileToUpload" value="fileupload" id="fileupload"> 
</div>
</div>
</div>


<div style="margin-left: 43%;margin-right: 35%" class="row">
<div class="col-sm-12">
<button style="width:50%" name="submit" type="submit" class="btn btn-secondary">
Add
</button>
</div>
</div>


<div style="margin-left: 43%;margin-right: 35%" class="row">
<div class="col-sm-12">
</br>
</div>
</div>

</div>
</form>
</div>

</div>
</div>




<br>
<br>
<br>


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
