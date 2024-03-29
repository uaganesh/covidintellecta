<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Covid Intellecta</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>
<?php
include_once '../header/header.php'
?>

<body>

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                                <h1>Sign in</h1>
                                <p>Sign in to Manage Your Dasboard.</p>
                            </div>

                            <div class="login-register-form">
                                <form action="../includes/loginscript.php" method="POST">
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control" type="text" name="username" placeholder="User ID / Email"></div>
                                        <div class="col-12 mb-20"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                        
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                                                <div class="col-auto mb-15">Dont have account? <a href="../citizenregistration/citizenreg.php">Create Now.</a></div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button name="submit" class="button button-primary button-outline">sign in</button></div>
                                    </div>
                                </form>
                            </div>
                            <?php
                                    if(isset($_GET["error"]))
                       								{
                      									  if($_GET["error"]=="emptyinput")
                      									  {
                       											 echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Fill username and password!</p>";
                      									  }
                     								      else if($_GET["error"]=="wronglogin")
                       									  {
                      											  echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Username Doesn't Exist!</p>";
                      									  }

                      									  else if($_GET["error"]=="wrongloginpassword")
                       								  	{
                      											  echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Incorrect Password!</p>";
                      									  }
                												  else if($_GET["error"]=="disabled")
                       								  	{
                      											  echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Account is Blocked !</br>  Contact Support Team </p>";
                      									  }
                                          else if($_GET["error"]=="useridnotexist")
                                          {
                                            echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>User Id Doesn't Exist</p>";
                                          }
                                      }

                	                         if(isset($_GET["newpwd"]))
                	       								   {
                	      									 if($_GET["newpwd"]=="passwordupdated")
                	      									 {
                	       											 echo "<br><p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Password Updated!</p>";
                	      									 }

                	     								}

                	     					?>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>
