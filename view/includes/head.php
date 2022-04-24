<?php

session_start();

include("funcs/funcs.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fake Amazon | Home</title>

  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


</head>

<body>
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner"> <span>Loading</span> </div>
  </div>
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

  <header id="aa-header">
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <div class="aa-header-top-left">
                <div class="aa-language">
                  <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="img/flag/english.jpg" alt="english flag">ENGLISH <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/Italy.png" alt="">ITALIAN</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>

                <div class="aa-currency">
                  <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fa fa-euro"></i>EURO<span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>

                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+06 23161334</p>
                </div>

              </div>

              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="index.php">Home</a></li>

                  <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                  <?php
                  if (isset($_SESSION['customer_email'])) {
                    echo "<li><a href='logout.php' >Logout</a></li>
                          <li><a href='myOrder.php' >MyOrder</a></li>"
                    ;
                  } else {
                    echo '<li>
                            <a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                          </li>'
                    ;
                  }
                  ?>
                  <?php
                  if (!isset($_SESSION['customer_email'])) {
                  ?>
                    <li class="hidden-xs"><a href="Register.php">Register</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">

              <div class="aa-logo">

                <a href="index.php"> <span class="fa fa-shopping-cart"></span>
                  <p>Fake<strong>Amazon</strong> <span>Your Worst Shopping Partner</span></p>
                </a>

              </div>

              
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
