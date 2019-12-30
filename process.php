<?php

require_once "phpmailer/class.phpmailer.php";
session_start();
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['email'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
//$headers = "From: otp@studentstutorial.com" . "\r\n" .
//    "CC: divyasundarsahu@gmail.com";
//mail($to,$subject,$txt,$headers);

$message = '<html><head>
                <title>Email Verification newwwwwww</title>
                </head>
                <body>';
$message .= "OTP: ".$rndno."";
$message .= "</body></html>";


// php mailer code starts
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = 'ravi.vishwakarma@mediatech.co.in';
$mail->Password = 'microg25';
$mail->SetFrom('ravi.vishwakarma@mediatech.co.in', 'Ravi');
$mail->AddAddress($to);
$mail->Subject = trim("Email Verifcation - www.thesoftwareguy.in");
$mail->MsgHTML($message);
try {
    $mail->send();
    $msg = "An email has been sent for verfication.";
    $msgType = "success";
} catch (Exception $ex) {
    $msg = $ex->getMessage();
    $msgType = "warning";
}

if(isset($_POST['btn-save']))
{
    $_SESSION['name']=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['otp']=$rndno;
    header( "Location: otp.php" );
} ?>
