<?php

require_once('functions.php');
global $db;
if(isset($_POST['save']))
{
    $rno=$_SESSION['otp'];
    $userid=$_SESSION['user']['id'];
    $urno=$_POST['otpvalue'];
    if($rno == $urno)
    {
      echo "done";
      $query = "UPDATE `users` SET `approved` = '1' WHERE `users`.`id` = $userid";
      
      mysqli_query($db, $query);
      header('location: index.php');
    }else{
        echo "incorrect otp ";
    }
}
//resend OTP
if(isset($_POST['resend']))
{
//    $message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
//    $rno=$_SESSION['otp'];
//    $to=$_SESSION['email'];
//    $subject = "OTP";
//    $txt = "OTP: ".$rno."";
//    $headers = "From: otp@studentstutorial.com" . "\r\n" .
//        "CC: divyasundarsahu@gmail.com";
//    mail($to,$subject,$txt,$headers);
//    $message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<!DOCTYPE html>
<html>
<header>
    <title>OTP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="http://studentstutorial.com/div/d.css">
    <style>
        a{
            text-decoration:none;
        }
    </style>
    </header>
        <body>
        <header>
          <div class="container">
          </div>
          </div>
        </header>
        <br>
        <div class="w3-row ">
            <div class=" w3-card-2 w3-round w3-center" style="width: 50%;margin: auto;">
                <div class="w3-container w3-center" style="background-color: #3b5998;">
                    <h2 style="color: white;">OTP</h2>
                </div>
                <br>
                <form class="w3-container " method="post" action="">
                    <br>
                    <br>
                    <p><input class="w3-input w3-border w3-round" type="password" placeholder="OTP" name="otpvalue"></p>
                    <p class="w3-center"><button class="w3-btn  w3-round" style="width:100%;height:40px;background-color: #3b5998;" name="save">Submit</button></p>
                    <p class="w3-center"><button class="w3-btn  w3-round" style="width:100%;height:40px;background-color: #3b5998;" name="resend">Resend</button></p>
                </form>
                <div><?php if(isset($message)) { echo $message; } ?>
                </div>
            </div>
            <div class="w3-half">
            </div>
        </div>
        </body>
</html>
