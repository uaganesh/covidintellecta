<!DOCTYPE html>
<html lang="en" >

<?php
include_once '../header/header.php';
include_once '../includes/dbh.php';

$sql="SELECT * FROM activebooking WHERE  username='" . $_SESSION['username'] . "'";
$result=mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0)
    {
       while($row = mysqli_fetch_assoc($result))
          {

if($row['status']=='PENDING')
{
header("Location:../errorpage/errorpage.php");
}

}
}

if(!isset($_SESSION['citizen'])){ //checking session check variable

    header("Location:../includes/logout.php");
}
?>

<?php

function labselect($conn)
{
     $output = '';
     $sql = "SELECT * FROM approvedlabs";
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result))
     {
          $output .= "<option value='" . $row['labname'] . "'>" . $row['labname'] . "</option>";
     }
     return $output;
}  ?>


<head>
  <meta charset="UTF-8">
  <title>Slot Booking</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" href="gpk.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="info">
  <h1>Slot Booking</h1>

</div>



<!-- Modal -info -->
<div class="container">
<div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">Score Index</h2>
    <h3 class="fs-subtitle">Getting the most out of your data</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis consectetur ligula. Morbi dapibus tellus a ipsum sollicitudin aliquet. Phasellus id est lacus. Pellentesque a elementum velit, a tempor nulla. Mauris mauris lectus, tincidunt et purus rhoncus, eleifend convallis turpis. Nunc ullamcorper bibendum diam, vitae tempus dolor hendrerit iaculis. Phasellus tellus elit, feugiat vel mi et, euismod varius augue. Nulla a porttitor sapien. Donec vestibulum ac nisl sed bibendum. Praesent neque ipsum, commodo eget venenatis vel, tempus sit amet ante. Curabitur vel odio eget urna dapibus imperdiet sit amet eget felis. Vestibulum eros velit, posuere a metus eget, aliquam euismod purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div>
</div>

<form action="../includes/citizenbookingscript.php" method="POST" class="steps" accept-charset="UTF-8" enctype="multipart/form-data" >
  <ul id="progressbar">
    <li class="active">User Information</li>
    <li>Address</li>
    <li>Lab Selection</li>

    <li>Confirmation</li>
  </ul>



  <!-- USER INFORMATION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Basic Information</h2>
    <h3 class="fs-subtitle">We just need some basic information to confirm booking</h3>
    <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">

          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Name as on Adhaar *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="name"type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
     <input type="hidden" id="username" name="username" value="<?php echo  $_SESSION['username']; ?>" name="labname">

    <!-- Begin What's Your Email Field -->
        <div class="hs_email field hs-form-field">

          <label for="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Contact Number</label>

          <input id="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="contact" title="Enter a valid contact number"  type="number" maxlength="10"  data-rule-required="true" data-msg-required="Please enter a valid contact number." >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your Email Field -->

    <!-- Begin Total Number of Constituents in Your Database Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">

          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Date of Birth *</label>

          <input id="edit-submitted-constituent-base-total-constituents" class="form-text hs-input" name="dob"  size="60" maxlength="128" type="date" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter date of birth" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />

  </fieldset>



  <!-- ACQUISITION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">IDENTIFICATION DETAILS</h2>
    <h3 class="fs-subtitle">Address & Identity Confirmation</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">

          <label for="edit-submitted-acquisition-amount-1 total_number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Address</label>

          <input id="edit-submitted-acquisition-amount-1" class="form-text hs-input" name="address" size="60" maxlength="128" type="text" value="" placeholder="" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
      <!-- End Total Number of Donors in Year 1 Field -->

      <!-- Begin Total Number of Donors in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_2 field hs-form-field" id="webform-component-acquisition--amount-2">

          <label for="edit-submitted-acquisition-amount-2 total_number_of_donors_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Adhaar Number</label>

          <input id="edit-submitted-acquisition-amount-2" class="form-text hs-input" name="adhaarno" maxlength="12" minlength="12" title="Enter a valid Aadhar Card Number" required="required" size="60" maxlength="128" type="number" value="" placeholder="" required>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Number of Donors in Year 2 Field -->

      <!-- Begin Calc of Total Number of Donors Fields -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_2 field hs-form-field" id="webform-component-acquisition--amount-2">

          <label for="edit-submitted-acquisition-amount-2 total_number_of_donors_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Age</label>

          <input id="edit-submitted-acquisition-amount-2" class="form-text hs-input" name="age" title="Enter a valid age"   maxlength="2" type="number" data-rule-required="true" data-msg-required="Please enter your name"   >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />

  </fieldset>



  <!-- Cultivation FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Testing Location</h2>
    <h3 class="fs-subtitle">Choose Your Convinient Test Location</h3>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">

          <label for="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">District</label>


          <select  class="form-text hs-input" id="checkcheck" name="district" title="Select District"  required>
<option value="">District</option>
<option value="Kasargode">Kasargode</option>
<option value="Kannur">Kannur</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Wayanad">Wayanad</option>
<option value="Malappuram">Malappuram</option>
<option value="Thrissur">Thrissur</option>
<option value="Palakkad">Palakkad</option>
<option value="Eranakulam">Eranakulam</option>
<option value="Alappuzha">Alappuzha</option>
<option value="Idukki">Idukki</option>
<option value="Kottayam">Kottayam</option>
<option value="Pattanamtitta">Pattanamtitta</option>
<option value="Kollam">Kollam</option>
<option value="Trivandrum">Trivandrum</option>

</select>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 1 Field -->

      <!-- Begin Average Gift Size in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-2">

          <label for="edit-submitted-cultivation-amount-2 average_gift_size_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Testing Center</label>




            <div  id="show_product" >
             <select name="testingcenter" id="brand" class='form-text hs-input'>
              <option value="">Select Lab</option>
              <?php/* echo labselect($conn); */?>

         </select>
           </div>



          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 2 Field -->

      <!-- Begin Average Gift Size Perchent Change Field -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_average_gift_size_percent_change field hs-form-field" id="webform-component-cultivation--percent-change1">

          <label for="edit-submitted-cultivation-percent-change1 average_gift_size_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Time Slot</label>


          <select id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="timeslot" required>
            <option value="">Time Slot</option>
<option value="8am-10AM">8AM-10AM</option>
<option value="11-1pm">11AM-1PM</option>
<option value="3pm-5pm">3PM-5PM</option>


</select>
        </div>
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />

  </fieldset>







  <!-- RETENTION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">FINAL CONFIRMATION</h2>

        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1">

          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Please Carry your Aadhar Card While Going to the Test Location</label>



          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->




        <!-- Begin Final Calc -->

        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Confirm Booking">

</fieldset>

</form>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script><script  src="./script.js"></script>

<script>
 $(document).ready(function(){
 console.log( "function started!" );
      $('#checkcheck').change(function(){
         console.log( "Working!" );
           var brand_id = $(this).val();
           $.ajax({
                url:"labcheck.php",
                method:"POST",
                data:{brand_id:brand_id},
                success:function(data){
                     $('#show_product').html(data);
                }
           });
      });
 });
 </script>
</body>

</html>
