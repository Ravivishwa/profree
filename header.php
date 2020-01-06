<?php
require_once('functions.php');
?>
<header>
    <div class="container">
        <?php
         if(!isset($_SESSION['user'])){
         ?>
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
</header>
