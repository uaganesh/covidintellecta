<!DOCTYPE html>

<html lang="en">
<?php
include_once '../header/header.php'
?>
<?php
if(isset($_GET["error"]))
{
       if($_GET["error"]=="none")
       {

        header("Refresh:4; url=../login/login.php");

       }
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizen Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="../includes/citizensignup.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name As in Government ID"/>
                        </div>
                             <div class="form-group">
                            <input type="emails" class="form-input" name="email" id="email" placeholder="Your Email Id"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="pasword" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="pasword" class="form-input" name="confirmpassword" id="password" placeholder="Confirm Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I confirm the above information is true <a href="#" class="term-service"></a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <?php
                     if(isset($_GET["error"]))
                     {
                       if($_GET["error"]=="emptyinput")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Fill out all the Details!</p>";
                       }
                       else if($_GET["error"]=="invaliduid")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Enter a proper user id !</p>";
                       }
                       else if($_GET["error"]=="invalidemail")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Enter a proper email id !</p>";
                       }
                       else if($_GET["error"]=="passwordsdonotmatch")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Password and Confirm Password Do not Match !</p>";
                       }
                       else if($_GET["error"]=="usernametaken")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Username or Email  Already Taken</p>";
                       }
                       else if($_GET["error"]=="stmtfailed")
                       {
                        echo "<p style='color:red; text-align:center; font-size: 20px; font-weight:bold;'>Something Went Wrong !</p>";
                       }
                        else if($_GET["error"]=="none")
                       {
                        echo "<p style='color:green; text-align:center; font-size: 20px; font-weight:bold;'>Signed up Sucessfully.</br> Taking You to Login Page </p>";

                       }

                     }
                     ?>
                    <p class="loginhere">
                        Have already an account ? <a href="../login/login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
