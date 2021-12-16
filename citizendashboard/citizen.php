<!DOCTYPE html>
<html style="font-size: 16px;">
<?php include_once '../header/header.php' ?>

<?php
if(!isset($_SESSION['citizen'])){ //checking session check variable

    header("Location:../login/login.php");
}
?>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Here are some options">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
     <style>
     #error
     {
       color:green;
       font-weight: bold;

     }
     </style>
    <?php
     if(isset($_GET["error"]))
     {
       if($_GET["error"]=="booked")
       {
        echo "<p align='center' id='error'>Successfully Booked Your Test</p>";
       }
     } ?>
    <title>Citizen Dashboard</title>


    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Copy-of-Contact-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#3ea3f2">
    <meta property="og:title" content="Copy of Contact 1">
    <meta property="og:type" content="website">
  </head>
  <?php include_once '../header/header.php' ?>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-84ce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-white u-text-1" spellcheck="false">Citizen Dashboard<br>
        </h1>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-custom-item u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-item u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 511.634 511.634" style=""><use xlink:href="#svg-754b"></use></svg><svg class="u-svg-content" viewBox="0 0 511.634 511.634" id="svg-754b"><g><g><path d="m205.821 59.788c13.268-.528 13.258-19.477 0-20h-.007c-13.268.53-13.251 19.479.007 20z"></path><path d="m163.396 174.077-.005-.005c-7.81-7.81-20.471-7.808-28.282.002-14.357 14.637-.302 38.583 19.323 33.466l2.496 2.496c-5.152 7.228-8.743 15.643-10.277 24.746h-8.504c-3.458-5.978-9.921-10-17.324-10h-.007c-11.045 0-19.996 8.954-19.996 20 .203 20.545 27.12 27.461 37.328 10h8.504c1.534 9.104 5.125 17.518 10.277 24.747l-2.496 2.496c-6.998-1.87-14.77.139-19.978 5.868l-.005.005c-7.43 8.173-6.825 20.819 1.348 28.25 8.151 7.414 20.807 6.842 28.255-1.348 4.75-5.225 6.217-12.28 4.522-18.631l2.497-2.497c7.228 5.152 15.643 8.743 24.746 10.277v8.503c-5.978 3.458-10 9.921-10 17.324v.007c0 11.045 8.954 19.996 20 19.996 20.545-.203 27.461-27.12 10-37.328v-8.503c9.104-1.534 17.519-5.125 24.747-10.277l2.497 2.497c-1.696 6.351-.229 13.406 4.522 18.631l.005.005c7.448 8.191 20.1 8.756 28.25 1.342 8.173-7.43 8.772-20.082 1.343-28.255-5.209-5.729-12.981-7.738-19.979-5.868l-2.495-2.495c5.152-7.229 8.744-15.643 10.277-24.747h8.503c3.458 5.978 9.921 10 17.324 10h.008c11.046 0 19.996-8.954 19.996-20-.203-20.545-27.12-27.461-37.328-10h-8.503c-1.534-9.104-5.125-17.518-10.277-24.747l2.496-2.496c6.818 1.794 14.096.015 19.322-5.179l.005-.005c7.81-7.811 7.808-20.471-.003-28.282-7.81-7.811-20.477-7.807-28.287.002-5.235 5.235-6.961 12.649-5.179 19.321l-2.496 2.496c-7.229-5.153-15.643-8.744-24.747-10.277v-8.503c5.978-3.458 10-9.921 10-17.324v-.007c0-11.045-8.954-19.996-20-19.996-20.545.203-27.461 27.12-10 37.328v8.503c-9.104 1.534-17.518 5.125-24.747 10.277l-2.496-2.496c1.78-6.671.054-14.085-5.18-19.319zm42.422 30.706c22.056 0 40 17.944 40 40-2.197 53.066-77.811 53.05-80 0 0-22.056 17.944-40 40-40z"></path><path d="m441.403 357.285c-11.164-11.638-31.258-11.637-42.424 0l-25.371 25.372-.955-.956c-11.697-11.695-30.729-11.695-42.424 0-11.695 11.696-11.695 30.727 0 42.423l22.167 22.167c11.697 11.695 30.727 11.695 42.424 0l46.583-46.583c11.638-11.164 11.638-31.257 0-42.423zm-14.142 28.281-46.583 46.583c-3.897 3.897-10.241 3.898-14.139 0l-22.167-22.167c-3.897-3.898-3.897-10.241 0-14.139 3.898-3.898 10.241-3.898 14.139 0l8.026 8.026c3.725 3.873 10.418 3.873 14.143 0l32.442-32.442c3.72-3.878 10.419-3.878 14.139 0 3.879 3.722 3.879 10.418 0 14.139z"></path><path d="m395.816 292.24v-212.453c0-16.542-13.458-30-30-30h-32.684c-3.463-5.973-9.928-10-17.315-10h-61.003c-11.778-53.07-86.238-53.032-97.994 0h-61.003c-7.387 0-13.852 4.026-17.315 10h-32.685c-16.542 0-30 13.458-30 30v362c0 16.542 13.458 30 30 30h255.206c64.93 78.676 194.336 33.259 194.793-70 0-57.282-44.014-104.479-100-109.547zm-20-212.453v212.453c-6.866.622-13.552 1.877-19.999 3.707v-196.16c0-5.523-4.478-10-10-10h-10v-20h29.999c5.514.001 10 4.487 10 10zm-214.995 20.001h-65.004v-40h69.999c5.523 0 10-4.477 10-10 1.649-39.804 58.363-39.786 60.003 0 0 5.523 4.477 10 10 10h69.999v40h-64.996c-13.268.528-13.258 19.477 0 20h64.996c7.388 0 13.853-4.027 17.316-10h2.684v194.035c-26.915 13.793-47.438 38.355-55.842 67.963h-159.16c-13.268.528-13.258 19.477 0 20h155.451c-.6 6.571-.601 13.43 0 20.001h-200.449v-302h2.683c3.463 5.974 9.928 10 17.316 10h65.004c13.268-.527 13.258-19.476 0-19.999zm-115.004 351.999c-5.514 0-10-4.486-10-10v-362c0-5.514 4.486-10 10-10h30v20h-9.999c-5.523 0-10 4.477-10 10v322c0 5.523 4.477 10 10 10h214.156c1.979 6.971 4.629 13.663 7.876 20zm339.999 40.002c-49.626 0-90-40.374-90-90 4.944-119.397 175.074-119.362 180 .001 0 49.625-40.374 89.999-90 89.999z"></path><path d="m205.825 99.788h-.007c-5.523 0-9.996 4.477-9.996 10 .528 13.263 19.479 13.263 20.003 0 0-5.523-4.477-10-10-10z"></path>
