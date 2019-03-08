<?php include('header.php'); ?>
  <body>
  <div class="container">
  
  <?php if (isset($_SESSION['id'])) { ?>
  
    <a href="/inc/logout.php">logout</a><br><br>


  <?php echo $_SESSION['fname']; echo "<br>"; ?> 
  <?php echo $_SESSION['lname']; echo "<br>"; ?>
  <?php echo $_SESSION['username']; echo "<br>"; ?>
  <?php echo $_SESSION['email']; echo "<br>"; ?>
  <?php } ?>

  <?php
    if(!isset($_COOKIE['session'])) {
        echo "Cookie named session is not set!";
    } else {
        echo "<br>";
        echo "Cookie session is: " . $_COOKIE['session'];
    }
    ?>

    


<?php include('footer.php'); ?>
</div>