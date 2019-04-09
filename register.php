<?php
$page = "Register";
include('header.php');
?>
<style>
  progress.progress {
    width: 100%;
  }
  .progress {
    height: 6px;
  }
  progress::-webkit-progress-value {
      background: #dc3545!important;
  }
  progress.progress.progress-success::-webkit-progress-value {
      background: #28a745!important;
  }
  progress.progress.progress-warning::-webkit-progress-value {
      background: #28a745!important;
  }
</style>

<script>
  function login(firstName, lastName, username, email, password, rpassword, token) {

    var passwordScore = $('.password-verdict').text()

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
      document.getElementById("invalid-username").innerHTML = "Your username is required.";
    } else {
      var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {          
          if (this.responseText == "error") {
              document.getElementById("username").classList.add("is-invalid");
              document.getElementById("invalid-username").innerHTML = "This name is already taken :(";
          } else {
            document.getElementById("username").classList.remove("is-invalid");
          }
        }
      };
      xhttp.open("GET", "inc/check-username.php?username=" + username, true);
      xhttp.send();   
    }
    if (email == "") {
      document.getElementById("email").classList.add("is-invalid");
      document.getElementById("invalid-email").innerHTML = "Your email is required."; 
    } else {
      function emailIsValid (email) {
        return /\S+@\S+\.\S+/.test(email)
      }
      if  (!emailIsValid (email)){
        document.getElementById("email").classList.add("is-invalid");
        document.getElementById("invalid-email").innerHTML = "This is not a valid email.";
      } else {
        var xhttp;  
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {          
            if (this.responseText == "error") {
              document.getElementById("email").classList.add("is-invalid");
              document.getElementById("invalid-email").innerHTML = "This email used please <a href='login.php'>login</a> or <a href='forgot.php'>reset password</a>"; 
            } else {
              document.getElementById("email").classList.remove("is-invalid");
            }
          }
        };
        xhttp.open("GET", "inc/check-email.php?email=" + email, true);
        xhttp.send();   
      }
    }
    if (password == "") {
      document.getElementById("password").classList.add("is-invalid");
      document.getElementById("invalid-password").innerHTML = "Please enter a valid password."; 
    } else {
      if (passwordScore === "Strong" || passwordScore === "Very Strong" || passwordScore === "Medium") {
        document.getElementById("password").classList.remove("is-invalid");
      } else {
        document.getElementById("password").classList.add("is-invalid");
        document.getElementById("invalid-password").innerHTML = "Please make password stronger!";
      }
    }
    if (rpassword == "") {
      document.getElementById("rpassword").classList.add("is-invalid");
      document.getElementById("invalid-rpassword").innerHTML = "Please repeat the password."; 
    } else {
      if (password !== rpassword) {
        document.getElementById("rpassword").classList.add("is-invalid");
        document.getElementById("invalid-rpassword").innerHTML = "Passwords do not match";
      } else {
        document.getElementById("rpassword").classList.remove("is-invalid");
      }
    }
    if ($(".is-invalid")[0]){
      //alert("no pass");
    } else {
      var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          if (this.responseText == "true") {
            window.location.href = "/login.php";
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
          <div class="row" id="pwd-container">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                <div class="invalid-feedback" id="invalid-password">
                  Please enter a valid password.
                </div>
              </div>
            </div>
            <div class="col-sm-12" style="">
              <div class="pwstrength_viewport_progress"></div>
            </div>
          </div>
        </div>
       
        <div class="mb-3">
          <label for="rpassword">Repeat Password</label>
          <input name="rpassword" type="password" class="form-control" id="rpassword" placeholder="">
          <div class="invalid-feedback" id="invalid-rpassword">
            Please repeat the password.
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

      </form>
    </div>
  </div>

<?php include('footer.php'); ?>

<script type="text/javascript" src="http://reg.mediamixx.info/content/assets/plugins/jquery.pwstrength/examples/pwstrength.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {
    "use strict";
    var options = {};
    options.ui = {
      bootstrap4: true,
      container: "#pwd-container",
      viewports: {
        progress: ".pwstrength_viewport_progress"
      }
    };
    options.common = {
      debug: false,
    };
    $('#password').pwstrength(options);
  });

  $(document).ready(function() {
    $('#username').keyup(function() {
      var username = this.value;
      if (username == "") {
        document.getElementById("username").classList.add("is-invalid");
        document.getElementById("invalid-username").innerHTML = "Your username is required.";
      } else {
        var xhttp;  
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {                     
            if (this.responseText == "error") {
              document.getElementById("username").classList.add("is-invalid");
              document.getElementById("invalid-username").innerHTML = "This name is already taken :(";
            } else {
              document.getElementById("username").classList.remove("is-invalid");
            }
          }
        };
        xhttp.open("GET", "inc/check-username.php?username=" + username, true);
        xhttp.send();   
      }
    });
  });

  $(document).ready(function() {
    $('#email').keyup(function() {
      var email = this.value;
      if (email == "") {
        document.getElementById("email").classList.add("is-invalid");
        document.getElementById("invalid-email").innerHTML = "Your email is required."; 
      } else {         
        function emailIsValid (email) {
          return /\S+@\S+\.\S+/.test(email)
        }
        if  (!emailIsValid (email)){
          document.getElementById("email").classList.add("is-invalid");
          document.getElementById("invalid-email").innerHTML = "This is not a valid email."; 
        } else {
          var xhttp;  
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {          
              if (this.responseText == "error") {
                document.getElementById("email").classList.add("is-invalid");
                document.getElementById("invalid-email").innerHTML = "This email used please <a href='login.php'>login</a> or <a href='forgot.php'>reset password</a>"; 
              } else {
                document.getElementById("email").classList.remove("is-invalid");
              }
            }
          };
          xhttp.open("GET", "inc/check-email.php?email=" + email, true);
          xhttp.send();   
        }
      }
    });
  });

  $(document).ready(function() {
    $('#password').keyup(function() {
      var password = this.value;
      if (password == "") {
        document.getElementById("password").classList.add("is-invalid");
        document.getElementById("invalid-password").innerHTML = "Please enter a valid password."; 
      } else {
        var passwordScore = $('.password-verdict').text()
        if (passwordScore === "Strong" || passwordScore === "Very Strong" || passwordScore === "Medium") {
          document.getElementById("password").classList.remove("is-invalid");
        } else {
          document.getElementById("password").classList.add("is-invalid");
          document.getElementById("invalid-password").innerHTML = "Please make password stronger!";
        }
      }
    });
  });

  $(document).ready(function() {
    $('#rpassword').keyup(function() {
      var rpassword = this.value;
      var password = $("#password").val();
      if (rpassword == "") {
        document.getElementById("rpassword").classList.add("is-invalid");
        document.getElementById("invalid-rpassword").innerHTML = "Please repeat the password."; 
      } else {
        if (password !== rpassword) {
          document.getElementById("rpassword").classList.add("is-invalid");
          document.getElementById("invalid-rpassword").innerHTML = "Passwords do not match";
        } else {
          document.getElementById("rpassword").classList.remove("is-invalid");
        }
      }
    });
  });

  </script>
</div>


