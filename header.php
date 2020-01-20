<?php
require_once('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/main.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>
<header>
    <div class="container">
        <?php
         if(!isset($_SESSION['user'])){
         ?>
        <style>
          header{
            padding-top: 20px !important;
          }
        </style>
        <form method="post" action="functions.php" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="logo font-italic"><strong><h1><em><u>Pro Free India</em></u></h1></strong></div>
                    </div>
                    <div class="col-sm-6 login-form">
                        <div class="row" style="margin-top: 12px;">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address" name="username">
                                    <div class="login-bottom-text checkbox hidden-sm">
                                        <label>
                                            <input type="checkbox" id="">
                                            Keep me sign in
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <div class="forgot-password hidden-sm login-bottom-text">
                                        Forgot your password ?
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="submit" value="login" class="btn btn-success btn-header-login" name="login_btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
         }else {
            ?>
            <nav class="navbar navbar-expand-sm">
                <div>
                    <img class="profileimage" src="one.jpg">
                </div>
                 <div class="ml-auto">
                    <a href='logout.php'><button class="btn btn-primary">Logout</button></a>
                </div>
            </nav>
            <?php
         }
        ?>
    </div>
      <?php
      if (isset($_SESSION['message']))
      {
        ?>
        <div class="alert alert-warning" role="alert">
          <span class="alert-message"><?php echo $_SESSION['message'];?></span>
        </div>
        <?php
        unset($_SESSION['message']);
      }
      ?>

</header>
