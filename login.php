<?php
include('header.php');
if (isset($_SESSION['id'])) {
  header("Location: ../dash");
}


destroyToken();
?>
<div class="container">
<div class="row justify-content-md-center">

    <div class="col-md-6 order-md-1">
      <h4 class="mb-3">Login</h4>
      <?php getToken(); ?>
      <form action="/inc/login.php" method="POST" class="needs-validation" novalidate="">
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
        </div>

        <div class="col-md-12 mb-3">
          <label for="password">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid email password.
          </div>
        </div>
        <div class="col-md-12 mb-3">
        <div class="custom-control custom-checkbox">
          <input name="remember" type="checkbox" class="custom-control-input" id="remember" value="true">
          <label  class="custom-control-label" for="remember" >Remember me</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
        </div>

      </form>
      <?php destroyToken(); ?>
    </div>
  </div>

<?php
include('footer.php');
?>
</div>