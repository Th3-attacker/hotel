<!DOCTYPE html>
<html lang="en">
<head>
<title>House Hotel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Marimar Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/animate.css">
<link href="./plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="./styles/responsive.css">
<link rel="stylesheet" type="text/css" href="./styles/custom-navbar.css">
<link rel="stylesheet" type="text/css" href="./styles/bootstrap.css">
 <link href="./styles/ekko-lightbox.css" rel="stylesheet">

 <link href="./styles/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="./styles/datepicker.css" rel="stylesheet" media="screen">
</head>
<body>
 <?php include('./theme/small-navbar.php');?>  
 <br/>
<div class="super_container">
  <header class="header">
    <div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
      
      <!-- Logo -->
      <div class="logo"><a href="#"><img class="logo_1" src="./images/logo.png" alt=""><img class="logo_2" src="./images/logo_2.png" alt=""><img class="logo_3" src="./images/logo_3.png" alt=""></a></div>

      <!-- Main Nav -->
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-center justify-content-start">
           <li><a href="./index.php">Acceuil</a></li>
          <li><a href="./index.php?p=about">About us</a></li>
          <li><a href="./index.php?p=rooms">Chambres</a></li> 
          <li><a href="./index.php?p=contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Social -->
      <div class="social header_social">
        <ul class="d-flex flex-row align-items-center justify-content-start">
  

          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
        </ul>
      </div>

      <!-- Header Right -->
      <div class="header_right d-flex flex-row align-items-center justify-content-start">
        
        <!-- Search Activation Button -->
        <div class="search_button">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
            <g>
              <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"></path>
            </g>
          </svg>
        </div>

        <!-- Header Link -->
        <div class="header_link"><a href="#">Reserver Maintenant</a></div>

        <!-- Hamburger Button -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

      </div>

      <!-- Search Panel -->
      <div class="search_panel">
        <div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
          <img src="./images/search.png" alt="">
          <form action="#" class="search_form">
            <input type="text" class="search_input" placeholder="Type your search here" required="required">
          </form>
          <div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center"><div></div></div>
        </div>
      </div>
    </div>
      
  </header>
  <div class="logo_overlay">
    <div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
      <div class="logo"><a href="#"><img src="./images/logo_3.png" alt=""></a></div>
    </div>
  </div>

  <!-- Menu Overlay -->

  <div class="menu_overlay">
    <div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
      
      <!-- Hamburger Button -->
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

    </div>
  </div>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_container d-flex flex-column align-items-center justify-content-center">

      <!-- Menu Navigation -->
      <nav class="menu_nav text-center">
        <ul>
          <li><a href="./index.php">Acceuil</a></li>
          <li><a href="./index.php?p=about">About us</a></li>
          <li><a href="./index.php?p=rooms">Chambres</a></li> 
          <li><a href="./index.php?p=contact">Contact</a></li>
        </ul>
      </nav>
      <div class="button menu_button"><a href="./theme/template.php?p=reserve">Faite une reservation</a></div>
      </div>
  </div>
  <div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./images/home.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
      <div class="home_title"><h1>Book Your Stay</h1></div>
      <div class="home_text text-center">Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor, sit amet elementum lorem. Ut cursus tempor turpis.</div>
      <div class="button home_button"><a href="./theme/template.php?p=form-reserve.php">Reserver</a></div>
    </div>
  </div>