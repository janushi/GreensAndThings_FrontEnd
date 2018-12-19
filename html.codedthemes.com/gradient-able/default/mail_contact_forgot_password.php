<?php
session_start();
require 'PHPMailer/PHPMailerAutoload.php';

// if(!isset($_POST['submit']))
// {
// 	echo "Direct URL Called";
// 	exit();
// }
	// $name=$_POST['fnm_txt'];

	
	require "connection.php";

      
     // $verification=rand(1000, 9999);

    


	$email=$_SESSION['email_patient'];
	
$sel="SELECT * FROM users WHERE username='".$email."' ";
  $rs=mysqli_query($conn,$sel);

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
     $verification=$data['verificationid'];
     }
   }

	$body="Hey! you can reset your password using given verification code
	Carefully Enter given verification code for Successful login to the system...
	verification code:$verification";

	//echo $body;

	$sub="Varification code for reseting password in greens and things";
	$mail = new PHPMailer();
	$mail->SMTPDebug=2;
	//$mail = new PHPMailer(true);
	$mail->isSMTP(true);                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'uipmhtest@gmail.com';          // SMTP username
	$mail->Password = 'Aayushi@97'; // SMTP password
	$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                 // TCP port to connect to

	$mail->setFrom('uipmhtest@gmail.com', 'GreensAndThings');
	$mail->addReplyTo('uipmhtest@gmail.com', 'GreensAndThings');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	    header('location:verification_forgot_password.php');
	}

?>
