<?php
$page = "Rest Password";
include('header.php');
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-12 order-md-1">
    <?php
      $validate = $_GET["validate"];
      $username = $_GET["username"];

      //Makes sure username is not used
      $stmt = $conn->prepare('SELECT email FROM users WHERE username=? AND pvalidate=?');
      $stmt->execute([$username, $validate]);
      //this echos how many results were found
      $resultCheck = $stmt->rowCount();

      if (empty($validate) || empty($username)) {
        echo "Error this token is expired";
        exit();
      }

      if ($resultCheck == 0) {
        echo "Error this token is expired";
        exit();
      }
    ?>
    <h4 class="mb-3">Reset Password</h4>
      <?php getToken(); ?>
        <form class="needs-validation col-12" novalidate="" _lpchecked="1"  action="../inc/reset.php" method="POST" >
          <?php getTokenField(); ?>
            <input type="text" class="" id="" placeholder="" name="validate" value="<?php echo $_GET["validate"]; ?>" hidden>
            <input type="text" class="" id="" placeholder="" name="username" value="<?php echo $_GET["username"]; ?>" hidden>
            <div class="row">
              
              <div class="col-md-6 mb-3">
                <label for="npass">New Password</label>
                <input type="text" class="form-control" id="npass" placeholder="" name="npass" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="cnpass">Verify Password</label>
                <input type="text" class="form-control" id="cnpass" placeholder="" name="cnpass" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

            </div>
            <button class="btn btn-primary btn" type="submit">Update Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
</div>