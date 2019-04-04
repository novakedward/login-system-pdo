<?php
include('header.php');
?>


<script>

function login(firstName, lastName, username, email, password, rpassword, token) {
	//alert(firstName + lastName + username + email + password + rpassword + token)
  if (firstName == "" || lastName == "") {
    if (firstName == "") {
    document.getElementById("invalid-fname").innerHTML = "Please fill in your first name"; 
    document.getElementById("firstName").classList.add("is-invalid");
    } else {
      document.getElementById("firstName").classList.remove("is-invalid");
    }
    if (lastName == "") {
      document.getElementById("lastName").classList.add("is-invalid");
    } else {
      document.getElementById("lastName").classList.remove("is-invalid");
    }
    if (username == "") {
      document.getElementById("username").classList.add("is-invalid");
    } else {
      document.getElementById("username").classList.remove("is-invalid");
    }
    if (email == "") {
      document.getElementById("email").classList.add("is-invalid");
    } else {
      document.getElementById("email").classList.remove("is-invalid");
    }
    if (password == "") {
      document.getElementById("password").classList.add("is-invalid");
    } else {
      document.getElementById("password").classList.remove("is-invalid");
    }
    if (rpassword == "") {
      document.getElementById("rpassword").classList.add("is-invalid");
    } else {
      document.getElementById("rpassword").classList.remove("is-invalid");
    }


  } else { 
		
  document.getElementById("firstName").classList.remove("is-invalid");
  document.getElementById("lastName").classList.remove("is-invalid");
  document.getElementById("username").classList.remove("is-invalid");
  document.getElementById("email").classList.remove("is-invalid");
  document.getElementById("password").classList.remove("is-invalid");
  document.getElementById("rpassword").classList.remove("is-invalid");
  
		var xhttp;  
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				

				if (this.responseText == "true") {
					window.location.href = "/dash";
				} else if (this.responseText == "user_taken"){
          document.getElementById("invalid-username").innerHTML = "This username is already taken"; 
          document.getElementById("username").classList.add("is-invalid");

        } else if (this.responseText == "email_taken"){
          document.getElementById("invalid-email").innerHTML = "This email is already taken"; 
          document.getElementById("email").classList.add("is-invalid");

        } else {
					document.getElementById("result").innerHTML  += "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Holy guacamole! </strong>" + this.responseText + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
				}
			}
		};

		xhttp.open("GET", "inc/register.php?fname=" + firstName + "&lname=" + lastName + "&username=" + username + "&email=" + email + "&password=" + password + "&rpassword=" + rpassword + "&token=" + token, true);
		xhttp.send();   
		}
}
</script>


<div class="container">
<div class="row justify-content-md-center">
  <div class="col-md-6 order-md-1">
  <img src="http://www.allwhitebackground.com/images/2/1903.jpg" class="img-fluid" />
  </div>
    <div class="col-md-6 order-md-1">

    <span id="result"></span>


      <h4 class="mb-3">Signup</h4>
      <?php getToken(); ?>

      <form action="" method="get" enctype="multipart/form-data" >	

      <!--<form action="inc/register.php" method="POST" class="needs-validation" novalidate="">-->
        <?php getTokenField(); ?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input name="fname" type="text" class="form-control" id="firstName" placeholder="" value="" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            <div class="invalid-feedback" id="invalid-fname">
            Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input name="lname" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input name="username" type="text" class="form-control" id="username" placeholder="Username" required="">
            <div class="invalid-feedback" id="invalid-username" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback" id="invalid-email">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="password">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid email password.
          </div>
        </div>
      
        <div class="mb-3">
          <label for="rpassword">Repeat Password</label>
          <input name="rpassword" type="password" class="form-control" id="rpassword" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid email password.
          </div>
        </div>

        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">I am over 16 years old</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Send me emails with updates</label>
        </div>
        <hr class="mb-4">
        <button type="button" name="button" class="btn btn-primary btn-block" onClick="login(firstName.value, lastName.value, username.value, email.value, password.value, rpassword.value, token.value)">Login</button>

        <!--<button class="btn btn-primary btn-lg btn-block" type="submit">Register Account</button>-->
      </form>
    </div>
  </div>

<?php
include('footer.php');
?>
</div>