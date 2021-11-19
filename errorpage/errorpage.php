<!DOCTYPE html>
<html style="font-size: 16px;">
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
 ?>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Already Booked</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "/"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="canonical" href="/">
  </head>
  <body data-home-page="https://website1001153.nicepage.io/Home.html?version=4b2ad5c0-f778-44bc-aabf-6745d5e8a94f" data-home-page-title="Home" class="u-body">
    <section class="u-align-left u-clearfix u-gradient u-section-1" id="sec-5f9b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-82ff" data-interval="5000" data-u-ride="carousel" class="u-align-center u-carousel u-expanded-width-xs u-slider u-slider-1">

          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-shape-rectangle u-slide u-white u-carousel-item-1">
              <div class="u-container-layout u-container-layout-1"><span class="u-align-center u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-117c"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-117c"><g><path d="m507.606 145.568-141.174-141.174c-2.813-2.813-6.628-4.394-10.606-4.394h-199.652c-3.978 0-7.793 1.581-10.606 4.394l-141.174 141.174c-2.813 2.813-4.394 6.628-4.394 10.606v199.651c0 3.978 1.581 7.793 4.394 10.606l141.174 141.174c2.813 2.813 6.628 4.394 10.606 4.394h199.651c3.978 0 7.793-1.581 10.606-4.394l141.174-141.174c2.813-2.813 4.394-6.628 4.394-10.606v-199.651c.001-3.978-1.58-7.793-4.393-10.606zm-25.606 204.044-132.388 132.388h-187.224l-132.388-132.388v-187.224l132.388-132.388h187.225l132.387 132.388z"></path><path d="m291 91h-70c-8.771 0-15.679 7.505-14.948 16.25l15.05 180c.65 7.772 7.148 13.75 14.948 13.75h39.9c7.8 0 14.298-5.978 14.948-13.75l15.05-180c.731-8.74-6.172-16.25-14.948-16.25zm-28.848 180h-12.304l-12.542-150h37.387z"></path><path d="m256 331c-24.786 0-44.95 20.165-44.95 44.95v.1c0 24.786 20.165 44.95 44.95 44.95s44.95-20.165 44.95-45.05c0-24.785-20.164-44.95-44.95-44.95zm0 60c-8.244 0-14.95-6.707-14.95-14.95v-.1c0-8.244 6.707-14.95 14.95-14.95s14.95 6.707 14.95 15.05c0 8.243-6.706 14.95-14.95 14.95z"></path>
</g></svg></span>
                <p class="u-custom-font u-heading-font u-large-text u-text u-text-palette-2-dark-1 u-text-variant u-text-1" data-animation-name="fadeIn" data-animation-duration="1750" data-animation-direction="Down" data-animation-delay="0"><?php echo $row['name']; ?>, Booking for RTPCR test already confirmed at <?php echo $row['testingcenter']; ?> &nbsp;&nbsp;<br>
                <?php } } ?>
                </p>
                <p class="u-heading-font u-text u-text-2" data-animation-name="slideIn" data-animation-duration="1000" data-animation-direction="Down">Please cancel the existing booking if you need to change the testing location&nbsp;</p>
                <a href="../citizendashboard/citizen.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-dark-2 u-palette-2-dark-1 u-radius-50 u-btn-1">DASHBOARD</a>
                <a href="https://nicepage.com/k/quiz-html-templates" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-4-dark-1 u-palette-4-dark-2 u-radius-50 u-btn-2">HISTORY</a>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-palette-1-base u-text-grey-30 u-carousel-control-1" href="#carousel-82ff" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-carousel-control-2" href="#carousel-82ff" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>



    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.online" target="_blank">
        <span>Free Website Builder</span>
      </a>.
    </section>
  </body>
</html>
