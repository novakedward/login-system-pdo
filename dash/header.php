<!doctype html>
<?php 
	 //Adds required functions
   include('../config.php');

  if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
  }



?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <style>
      html, body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */
      }

      body {
        padding-top: 56px;
      }

      @media (max-width: 991.98px) {
        .offcanvas-collapse {
          position: fixed;
          top: 56px; /* Height of navbar */
          bottom: 0;
          left: 100%;
          width: 100%;
          padding-right: 1rem;
          padding-left: 1rem;
          overflow-y: auto;
          visibility: hidden;
          background-color: #343a40;
          transition: visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
          transition: transform .3s ease-in-out, visibility .3s ease-in-out;
          transition: transform .3s ease-in-out, visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
        }
        .offcanvas-collapse.open {
          visibility: visible;
          -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
        }
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, .75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .nav-underline .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
        color: #6c757d;
      }

      .nav-underline .nav-link:hover {
        color: #007bff;
      }

      .nav-underline .active {
        font-weight: 500;
        color: #343a40;
      }

      .text-white-50 { color: rgba(255, 255, 255, .5); }

      .bg-purple { background-color: #6f42c1; }

      .lh-100 { line-height: 1; }
      .lh-125 { line-height: 1.25; }
      .lh-150 { line-height: 1.5; }
      main.container-fluid {
          margin-top: 16px;
      }
      .alert {
          margin-bottom: 0rem;
      }
      button.btn.dropdown-toggle.btn-light {
    height: 42px;
    padding: 6px;
  }
  .bs-actionsbox, .bs-donebutton, .bs-searchbox {
    padding: 0;
  }
  .dropdown-menu.show {
    padding-top: 0px;
  }
  .form-control {
    border: 0px solid #ced4da;
    border-radius: 0rem;
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%;
}
.bs-searchbox .form-control {
    border-bottom: 1px solid #efefef;
}
.bootstrap-select .no-results {

    margin: 0px;
}
.bootstrap-select .no-results {
    padding: 9px;
}
.dropdown-menu.show {
    padding-bottom: 0px;
}
    </style>
    <title><?php echo $page; ?> | Dashboard</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../dash/projects.php">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notifications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Switch account</a>
      </li>
    </ul>
    <ul class="navbar-nav">
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <a class="dropdown-item" href="security.php">Security</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="../inc/logout.php">Logout</a>
        </div>
      </li>
    </ul>

  </div>
</nav>
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>

  </nav>
</div>



<main role="main" class="container-fluid">

<?php 


if ($emailverified != "1") { ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> You should verify your email.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>

<?php } ?>