<?php
require_once "phpmailer/class.phpmailer.php";
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$username = "";
$email    = "";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
  register();
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
  login();
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: ../login.php");
}

// REGISTER USER
function register(){
  global $db, $errors;

  $rndno=rand(100000, 999999);//OTP generate
  $message = urlencode("otp number.".$rndno);
  $to=$_POST['email'];
  $subject = "OTP";
  $txt = "OTP: ".$rndno."";

  $message = '<html><head>
                <title>Email Verification newwwwwww</title>
                </head>
                <body>';
  $message .= "OTP: ".$rndno."";
  $message .= "</body></html>";

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

  // receive all input values from the form
  $fname    =  e($_POST['f_name']);
  $lname    =  e($_POST['l_name']);
  $email       =  e($_POST['email']);
  $password_1  =  e($_POST['password_1']);
  $password_2  =  e($_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($fname)) {
    array_push($errors, "f_name is required");
  }
  if (empty($lname)) {
    array_push($errors, "l_name is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

//    if (isset($_POST['user_type'])) {
      $query = "INSERT INTO users (fname,lname,email,password,approved)
						  VALUES('$fname', '$lname', '$email', '$password',0)";
      mysqli_query($db, $query);
      $id = mysqli_insert_id($db);
      $_SESSION['user'] = getUserById($id);
      $_SESSION['success']  = "New user successfully created!!";
      $_SESSION['otp']=$rndno;
      $_SESSION['id']=$id;
      header('location: otp.php');

  }

}

// return user array from their id
function getUserById($id){
  global $db;
  $query = "SELECT * FROM users WHERE id=" . $id;
  $result = mysqli_query($db, $query);

  $user = mysqli_fetch_assoc($result);
  return $user;
}

// LOGIN USER
function login(){
  global $db, $username, $errors;

  // grap form values
  $username = e($_POST['username']);
  $password = e($_POST['password']);

  // make sure form is filled properly
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  // attempt login if no errors on form
  if (count($errors) == 0) {
    $password = md5($password);

    $query = "SELECT * FROM users WHERE email='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) { // user found
      // check if user is admin or user
      $logged_in_user = mysqli_fetch_assoc($results);
      if ($logged_in_user['user_type'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin/home.php');
      }else{
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: portfolio.html');
      }
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

function isLoggedIn()
{
  if (isset($_SESSION['user'])) {
    return true;
  }else{
    return false;
  }
}

function isAdmin()
{
  if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
    return true;
  }else{
    return false;
  }
}

// escape string
function e($val){
  global $db;
  return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
  global $errors;

  if (count($errors) > 0){
    echo '<div class="error">';
    foreach ($errors as $error){
      echo $error .'<br>';
    }
    echo '</div>';
  }
}
?>