<?php
$page = "Forgot Password";
include('header.php');
if (isset($_SESSION['id'])) {
  header("Location: ../dash");
}
?>
<div class="container">
<div class="row justify-content-md-center">

    <div class="col-md-6 order-md-1">
      <h4 class="mb-3">Reset Password</h4>
      <?php getToken(); ?>
      <form action="/inc/forgot.php" method="POST" class="needs-validation" novalidate="">
        <div class="row">
        
        <div class="col-md-12 mb-3">
        <?php getTokenField(); ?>
          <label for="username">Username or Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input name="username" type="text" class="form-control" id="username" placeholder="Username" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
          <br>
          <button class="btn btn-primary btn" type="submit">Reset Password</button>
        </div>

        
        </div>
        </div>

      </form>
      <?php //destroyToken(); ?>
    </div>

<?php
include('footer.php');
?>
</div>