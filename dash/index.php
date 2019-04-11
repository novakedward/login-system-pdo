<?php
  $page = "Home";
  include('header.php'); 
?>
<div class="row"> 

  <div class="col-10">
    <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
      <h6 class="border-bottom border-gray pb-2 mb-0">Login Info</h6>
        <?php if (isset($_SESSION['id'])) { ?>
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
      </div>
    </div>

    <div class="col-2">
      <?php include('sidebar.php'); ?>  
    </div> 
    
  </div>
  <?php include('footer.php'); ?>