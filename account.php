<?php include('header.php'); ?>
  <body>
  <div class="container">
  
  <?php if (isset($_SESSION['id'])) { ?>
  
  <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?>

  <?php } ?>




<?php include('footer.php'); ?>
</div>