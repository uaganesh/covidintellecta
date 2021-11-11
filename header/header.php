<!-- =========================
    Header
=========================== -->
<?php
 session_start();
 ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link href="../header/assetsheader/images/favicon/favicon.png" rel="icon">


  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
 <link rel="stylesheet" href="../header/assetsheader/css/libraries.css">
  <link rel="stylesheet" href="../header/assetsheader/css/header.css">
</head>
<body>
<header class="header header-layout1">

  <?php
     if(!isset($_SESSION["useruid"]))
     {  ?>

  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index/index.php">
        <img src="../header/assetsheader/images/logo/logo-light.png" class="logo-light" alt="logo">
        <img src="../header/assetsheader/images/logo/logo-dark.png" class="logo-dark" alt="logo">
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav__item has-dropdown">
            <a href="../index/index.php"  class="dropdown-toggle nav__item-link active">Home</a>

          <li class="nav__item has-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">More Info</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
                <a color="red" href="../labregistration/labreg.php" class="nav__item-link">Lab Registration</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="about-us.html" class="nav__item-link">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="services.html" class="nav__item-link">Our Services</a>
              </li><!-- /.nav-item -->

              <li class="nav__item">
                <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="../login/login.php" class="nav__item-link">Appointments</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
              </li> <!-- /.nav-item -->
              <li class="nav__item">
                <a href="gallery.html" class="nav__item-link">Our Gallery</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->


          <li class="nav__item">
            <a href="contact-us.html" class="nav__item-link">Contacts</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
      </div><!-- /.navbar-collapse -->

        <a href="../login/login.php" class="btn btn__primary btn__rounded ml-30">
          <i class="icon-calendar"></i>
          <span>Appointment</span>
        </a>
      </div>
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
<!-- Header if user is logged in to the system // -->
<?php }
else {
?>
  <nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="../header/assetsheader/images/logo/logo-light.png" class="logo-light" alt="logo">
        <img src="../header/assetsheader/images/logo/logo-dark.png" class="logo-dark" alt="logo">
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav__item has-dropdown">
            <a href="../index/index.php"  class="dropdown-toggle nav__item-link active">Home</a>

          <li class="nav__item has-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
                <a href="about-us.html" class="nav__item-link">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="services.html" class="nav__item-link">Our Services</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="services-single.html" class="nav__item-link">single Services</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="../login/login.php" class="nav__item-link">Appointments</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
              </li> <!-- /.nav-item -->
              <li class="nav__item">
                <a href="gallery.html" class="nav__item-link">Our Gallery</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->


          <li class="nav__item">
            <a href="contact-us.html" class="nav__item-link">Contacts</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
      </div><!-- /.navbar-collapse -->

        <a href="../includes/logout.php" class="btn btn__primary btn__rounded ml-30">
          <i class="icon-calendar"></i>
          <span>Logout</span>
        </a>
      </div>
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
<?php
} ?>

</header><!-- /.Header -->
</body>
