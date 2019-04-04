<?php
include('header.php');
if (isset($_SESSION['id'])) {
  header("Location: ../dash");
}
?>

<script>
function login(username, password, token, remember) {
	
  if (username == "" || password == "") {
  if (username == "") {
    document.getElementById("username").classList.add("is-invalid");
	} else {
    document.getElementById("username").classList.remove("is-invalid");
  }
  if (password == "") {
    document.getElementById("password").classList.add("is-invalid");
	} else {
    document.getElementById("password").classList.remove("is-invalid");
  }
  } else { 
		
    document.getElementById("username").classList.remove("is-invalid");
    document.getElementById("password").classList.remove("is-invalid");

		var xhttp;  
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
				if (this.responseText == "true") {
					window.location.href = "/dash";
				} else {
					document.getElementById("result").innerHTML  += "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Holy guacamole! </strong>" + this.responseText + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				}
			}
		};
		xhttp.open("GET", "inc/login.php?username=" + username + "&password=" + password + "&token=" + token + "&remember=" + remember, true);
		xhttp.send();   
		}
}
</script>


<div class="container">
<div class="row justify-content-md-center">

    <div class="col-md-6 order-md-1">  

      <span id="result"></span>

      <h4 class="mb-3">Login</h4>

      <?php getToken(); ?>

      <form action="" method="get" enctype="multipart/form-data" >	
        
        <?php getTokenField(); ?>
        
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input name="username" type="text" class="form-control" id="username" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please enter your username.
              </div>
            </div>
          </div>
        </div>  
       
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <input name="password" type="password" class="form-control" id="password" placeholder="Password" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please enter your password.
              </div>
            </div>
          </div>
        </div>
       
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="remember" name="remember">
              <label class="custom-control-label" for="remember">Remember me</label>
            </div>
            <hr class="mb-4">
            <button type="button" name="button" class="btn btn-primary btn-block" onClick="login(username.value, password.value, token.value, remember.checked)">Login</button>
          </div>
        </div>

      </form>

      <p><a href="/forgot.php">Forgot password?</a></p>

      <?php //destroyToken(); ?>

    </div>
       
  </div>

<?php include('footer.php'); ?>

</div>