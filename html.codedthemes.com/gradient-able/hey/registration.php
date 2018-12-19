<script src="jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#msform").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "seller_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
        //alert(response);
        if(($.trim(response))=='inserted successfully')
          {
            alert("registered successfully!");
             window.location.href='login.php';
          }
        
          else
          {
            alert("something went wrong");
             window.location.href=''+'#'+'';
          }
         
                 
            }
            

        });
      });
});
  </script>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/gradient-able/default/auth-multi-step-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:16:15 GMT -->
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

<link rel="stylesheet" href="../files/assets/pages/multi-step-sign-up/css/reset.min.css">
<link rel="stylesheet" href="../files/assets/pages/multi-step-sign-up/css/style.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
</head>
<body class="multi-step-sign-up">

<div class="theme-loader">
<div class="loader-track">
<div class="loader-bar"></div>
</div>
</div>

<form method="post" action="#" data-parsley-validate id="msform">

<ul id="progressbar" style="margin-left: 80px !important;">
<li class="active">Account Setup</li>
<li>Personal Details</li>
</ul>

<fieldset>
<a href="index.php"><img class="logo" src="../files/assets/images/logo.png" alt="logo.png"></a>
<h2 class="fs-title">Sign up</h2>
<h3 class="fs-subtitle">Let’s have a new beginning. Sign up for new you</h3>

<div class="input-group">
<input type="email" class="form-control" name="email_id" placeholder="Email" id="exampleInputEmail1" required/>
</div>
<div class="input-group">
<input type="password" class="form-control" name="password" placeholder="Password" id="exampleInputPassword1" required/>
</div>
<div class="input-group">
<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" />
</div>
<button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
</fieldset>
<fieldset>
<a href="index.php"><img class="logo" src="../files/assets/images/logo.png" alt="logo.png"></a>
<h2 class="fs-title">Personal Details</h2>
<h3 class="fs-subtitle">And something about yourself!</h3>

<div class="input-group">
<input type="text" class="form-control" name="name" placeholder="Name" id="phone_number" required autofocus data-parsley-pattern="^[A-Za-z]{2,30}" title="only characters required(atleast 2)" pattern="^[A-Za-z]{2,30}" />
</div>
<div class="input-group">
<textarea type="text" name="address" class="form-control" placeholder="Address" id="Address" required autofocus></textarea>
</div>
<div class="input-group">
<input type="text" class="form-control" name="zipcode" placeholder="Zipcode" id="phone_number" required autofocus data-parsley-pattern="^[0-9]{6,6}" title="only Number and 6 digits required" pattern="^[0-9]{6,6}" />
</div>
<div class="input-group">
<input type="text" class="form-control" name="mobileno1" placeholder="Mobile No." id="phone_number"  required autofocus data-parsley-pattern="^[0-9]{8,12}" title="only Number, atleast 8 digits" pattern="^[0-9]{8,12}"/>
</div>
<div class="input-group">
<input type="text" class="form-control" name="mobileno2" placeholder="Optional No." id="phone_number"  autofocus data-parsley-pattern="^[0-9]{8,12}" title="only Number, atleast 8 digits" pattern="^[0-9]{8,12}" />
</div>
<button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
<button type="submit" name="next" class="btn btn-primary" value="submit">Submit</button>
</fieldset>
</form>


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
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../files/assets/pages/multi-step-sign-up/js/main.js"></script>

<script src="../files/bower_components/i18next/js/i18next.min.js"></script>
<script src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script src="../files/assets/js/common-pages.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/gradient-able/default/auth-multi-step-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jun 2018 10:16:19 GMT -->
</html>
