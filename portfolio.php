<?php
require_once ('functions.php');
global $userId,$db;

$select = "Select * from users where id = '$userId'";
$result = mysqli_query($db, $select);
$row = mysqli_fetch_assoc($result);
$avatar = $row['avatar'];
$email = $row['email'];

$select = "Select * from user_data where user_id = '$userId'";
$result = mysqli_query($db, $select);
$user = mysqli_fetch_assoc($result);
$experience = unserialize($user['experience']);
$education = unserialize($user['education']);

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My PortFolio</title>

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="clearfix">
<?php
//  require_once('header.php');
//?>
    <div data-scroll='0' class="thetop"></div>
    <!-- for back to top -->

    <!-- ========== ========== fixed - left side body start ========== ========== -->
    <div class="fixed-left-side-body">
        <div class="profile">
            <div class="profile-image center-align">
                <img src="<?php echo 'uploads/'.$userId.'/'.$avatar?>" alt="Image">
            </div>
            <!-- /.profile-image -->
            <div class="profile-name center-align">
                <h1 class="user-name"><?php echo $user['full_name']?></h1>
                <p>
                    <span class="photoshop-color">UI/UX Designer</span> in Dewas
                </p>
            </div>
            <!-- /.profile-name -->

            <ul class="social-btn">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-behance" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

            <div class="discription clearfix">
                <h2 class="title mb-30">what's in my mind</h2>
                <p>
                    We can develop and design anything beyond your ima gination. About our work, we don’t say anything bec ause our work speaks. For more, you can ask our clie nts and they will tell you how much satisfied they are with our services. So, what are you waiting for?
                </p>
            </div>
            <!-- /.discription -->
            <div class="cv-btn">
                <a href="#!" class="custom-btn waves-effect waves-light">
                    <i class="fa fa-download" aria-hidden="true"></i> download cv
                </a>
            </div>
        </div>
        <!-- /.profile -->
    </div>
    <!-- /.fixed-left-side-body -->
    <!-- ========== ========== fixed - left side body end ========== ========== -->

    <!-- ========== ========== right side body start ========== ========== -->
    <div class="right-side-body">

        <!-- ==================== header-section start ==================== -->
        <header id="header-section" class="header-section mb-30 clearfix">
            <div class="">
                <nav class="main-nav">
                    <div class="nav-wrapper main-nav-wrapper">

                        <ul class="alternative-menu ul-li responsive_menu_fixed">

                            <li class="alt-search-area">
                                <form action="#">
                                    <input class="alternative-search" type="search" placeholder="search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="side-menu-btn right">
                                <a href="#" class="button-collapse waves-effect default" data-activates="mobile-demo">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.alternative-menu -->
                        <div class=" hello_icon_menu hello_single_index_menu1">
                            <ul class="ul-li-block side-nav" id="mobile-demo">

                                <li class="sn-user">
                                    <span class="sn-user-img">
								<img src="<?php echo 'uploads/'.$userId.'/'.$avatar?>" alt="Image">
							</span>
                                    <span class="sn-user-name">
								<?php echo $user['full_name']?>
							</span>
                                    <a href="#" class="sn-cv-link common-color">download cv</a>
                                </li>
                                <!-- /.sn-user -->

                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-home" aria-hidden="true"></i> Home
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-user-o" aria-hidden="true"></i> About
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Skills
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i> Education
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i> Portfolio
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Testimolial
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-pencil" aria-hidden="true"></i> Experience
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="#" class="waves-effect">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> Contant
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hello_main_navigation hello_single_index_menu2">
                            <ul id="nav-mobile" class="right main-nav-ul">
                                <li class="active"><a href="#home" class="nav-mobile">home</a></li>
                                <li><a href="#about" class="waves-effect default">about</a></li>
                                <li><a href="#skill" class="waves-effect default">skill</a></li>
                                <li><a href="#education" class="waves-effect default">education</a></li>
                                <li><a href="#portfolio" class="waves-effect default">portfolio</a></li>
<!--                                <li><a href="#testimonial" class="waves-effect default">testimonial</a></li>-->
                                <li><a href="#exprience" class="waves-effect default">exprience</a></li>
