<?php
$page = "Forgot Password";
include('header.php');
if (isset($_SESSION['id'])) {
  header("Location: ../dash");
}
?>
<script>
function restPassword(username, token) {
  if (username == "") {
    document.getElementById("username").classList.add("is-invalid");
	} else {
    document.getElementById("username").classList.remove("is-invalid");
 
		var xhttp;  
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
			
					document.getElementById("result").innerHTML  += "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Holy guacamole! </strong>" + this.responseText + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				
			}
		};
		xhttp.open("GET", "inc/forgot.php?username=" + username + "&token=" + token, true);
		xhttp.send();   
		}
}
</script>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-6 order-md-1">
      <span id="result"></span>
      <h4 class="mb-3">Reset Password</h4>
      <?php getToken(); ?>
      <form action="" method="get" enctype="multipart/form-data" >	
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
            <button type="button" name="button" class="btn btn-primary btn-block" onClick="restPassword(username.value, token.value)">Login</button>
          </div>        
        </div>
      </div>
    </form>
  </div>
<?php include('footer.php'); ?>
</div>