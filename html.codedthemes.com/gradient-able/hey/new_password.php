<script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#newpass").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            //alert("hii");
            type: "POST",
            url: "new_password_next.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          //alert(response);
          if(($.trim(response))=='plz match')
          {
            alert("password and confirmpassword not matched");
             window.location.href='new_password.php';
          }
         else if(($.trim(response))=='login.php')
          {
            alert("congratulations! now login once");
             window.location.href='login.php';
          }
          else
          {
             alert("password and confirmpassword not matched");
             //window.location.href=''+'header.php'+'';
               window.location.href='new_password.php';
          }
                 
            }
            

        });
      });
});
  
  </script>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/gradient-able/default/auth-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:16:19 GMT -->
<head>
<title>Greens and things </title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="codedthemes" />

<link rel="icon" href="../files/assets/images/favicon.ico.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
</head>
<body class="fix-menu">

<div class="theme-loader">
<div class="loader-track">
<div class="loader-bar"></div>
</div>
</div>

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid" style="margin-top:-20px">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body mr-auto ml-auto">
<form class="md-float-material" role="form" method="post" action="#" id="newpass" data-parsley-validate enctype="multipart/form-data">
<div class="text-center">
<a href="index.php"><img src="../files/assets/images/logo.png" alt="logo.png"></a>
</div>
<div class="auth-box">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-left">Change Password</h3>
</div>
</div>
<div class="input-group">
<input type="password" class="form-control" placeholder="New Password" name="newpassword" id="user_login" autocomplete="username" />
</div>
<div class="input-group">
<input type="password" class="form-control" placeholder="Confirm Password"  name="confirmpassword" id="user_login" autocomplete="username" />
<span class="md-line"></span>
</div>
<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="submit" value="Reset password">OK</button>
</div>
</div>
<hr />

</div>
</form>

</div>

</div>

</div>

</div>

</section>


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
<script src="../files/assets/js/common-pages.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/gradient-able/default/auth-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:16:19 GMT -->
</html>