<!--                                <li><a href="#blog" class="waves-effect default">blog</a></li>-->
                                <li><a href="#contact" class="waves-effect default">contact</a></li>
                                <li>
                                    <a href="#" class="waves-effect default cd-search-trigger">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- /.main-nav-ul -->
                        <div class="hello_menu_fixed_main_wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="hello_logo_wrapper">
                                        <div class="hello_logo">
                                            <img src="assets/images/logo.png" alt="hello_logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="hello_fixed_nav_wrapper hello_single_index_menu3">
                                        <ul class="hello_nav_fixed">
                                            <li><a href="#home" class="nav-mobile">home</a></li>
                                            <li><a href="#about" class="waves-effect default">about</a></li>
                                            <li><a href="#skill" class="waves-effect default">skill</a></li>
                                            <li><a href="#education" class="waves-effect default">education</a></li>
                                            <li><a href="#portfolio" class="waves-effect default">portfolio</a></li>
<!--                                            <li><a href="#testimonial" class="waves-effect default">testimonial</a></li>-->
                                            <li><a href="#exprience" class="waves-effect default">exprience</a></li>
<!--                                            <li><a href="#blog" class="waves-effect default">blog</a></li>-->
                                            <li><a href="#contact" class="waves-effect default">contact</a></li>
                                            <li>
                                                <a href="#" class="waves-effect default cd-search-trigger">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.main-nav-wrapper -->
                </nav>
            </div>
            <!-- /.
			-->

            <div id="cd-search" class="cd-search">
                <form action="#">
                    <input type="search" placeholder="Search...">
                </form>
            </div>

        </header>
        <!-- /#header-section -->
        <!-- ==================== header-section end ==================== -->

        <!-- ==================== main-slider-section start ==================== -->
        <section id="main-slider-section" class="main-slider-section mb-30 clearfix">

            <div class="main-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="row">

                        <div class="col l6 m6">
                            <div class="item-child-left left-align">
                                <h2 class="hi">hello.</h2>
                                <p class="name">My name is <?php echo $user['full_name']?></p>
                                <small class="position mb-30">& I am absolutely design addicted</small>

                                <a href="#!" class="custom-btn waves-effect waves-light">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                                </a>
                            </div>
                            <!-- /.item-child-left -->
                        </div>
                        <!-- coll6 -->

                        <div class="col l6 m6">
                            <div class="item-child-right right-align">
                                <img src="<?php echo 'uploads/'.$userId.'/'.$avatar?>" alt="Image">
                                <a href="#" class="chat waves-effect waves-light">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- /.item-child-right -->
                        </div>
                        <!-- coll6 -->

                    </div>
                    <!-- row -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="row">

                        <div class="col l6 m6">
                            <div class="item-child-left left-align">
                                <h2 class="hi">hello.</h2>
                                <p class="name">My name is <?php echo $user['full_name']?></p>
                                <small class="position mb-30">& I am absolutely design addicted</small>

                                <a href="#!" class="custom-btn waves-effect waves-light">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                                </a>
                            </div>
                            <!-- /.item-child-left -->
                        </div>
                        <!-- coll6 -->

                        <div class="col l6 m6">
                            <div class="item-child-right right-align">
                              <img src="<?php echo 'uploads/'.$userId.'/'.$avatar?>" alt="Image">
                                <a href="#" class="chat waves-effect waves-light">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- /.item-child-right -->
                        </div>
                        <!-- coll6 -->

                    </div>
                    <!-- row -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="row">

                        <div class="col l6 m6">
                            <div class="item-child-left left-align">
                                <h2 class="hi">hello.</h2>
                                <p class="name">My name is <?php echo $user['full_name']?></p>
                                <small class="position mb-30">& I am absolutely design addicted</small>

                                <a href="#!" class="custom-btn waves-effect waves-light">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> view protfolio
                                </a>
                            </div>
                            <!-- /.item-child-left -->
                        </div>
                        <!-- coll6 -->

                        <div class="col l6 m6">
                            <div class="item-child-right right-align">
                              <img src="<?php echo 'uploads/'.$userId.'/'.$avatar?>" alt="Image">
                                <a href="#" class="chat waves-effect waves-light">
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- /.item-child-right -->
                        </div>
                        <!-- coll6 -->

                    </div>
                    <!-- row -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.main-slider -->

        </section>
        <!-- /.main-slider-section -->
        <!-- ==================== main-slider-section end ==================== -->

        <!-- ==================== aboutme-section start ==================== -->
        <div data-scroll='1' class="aboutme-section sec-p100-bg-bs mb-30 clearfix" id="about">
            <div class="Section-title">
                <h2>
					<i class="fa fa-user-o" aria-hidden="true"></i>
					about me
				</h2>
                <span>about me</span>
                <p>
                    Hello,I’m Akshay Handge Creative Graphic Designer & User Experience Desiger based in Website, I create digital Products a more Beautiful and usable place. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                </p>
            </div>
            <!-- /.Section-title -->

            <div class="personal-details-area">
                <div class="row">
                    <div class="col l6 m12 s12">
                        <div class="personal-details-left">
                            <ul class="service-list ul-li">
                                <li class="logodesign">
                                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                    <span class="service-name">logo design</span>
                                    <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="website">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    <span class="service-name">website</span>
                                    <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="softwares">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    <span class="service-name">softwares</span>
                                    <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="applications">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span class="service-name">applications</span>
                                    <a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <!-- /.service-list -->
                        </div>
                        <!-- /.personal-details-left -->
                    </div>
                    <!-- colm6 -->

                    <div class="col l6 m12 s12">
                        <div class="personal-details-right">
                            <h2 class="title">personal details</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="td-w25">Full Name</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['full_name']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Father's Name</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['father_name']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Address</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['address']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Zip Code</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['zipcode']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Phone</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['phone']?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Email</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $email?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Website</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $user['website']?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.personal-details-right -->
                    </div>
                    <!-- colm6 -->
                </div>
                <!-- row -->
            </div>
            <!-- /.personal-details-area -->

            <div class="success">
                <div class="success-child-left">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <p>
                        Over Ten Year In The Game With 550+ Projects Successfuly Done!
                    </p>
                </div>
                <!-- /.success-child-left -->
                <div class="success-child-right">
                    <a href="#!" class="hire-me waves-effect">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> hire me
                    </a>
                </div>
                <!-- /.success-child-right -->
            </div>
            <!-- /.success -->
        </div>
        <!-- /.aboutme-section -->
        <!-- ==================== aboutme-section end ==================== -->

        <!-- ==================== my-skill-section start ==================== -->
        <div data-scroll='2' class="my-skill-section sec-p100-bg-bs mb-30 clearfix" id="skill">
            <div class="Section-title">
                <h2>
					<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					My Skills
				</h2>
                <span>My Skills</span>
                <p>
                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                </p>
            </div>
            <!-- /.Section-title -->

            <div class="professional-skills-area">
                <ul class="tabs skills-tab ul-li">
                    <li class="tab tag-item tag-icon">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                    </li>
                    <li class="tab tag-item"><a href="#">#graphicdesign</a></li>
                    <li class="tab tag-item"><a href="#" class="active">#photography</a></li>
                    <li class="tab tag-item"><a href="#">#technology</a></li>
                    <li class="tab tag-item"><a href="#">#design</a></li>
                    <li class="tab tag-item"><a href="#">#webdevelopment</a></li>
                    <li class="tab tag-item"><a href="#">#application</a></li>
                </ul>
                <div id="graphicdesign">
                    <h2 class="title">professional skills</h2>

                    <div class="skill_progress">

                        <div class="row">
                            <div class="col l6 m6 s12">
                                <div class="single_experties">
                                    <div class="skilled-tittle">Photoshop</div>
                                    <div class="progress">
                                        <div class="progress-bar photoshop-bg wow Rx-width-90 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="photoshop-color">90%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->

                                <div class="single_experties">
                                    <div class="skilled-tittle">Jquery</div>
                                    <div class="progress">
                                        <div class="progress-bar jquery-bg wow Rx-width-60 animated" role="progressbar" data-wow-duration="1s" data-wow-delay=".15s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="jquery-color">60%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->

                                <div class="single_experties m-0">
                                    <div class="skilled-tittle">PHP</div>
                                    <div class="progress">
                                        <div class="progress-bar php-bg wow Rx-width-75 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".25s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="php-color">75%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->
                            </div>
                            <!-- colm6 -->

                            <div class="col l6 m6 s12">
                                <div class="single_experties">
                                    <div class="skilled-tittle">HTML5</div>
                                    <div class="progress">
                                        <div class="progress-bar html5-bg wow Rx-width-45 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="html5-color">45%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->

                                <div class="single_experties">
                                    <div class="skilled-tittle">Css3</div>
                                    <div class="progress">
                                        <div class="progress-bar css3-bg wow Rx-width-65 animated" role="progressbar" data-wow-duration="1s" data-wow-delay=".15s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="css3-color">65%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->

                                <div class="single_experties m-0">
                                    <div class="skilled-tittle">Marketing</div>
                                    <div class="progress">
                                        <div class="progress-bar marketing-bg wow Rx-width-80 animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".25s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <span class="marketing-color">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single_experties -->
                            </div>
                            <!-- colm6 -->
                        </div>
                        <!-- row -->

                    </div>
                    <!-- /.skill_progress -->
                </div>

            </div>
            <!-- /.professional-skills-area -->

            <div class="languages-skills">
                <div class="row">

                    <div class="col l6 m12 s12">
                        <div class="lang-skill-left">
                            <h2 class="title mb-30">languages skills</h2>

                            <p class="mb-30">
                                Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit.
                            </p>

                            <a href="#" class="common-color">https://www.youtube.com</a>
                        </div>
                        <!-- /.lang-skill-left -->
                    </div>
                    <!-- colm6 -->
                    <div class="col l6 m12 s12">
                        <div class="lang-skill-right">
                            <div class="skill-piechart">
                                <div class="first circle">
                                    <strong>HINDI</strong>
                                </div>
                            </div>
                            <!-- /pie-chart -->

                            <div class="skill-piechart">
                                <div class="second circle">
                                    <strong>ENGLISH</strong>
                                </div>
                            </div>
                            <!-- /pie-chart -->
                            <div class="skill-piechart">
                                <div class="third circle">
                                    <strong>DUTCH</strong>
                                </div>
                            </div>
                            <!-- /pie-chart -->
                        </div>
                    </div>
                    <!-- colm6 -->

                </div>
                <!-- row -->
            </div>
            <!-- /.languages-skills -->

        </div>
        <!-- /.my-skill-section -->
        <!-- ==================== my-skill-section end ==================== -->

        <!-- ==================== my-portfolio-section start ==================== -->
        <div data-scroll='4' class="my-portfolio-section sec-p100-bg-bs mb-30 clearfix" id="portfolio">

            <div class="Section-title">
                <h2>
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    My Portfolio
                </h2>
                <span>My Portfolio</span>
                <p>
                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                </p>
            </div>
            <!-- /.Section-title -->

            <div class="portfolio-area">

                <div id="filters" class="button-group">
                    <button class="button waves-effect default is-checked" data-filter="*">all</button>
                    <button class="button waves-effect default" data-filter=".metal">logos</button>
                    <button class="button waves-effect default" data-filter=".transition">websites</button>
                    <button class="button waves-effect default" data-filter=".alkali, .alkaline-earth">apps</button>
                    <button class="button waves-effect default" data-filter=":not(.transition)">softwars</button>

                </div>

                <div class="grid">
                    <div class="element-item transition metal" data-category="transition">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-1.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="element-item metalloid" data-category="metalloid">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-2.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="element-item post-transition metal" data-category="post-transition">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-3.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="element-item post-transition metal" data-category="post-transition">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-4.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="element-item transition metal" data-category="transition">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-5.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="element-item alkali metal" data-category="alkali">
                        <div class="ei-child">
                            <img src="assets/images/portfolio/img-6.jpg" alt="Image">
                            <a href="#" class="more">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.grid -->

                <a href="#!" class="custom-btn waves-effect waves-light">
                    <i class="fa fa-refresh" aria-hidden="true"></i> load more
                </a>
            </div>
            <!-- /.portfolio-area -->

        </div>
        <!-- /.my-portfolio-section -->
        <!-- ==================== my-portfolio-section end ==================== -->

        <!-- ==================== education-section start ==================== -->
        <div data-scroll='3' class="education-section sec-p100-bg-bs mb-30 clearfix" id="education">

            <div class="Section-title">
                <h2>
					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					education
				    </h2>
                <span>education</span>
            </div>
            <!-- /.Section-title -->

            <ul class="accordion collapsible" data-collapsible="accordion">
              <?php foreach ($education['education'] as $key=>$edu) :?>
                <li>
                    <div class="accordion-header <?php echo "acco-clr1".$key?> collapsible-header active">
                        <span class="icon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
              </span>
                          <p>
                              <strong><?php echo $edu['degree']?></strong> - <?php echo $edu['university']?> , <?php echo $edu['year_conduct']?>
                          </p>
                      </div>
                      <div class="accordion-body collapsible-body">
                          <span>
                      <?php echo $edu['ed_desc']?>
              </span>
                    </div>
                </li>
            <?php endforeach;?>
            </ul>

        </div>
        <!-- /.education-section -->
        <!-- ==================== education-section end ==================== -->




        <div data-scroll='6' class="experience-section sec-p100-bg-bs mb-30 clearfix" id="exprience">

            <div class="Section-title">
                <h2>
					<i class="fa fa-pencil" aria-hidden="true"></i>
					Work Experience
				</h2>
                <span>Work Experience</span>
                <p>
                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                </p>
            </div>
            <!-- /.Section-title -->

            <div class="row">
                <div class="">
                    <div class="experience-left">
                        <div class="experience-left-item-area">
                            <div class="border-left">
