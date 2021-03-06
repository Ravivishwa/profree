<?php
session_start();
require_once "phpmailer/class.phpmailer.php";


// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');
$userId = isset($_SESSION['user']) ? $_SESSION['user']['id'] : '';

// variable declaration
$username = "";
$email    = "";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
  register();
}
if (isset($_POST['po-submit'])) {
  submitDetails();
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

function submitDetails(){
  global $db,$userId;
  $fullName = $_POST['fullname'];
  $fatherName = $_POST['fathername'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $zipCode = $_POST['zipcode'];
  $website = $_POST['website'];
  if(!empty($_FILES)){
    uploadPortfolio($_FILES);
  }

  $exp = $edu = $ps = [];
  $experience = $skills = $education = '';
  if(isset($_POST['company_name'])){
    for($i=0;$i<count($_POST['company_name']);$i++){
      $exp['experience'][$i]['company'] =  $_POST['company_name'][$i];
      $exp['experience'][$i]['year'] =  $_POST['year'][$i];
      $exp['experience'][$i]['designation'] =  $_POST['designation'][$i];
      $exp['experience'][$i]['ex_desc'] =  $_POST['ex_desc'][$i];
      $exp['experience'][$i]['ex_website']=  $_POST['ex_website'][$i];
    }
    $experience = serialize($exp);
  }

  if(isset($_POST['skill'])){
    for($i=0;$i<count($_POST['skill']);$i++){
      $ps['skills'][$i]['skill'] =  $_POST['skill'][$i];
      $ps['skills'][$i]['rate'] =  $_POST['rate'][$i];
    }
    $skills = serialize($ps);
  }

  if(isset($_POST['degree'])){
    for($i=0;$i<count($_POST['degree']);$i++){
    $edu['education'][$i]['degree'] =  $_POST['degree'][$i];
    $edu['education'][$i]['university'] =  $_POST['university'][$i];
    $edu['education'][$i]['year_conduct'] =  $_POST['year_conduct'][$i];
    $edu['education'][$i]['ed_desc'] =  $_POST['ed_desc'][$i];
    }
    $education = serialize($edu);
  }

  $insert = "INSERT INTO user_data
                  (user_id,full_name,phone,father_name,address,website,zipcode,education,experience,skills)
                VALUES
                  ('$userId', '$fullName','$phone','$fatherName', '$address','$website','$zipCode','$education','$experience','$skills')
                ON DUPLICATE KEY UPDATE
                  full_name = VALUES(full_name),
                  phone = VALUES(phone),
                  father_name = VALUES(father_name),
                  address = VALUES(address),
                  zipcode = VALUES(zipcode),
                  website = VALUES(website),
                  education = VALUES(education),
                  experience = VALUES(experience),
                  skills = VALUES(skills)";
  mysqli_query($db, $insert);
  header('location: portfolio.php');
}

// REGISTER USER
function register(){
  global $db, $errors;
  $email=$_POST['email'];
  $sql = "select * from users where email = '$email'";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) >0){
    $_SESSION['message'] = 'Email/User already exists';
    header('location: index.php');
  }else{
  $fname    =  e($_POST['f_name']);
  $lname    =  e($_POST['l_name']);
  $email       =  e($_POST['email']);
  $password_1  =  e($_POST['password_1']);
  $password_2  =  e($_POST['password_2']);

  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
      $query = "INSERT INTO users (fname,lname,email,password,approved,avatar)
              VALUES('$fname', '$lname', '$email', '$password',0,'')";
      mysqli_query($db, $query);
      $id = mysqli_insert_id($db);
      // $_SESSION['success']  = "New user successfully created!!";
    sendOtp($email,$id);
  }
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

  if (count($errors) == 0) {
    $password = md5($password);
  $email=$_POST['username'];
  $sql = "select id from users where email = '$email' and approved = 0";
  $result = mysqli_query($db, $sql);
  $id = mysqli_fetch_assoc($result)['id'];
  if($id){
    sendOtp($email,$id);
    exit();
  }

    $query = "SELECT * FROM users WHERE email='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $logged_in_user = mysqli_fetch_assoc($results);
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: home.php');
    }else {
      array_push($errors, "Wrong username/password combination");
      $_SESSION['message'] = 'Wrong username/password combination';
      header('location: index.php');
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

function sendOtp($email,$id){
  $rndno=rand(100000, 999999);//OTP generate
  $_SESSION['otp']=$rndno;
  $message = urlencode("otp number.".$rndno);
  $_SESSION['user'] = getUserById($id);
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
  $mail->Username = 'ravishwakarma1994@gmail.com';
  $mail->Password = 'microg25';
  $mail->SetFrom('ravishwakarma1994@gmail.com', 'PROFREEINDIA');
  $mail->AddAddress($email);
  $mail->Subject = trim("Email Verifcation - www.profreeindia.in");
  $mail->MsgHTML($message);
  try {
    $mail->send();
    $msg = "An email has been sent for verfication.";
    $msgType = "success";
  } catch (Exception $ex) {
    $msg = $ex->getMessage();
    $msgType = "warning";
  }
      header('location: otp.php');

}

function uploadPortfolio($file){
  global $db,$userId;
  $targetDir = "uploads/".$userId ;
  $title = $_POST['title'];
  $description = $_POST['description'];

  if(!is_dir($targetDir))
  {
    mkdir($targetDir, 0777, true);
  }
  $file = $_FILES["port"];
  if(!empty($file["name"])){
    $fileName = basename($file["name"]);
    $targetFilePath = $targetDir ."/". $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
      if(move_uploaded_file($file["tmp_name"], $targetFilePath)){
        $insert = "INSERT INTO `portfolio` (`id`, `user_id`, `title`, `description`, `image`) VALUES (NULL, '$userId', '$title', '$description', '$fileName');";
        mysqli_query($db, $insert);
        if($insert){
          $statusMsg = [
            'success' =>true,
            'msg' =>  "The file ".$fileName. " has been uploaded successfully.",
          ];

        }else{
          $statusMsg = [
            'success' =>false,
            'msg' =>  "File upload failed, please try again."
          ];
        }
      }else{
        $statusMsg = [
          'success' =>false,
          'msg' =>  "Sorry, there was an error uploading your file."
        ];
      }
    }else{
      $statusMsg = [
        'success' =>false,
        'msg' =>  "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload."
      ];
    }
  }else{
    $statusMsg = [
      'success' =>false,
      'msg' =>  "Please select a file to upload."
    ];
  }
}
?>
