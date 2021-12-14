<!DOCTYPE html>
<html style="font-size: 16px;">
<?php
include_once '../header/header.php';
include_once '../includes/dbh.php'; ?>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="PENDING TEST">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">

    <meta name="generator" content="Nicepage 4.1.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Akaya+Kanadaka:400">



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="skrollable u-align-center u-clearfix u-gradient u-section-1" id="carousel_e23f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-text u-text-custom-color-1 u-text-1">
              <span style="font-size: 3rem;">Con​firm Result</span>
              <span style="font-size: 1.5rem;"></span>&nbsp;
            </h2>
            <?php

                             $sql="SELECT * FROM activebooking WHERE  bookingid='" . $_GET['id'] . "'";
                             $result=mysqli_query($conn, $sql);
                             $resultCheck = mysqli_num_rows($result);

                             if($resultCheck > 0)
                                 {
                                    while($row = mysqli_fetch_assoc($result))
                                       {
?>
            <div class="u-form u-form-1">
              <form action="../includes/testresult.php" method="POST" onsubmit="return confirm('Test Result once submitted cannot be changed. Please Confirm before making changes.If correct please press OK');"  class="u-clearfix u-form-spacing-31 u-form-vertical u-inner-form" source="email" name="form" style="padding: 11px;">

                <div class="u-form-group u-form-name">
                  <label for="name-fdfb" class="u-label u-text-palette-5-dark-3 u-label-1">Booking ID</label>
                  <input type="text" id="name-fdfb" name="name" value="<?php echo $row['bookingid']; ?>" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"  readonly>
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-fdfb" class="u-label u-text-palette-5-dark-3 u-label-2">Name</label>
                  <input type="text" id="email-fdfb" name="email" value="<?php echo $row['name']; ?>" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"  readonly>
                </div>
                <div class="u-form-group u-form-name u-form-group-3">
                  <label for="name-1698" class="u-label u-text-palette-5-dark-3 u-label-3">Address</label>
                  <input type="text" id="name-1698" name="name-1" value="<?php echo $row['address']; ?>" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white" readonly>
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="text-4300" class="u-label u-text-palette-5-dark-3 u-label-4">Contact</label>
                  <input type="text" placeholder="" id="text-4300" name="text" value="<?php echo $row['contact']; ?>" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white" readonly>
                </div>
                <div class="u-form-group u-form-select u-form-group-5">
                  <label for="select-6722" class="u-label u-text-palette-5-dark-3 u-label-5">Test Result</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-6722" name="select" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                      <option value="">Select</option>
                      <option value="Positive">Positive</option>
                      <option value="Negative">Negative</option>
                    </select>

                  </div>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-form-group-6">
                  <input type="submit" value="submit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-4 u-hover-custom-color-5 u-btn-1">

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php }
}
?>



    <section class="u-backlink u-clearfix u-grey-80">

      <p class="u-text">

      </p>
      <a class="u-link" href="" target="_blank">

      </a>.
    </section>
  </body>
</html>
