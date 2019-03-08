<!doctype html>
<?php 
	date_default_timezone_set('America/New_York');
  session_start();
  include('inc/db.php');
  //this checks if the user has a login cookie
  include('inc/session.php');
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
    @media (max-width: 767px) {
      .mb-2, .my-2 {
    margin-bottom: 1.5rem!important;
    }

    .mt-2, .my-2 {
        margin-top: 1.5rem!important;
    }
    }
    .homepage-wrap {
    display: contents;
}
    </style>

    <title>Hello, world!</title>
  </head>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <div class="homepage-wrap">
  <img class="my-0 mr-md-auto font-weight-normal" src="https://nlsoftworks.com/wp-content/uploads/2017/11/nls-logo.svg" alt="NL Softworks Logo" height="25px">
  <?php if ($page == "home") {
    ?>
  <a class="btn btn-outline-primary" href="register.php">Sign up</a>

    <?php
  } ?>

  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Features</a>
    <a class="p-2 text-dark" href="support.php">Support</a>
    <a class="p-2 text-dark" href="pricing.php">Pricing</a>
    <a class="p-2 text-dark" href="login.php">Login</a>
  </nav>
  <?php if ($page != "home") {
    ?>
  <a class="btn btn-outline-primary" href="register.php">Sign up</a>

    <?php
  } ?>
  </div>
</div>