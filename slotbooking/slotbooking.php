<!DOCTYPE html>
<html lang="en" >

<?php
include_once '../header/header.php' ?>
<head>
  <meta charset="UTF-8">
  <title>Slot Booking</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" href="gpk.css">

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

<form action="hello.php" method="POST" class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
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

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="firstname"type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter your name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->

    <!-- Begin What's Your Email Field -->
        <div class="hs_email field hs-form-field">

          <label for="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Contact Number*</label>

          <input id="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="contact"  type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid contact number." >
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
    <h2 class="fs-title">Acquisition of Donors</h2>
    <h3 class="fs-subtitle">How have you been doing in acquiring donors?</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">

          <label for="edit-submitted-acquisition-amount-1 total_number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Address</label>

          <input id="edit-submitted-acquisition-amount-1" class="form-text hs-input" name="total_number_of_donors_in_year_1" size="60" maxlength="128" type="text" value="" placeholder="" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
      <!-- End Total Number of Donors in Year 1 Field -->

      <!-- Begin Total Number of Donors in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_2 field hs-form-field" id="webform-component-acquisition--amount-2">

          <label for="edit-submitted-acquisition-amount-2 total_number_of_donors_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Adhaar Number</label>

          <input id="edit-submitted-acquisition-amount-2" class="form-text hs-input" name="total_number_of_donors_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" required>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Number of Donors in Year 2 Field -->

      <!-- Begin Calc of Total Number of Donors Fields -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_donor_percent_change field hs-form-field">

          <label for="edit-submitted-acquisition-percent-change total_donor_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Age</label>

          <input  class="form-text hs-input" name="age"  size="60" maxlength="128" type="number" >
        </div>
        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />

  </fieldset>



  <!-- Cultivation FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Cultivation and Nurturing your Donors</h2>
    <h3 class="fs-subtitle">How have you been nurturing donors to get better donations?</h3>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">

          <label for="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">District</label>


          <select id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="idcard" required>
<option value="">District</option>
<option value="Kasargode">Kasargode</option>
<option value="Kannur">Kannur</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Wayanade">Wayanad</option>
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

          <input id="edit-submitted-cultivation-amount-2" class="form-text hs-input" name="average_gift_size_in_year_2" required="required" size="60" maxlength="128" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 2 Field -->

      <!-- Begin Average Gift Size Perchent Change Field -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_average_gift_size_percent_change field hs-form-field" id="webform-component-cultivation--percent-change1">

          <label for="edit-submitted-cultivation-percent-change1 average_gift_size_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Time Slot</label>


          <select id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="idcard" required>
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
    <h2 class="fs-title">Retention of your donors</h2>
    <h3 class="fs-subtitle">How long can you keep your donors and their donations?</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1">

          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1? *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="number_of_donors_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->


        <!-- Begin Total Number of Donors Who Gave in Year 1 and Year 2 Field -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--amount-2 hs_number_of_year_1_donors_who_also_gave_in_year_2 field hs-form-field">

          <label for=" edit-submitted-retention-amount-2 number_of_year_1_donors_who_also_gave_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1 that also gave in year 2? *</label>

          <input id="edit-submitted-retention-amount-2" class="form-text hs-input" name="number_of_year_1_donors_who_also_gave_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">

          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 and Year 2 Field -->

        <!-- Begin Retention Rate Percent -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--percent-change field hs-form-field">

          <label for="edit-submitted-retention-percent-change">Retention Rate</label>

         <input id="edit-submitted-retention-percent-change" class="form-text hs-input" name="retention_rate_percent" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">

          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>

        <!-- End Retention Rate Percent -->


        <!-- Begin Final Calc -->
          <
        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">

</fieldset>

</form>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script><script  src="./script.js"></script>

</body>
</html>
