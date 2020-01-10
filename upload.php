<?php
// Include the database configuration file
include('functions.php');
global $db;
$statusMsg = '';

// File upload path
$userid = $_SESSION['user']['id'];
$targetDir = "uploads/".$userid ;

if(!is_dir($targetDir))
{
  echo "string";
  mkdir($targetDir, 0777, true);
}

if(!empty($_FILES["file"]["name"])){
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir ."/". $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg','gif','pdf');
  if(in_array($fileType, $allowTypes)){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
      $insert = "UPDATE `users` SET `avatar` = '$fileName' WHERE `users`.`id` = '$userid';";
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
echo json_encode($statusMsg);

?>
