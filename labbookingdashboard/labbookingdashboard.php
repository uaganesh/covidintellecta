<!DOCTYPE html>
<?php

include_once '../header/header.php';
include_once '../includes/dbh.php';
 ?>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="PENDING TEST">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Booking Dashboard</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="/popup/design.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="/popup/script.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style>
{box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: relative;

  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;

}

/* Add styles to the form container */
.form-container {
  width: 306px;
padding: 10px;
background-color: #801616;
z-index: 10;
position: absolute;
margin-left: 76%;
color: white;
align-items: center;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .
 {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.button {
  background-color: #780834; /* Green */
  border: none;
  color: white;
  padding: 6px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style>
    #error
    {
      color:green;
      font-weight: bold;

    }
    </style>

  </head>


  <body data-home-page="https://website1111395.nicepage.io/Home.html?version=6c947993-25e1-416e-8bfe-467395a9ca24" data-home-page-title="Home" class="u-body">
    <section class="u-clearfix u-section-1" id="carousel_913e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <?php

         if(isset($_GET["error"]))
         {
           if($_GET["error"]=="none")
           {
            echo '<p align="center" id="error">Successfully Updated The Result</p>';
           }
         } ?>

    <?php   echo '<h2 class="u-text u-text-1">PENDING TEST FOR    '.$_SESSION["labname"].'</h2>'; ?>
        <p class="u-text u-text-2">Please find below the list of Active Booking For Today</p>
        <div class="form-popup" id="myForm">
          <form action="/includes/testupdate.php" class="form-container">
            <h1>Update Status </h1>

            <label for="cars">RTPCR Test Result:</label>

<select name="test" id="test">
  <option value="positive">Positive</option>
  <option value="negative">Negative</option>
</select>

            <button type="submit" class="btn">Submit Result</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>

        <script>
          funcion openform(){
          document.getElementById("myForm").style.display = "block";

        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>
        <div class="u-table u-table-responsive u-table-1">
          <table id="table" class="u-table-entity">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>


            <thead class="u-black u-custom-font u-heading-font u-table-header u-table-header-1">
              <tr style="height: 5px;">
                <th class="u-align-center u-table-cell">BOOKING ID</th>
                <th class="u-align-center u-table-cell">INDIVIDUAL NAME</th>
                <th class="u-align-center u-table-cell">TIME SLOT&nbsp;</th>
                <th class="u-align-center u-table-cell">RESULT UPDATE&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php


                               $sql="SELECT * FROM activebooking WHERE testingcenter='{$_SESSION['labname']}' and status='PENDING'" ;



                               $result=mysqli_query($conn, $sql);


                            /*  if (mysqli_num_rows($result)==0)
                              {
                                echo '<p>Data Not Present</p>';
                                echo $_SESSION['labname'];
                              }
                              else {

                            */   $resultCheck = mysqli_num_rows($result);


                               if($resultCheck > 0)
                                   {
                                      while($row = mysqli_fetch_assoc($result))
                                         {
                                           $ad=0;

            echo '<tr style="height: 30px;">';
                     $ad++;
                echo '<td id="$ad" class="u-align-center u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['bookingid'].'</td>';
                echo '<td class="u-align-center u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['name'].'</td>';
                echo '<td class="u-align-center u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$row['timeslot'].'</td>';
                echo '<td id="btn" class="u-align-center u-border-1 u-border-grey-40 u-border-no-left u-border-no-right"><a href="../finaltestupdate/finaltestupdate.php?id='.$row['bookingid'].'" id="boton"  class="button">RESULT</a></td>';


                   echo '</tr>';
    }

  }?>
</table>
    </section>





  </body>
</html>