</g>
</g></svg></span>
                <h5 class="u-custom-font u-font-raleway u-text u-text-2">Book Your Slot</h5>
                <p class="u-text u-text-grey-40 u-text-3" spellcheck="false">Book an RTPCR Test Slot at your nearest lat abt your convenience. Registration in the portal is mandatory for RTPCR test&nbsp;</p>
                <a href="../slotbooking/slotbooking.php" class="u-btn u-button-style u-custom-color-1 u-custom-item u-btn-1">BOOK NOW</a>
              </div>
            </div>

            <div class="u-align-left u-container-style u-custom-item u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-item u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-c110"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c110"><g><path d="m32 456c.025 22.081 17.919 39.975 40 40h296c61.851.006 111.996-50.129 112.002-111.98.004-43.264-24.912-82.66-64.002-101.199v-162.821c0-2.122-.843-4.157-2.343-5.657l-96-96c-1.5-1.5-3.535-2.343-5.657-2.343h-240c-22.081.025-39.975 17.919-40 40zm432-72c0 53.019-42.981 96-96 96s-96-42.981-96-96 42.981-96 96-96c52.995.06 95.94 43.005 96 96zm-144-340.687 68.687 68.687h-44.687c-13.249-.015-23.985-10.751-24-24zm-272 12.687c.015-13.248 10.752-23.985 24-24h232v56c.025 22.081 17.919 39.975 40 40h56v148.666c-59.265-17.683-121.643 16.025-139.327 75.289-14.627 49.023 5.828 101.725 49.696 128.045h-238.369c-13.248-.015-23.985-10.752-24-24z"></path><path d="m160 168c0 4.418 3.582 8 8 8h192c4.418 0 8-3.582 8-8s-3.582-8-8-8h-192c-4.418 0-8 3.582-8 8z"></path><path d="m88 224h160c4.418 0 8-3.582 8-8s-3.582-8-8-8h-160c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m280 256h-64c-4.418 0-8 3.582-8 8s3.582 8 8 8h64c4.418 0 8-3.582 8-8s-3.582-8-8-8z"></path><path d="m88 320h144c4.418 0 8-3.582 8-8s-3.582-8-8-8h-144c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m88 176h48c4.418 0 8-3.582 8-8s-3.582-8-8-8h-48c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m360 208h-80c-4.418 0-8 3.582-8 8s3.582 8 8 8h80c4.418 0 8-3.582 8-8s-3.582-8-8-8z"></path><path d="m88 272h96c4.418 0 8-3.582 8-8s-3.582-8-8-8h-96c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m216 400h-32c-4.418 0-8 3.582-8 8s3.582 8 8 8h32c4.418 0 8-3.582 8-8s-3.582-8-8-8z"></path><path d="m88 416h64c4.418 0 8-3.582 8-8s-3.582-8-8-8h-64c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m88 368h48c4.418 0 8-3.582 8-8s-3.582-8-8-8h-48c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m88 128h96c4.418 0 8-3.582 8-8s-3.582-8-8-8h-96c-4.418 0-8 3.582-8 8s3.582 8 8 8z"></path><path d="m216 352h-48c-4.418 0-8 3.582-8 8s3.582 8 8 8h48c4.418 0 8-3.582 8-8s-3.582-8-8-8z"></path><path d="m322.879 329.854c-3.395 2.828-3.854 7.873-1.026 11.267 0 0 0 .001.001.001 0 0 30.333 36.449 39.97 47.964.971 1.161 2.556 2.512 5.331 2.87.28.036.563.044.845.044h56c4.418 0 8-3.582 8-8s-3.582-8-8-8h-52.253l-37.6-45.122c-2.828-3.394-7.873-3.853-11.268-1.024z"></path>
</g></svg></span>
                <h5 class="u-custom-font u-font-raleway u-text u-text-6">View History</h5>
                <p class="u-text u-text-grey-40 u-text-7" spellcheck="false">Check history and manage dashboard<br>
                  <br>
                  <br>
                </p>
                <a href="../history/history.php" class="u-border-none u-btn u-button-style u-custom-item u-palette-4-dark-1 u-btn-3">HISTORY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>