<!--                                <div class="experience-item exp1">-->
<!--                                    <h2 class="title">Web Designer at Microsoft Inc.</h2>-->
<!--                                    <ul class="post-mate ul-li">-->
<!--                                        <li class="photoshop-color">Jun 2016 - <span class="current photoshop-bg">Current</span></li>-->
<!--                                    </ul>-->
<!--                                    <p>-->
<!--                                        Working as Web Developer at MicroSoft. Leading the support administration and quality controlling of products submited by the global freelance authors.-->
<!--                                    </p>-->
<!--                                    <a href="#" class="photoshop-color">https:example.com</a>-->
<!--                                </div>-->
                                <?php foreach ($experience['experience'] as $item => $exp) :?>
                                <div class="experience-item <?php echo "exp".$item?>">
                                    <h2 class="title"><?php echo $exp['designation'] . ' at ' .$exp['company']?></h2>
                                    <ul class="post-mate ul-li">
                                        <li class="jquery-color"><?php echo $exp['year']?></li>
                                    </ul>
                                    <!-- /.post-mate -->
                                    <p>
                                      <?php echo $exp['ex_desc']?>
                                    </p>
                                    <a href="#" class="jquery-color"><?php echo $exp['ex_website']?></a>
                                </div>
                              <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- colm8 -->

                <div class="col l4 m12 s12">

                    <!-- /.experience-right -->
                </div>
                <!-- col m4 -->
            </div>
            <!-- row -->

        </div>
        <!-- /.experience-section -->
        <!-- ==================== experience-section end ==================== -->

        <!-- ==================== contact-me-section start ==================== -->
        <div data-scroll='8' class="contact-me-section sec-p100-bg-bs mb-30 clearfix" id="contact">

            <div class="Section-title">
                <h2>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					contact me
				</h2>
                <span>contact me</span>
                <p>
                    Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.
                </p>
            </div>
            <!-- /.Section-title -->

            <div class="row">
                <div class="col l6 m12 s12">
                    <div class="contact-left">

                        <div class="cont-item phone">
                            <h2 class="title mb-30">phone</h2>
                            <div class="cont-numbers">
                                <p>
                                    <span>Mob.</span>+0 123456789
                                </p>
                                <p>
                                    <span>Landline</span>+0 123456789
                                </p>
                                <p>
                                    <span>Skype</span>webstrot
                                </p>
                            </div>
                            <!-- /.cont-numbers -->
                        </div>
                        <!-- /.cont-item -->

                        <div class="cont-item email">
                            <h2 class="title mb-30">email</h2>
                            <div class="cont-numbers">
                                <p>support@example.com</p>
                                <p>support@example.com</p>
                            </div>
                            <!-- /.cont-numbers -->
                        </div>
                        <!-- /.cont-item -->

                        <div class="cont-item address">
                            <h2 class="title mb-30">address</h2>
                            <div class="cont-numbers">
                                <p>Street 110-B Kalani Bag, Dewas, M.P. INDIA</p>
                                <p><a href="#" class="photoshop-color">https:example.com</a></p>
                            </div>
                            <!-- /.cont-numbers -->
                        </div>
                        <!-- /.cont-item -->

                    </div>
                    <!-- /.contact-left -->
                </div>
                <!-- colm6 -->

                <div class="col l6  s12">
                    <div class="contact-right clearfix">

                        <form action="#">

                            <h2 class="title mb-30">here me</h2>

                            <div class="input-field">
                                <input type="text" name="full_name" class="require">
                                <label>First Name</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="email" class="require" data-valid="email" data-error="Email should be valid.">
                                <label>Email</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="subject" class="require">
                                <label>Subject</label>
                            </div>

                            <div class="input-field">

                                <textarea rows="7" name="message" class="materialize-textarea"></textarea>
                                <label>Message</label>
                                <div class="response"></div>
                            </div>

                            <button type="button" class="submitForm custom-btn waves-effect"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send</button>
                        </form>

                    </div>
                    <!-- /.contact-right -->
                </div>
                <!-- colm6 -->
            </div>
            <!-- row -->

        </div>
        <!-- /.contact-me-section -->
        <!-- ==================== contact-me-section end ==================== -->

        <!-- ==================== footer-section start ==================== -->
        <footer id="footer-section" class="footer-section clearfix">

            <div class='backtotop'>
                <a href="#" class='scroll'>
                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                </a>
            </div>
            <!-- backtotop -->
        </footer>
        <!-- /.footer-section -->
        <!-- ==================== footer-section end ==================== -->
    </div>
    <!-- ========== ========== right side body end ========== ========== -->

    <!-- jquery and bootstrap.js -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>

    <!-- my custom js -->
    <script src="assets/js/custom.js"></script>
</body>


</html>
