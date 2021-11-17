<!DOCTYPE html>
<?php

include_once '../header/header.php';
include_once '../includes/dbh.php';
?>

<?php
if(!isset($_SESSION['check'])){ //checking session check variable

    header("Location:../includes/logout.php");
}
?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Application Form </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<?php

                 $sql="SELECT * FROM labapplications WHERE  applicationid='" . $_GET['appno'] . "'";
                 $result=mysqli_query($conn, $sql);
                 $resultCheck = mysqli_num_rows($result);

                 if($resultCheck > 0)
                     {
                        while($row = mysqli_fetch_assoc($result))
                           {


              ?>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Application Form</h2>
                </div>
                <div class="card-body">
                    <form  action="../includes/approve.php" method="POST">


                        <div class="form-row">
                            <div class="name">Name of the Lab</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $row['labname']; ?>" name="labname" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Contact No:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $row['officecontact']; ?>" name="name" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name"> E-mail:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="username" value="<?php echo $row['officeemail']; ?>" name="name" readonly>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">State:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="email" value="<?php echo $row['state']; ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">District:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="address" value="<?php echo $row['district']; ?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Provisional Register NO:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="contact" value="<?php echo $row['proregno']; ?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Date of Regn:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="dob" value="<?php echo $row['dateofreg']; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Provisional Registration Certificate</div>
                            <div class="value">
                                <div class="input-group">
                                    <?php echo '<a class="pdf" target="_blank" href="viewprovisonal.php?pdf='.$row['provisonalcertificate'].'">View PDF</a>';?>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Owner Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="state" value="<?php echo $row['ownername']; ?>" readonly>
                                </div>
                            </div>
                        </div>


                         <div class="form-row">
                            <div class="name">Personal Phone:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="pincode" value="<?php echo $row['personalphone']; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="dob" value="<?php echo $row['address']; ?>" readonly>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">ID Card Attached</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="dob" value="<?php echo $row['idcard']; ?>" readonly>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">View Attached ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <?php echo '<a class="pdf" target="_blank" href="governmentid.php?pdf='.$row['governmentid'].'">View PDF</a>';?>
                                </div>
                            </div>
                        </div>
                </div>
<?php }
}
?>
                <div class="card-footer">
                    <button class="btn btn--radius-2 approve" name="approve" type="submit">Approve Application</button>
                </div>

                <div class="card-body">

                     <div class="form-row">
                            <div class="name">Reason for Rejection</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="reason" >
                                </div>
                            </div>
                        </div>
              </div>


                <div class="card-footer">
                    <button class="btn btn--radius-2 reject" name="rejectapplication" type="submit">Reject Application</button>
                </div>

            </div>
        </div>
    </div>
  </form>
    <?php

?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
