<?php
require_once('functions.php');
if(isset($_SESSION['user'])){
  header("location: home.php");
}
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">

  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
<?php
  require_once('header.php');
?>


<div class="container" >
    <form method="post" action="functions.php">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 login-main">
                    <u><i>Now Create Your Digital Profile and Resume</i></u>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <h3><i class="fa fa-shield"></i>Create a new account</h3><hr>
                    </div>
                    <div class="form-group col-sm-6" style="padding-left: 0">
                        <input type="text" class="form-control" placeholder="First Name" name="f_name" required>
                    </div>

                    <div class="form-group col-sm-6" style="padding-right: 0">
                        <input type="text" class="form-control" placeholder="Last Name" name="l_name" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password_1" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repeat Password" name="password_2" required>
                    </div>

                    <div class="form-group col-sm-4" >
                        <select class="form-control" name="day" required>
                            <option>Day</option>
                            <?php
                              $start_date = 1;
                              $end_date   = 31;
                              for( $j=$start_date; $j<=$end_date; $j++ ) {
                                  echo '<option value='.$j.'>'.$j.'</option>';
                              }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-4" >
                        <select class="form-control" name="month" required>
                            <option>Month</option>
                            <?php for( $m=1; $m<=12; ++$m ) {
                                $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                ?>
                                <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <select class="form-control" name="year" required>
                            <option>Year</option>
                              <?php
                              $year = date('Y');
                              $min = $year - 60;
                              $max = $year;
                              for( $i=$max; $i>=$min; $i-- ) {
                                   echo '<option value='.$i.'>'.$i.'</option>';
                              }
                              ?>
                        </select>
                    </div>
                    <small>
                        By clicking Sign Up, you agree to our Terms and that you have read our
                        Data Use Policy, including our Cookie Use.
                    </small>
                    <div style="height:10px;"></div>
                    <div class="form-group">
                        <label class="control-label" for=""></label>
                        <input type="submit" value="Sign up" class="btn btn-success" name="register_btn">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<footer class="container">
<hr>
<div class="footer-options">
<ul >
  <li><a href="#">Mobile</li>
  <li><a href="#">Find Friends</li>
  <li><a href="#">Badges</li>
  <li><a href="#">People</li>
  <li><a href="#">Pages</li>
  <li><a href="#">Places</a></li>
  <li><a href="#">Games</a></li>
  <li><a href="#">Locations</a></li>
  <li><a href="#">About</a></li>
</ul>
</div>
<div style="clear:both"></div>
<small class="copyrights"> © Copyrights reserved  2014</small>
</footer>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
