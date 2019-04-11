<?php
  $page = "Profile";
  include('header.php'); 
?>
<body>
  <div class="row">

    <script>
      function updateProf(userid, fname, lname, email, username, token) {
        if ($(".is-invalid")[0]){
          //there are errors in the form
        } else {

          var xhttp;  
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              
              if (this.responseText == "true") {
                window.location.href = "/dash";
              } else {
                document.getElementById("updateProfResult").innerHTML  += "<div style='margin-top: 16px;' class='alert alert-success alert-dismissible fade show' role='alert'><strong>Holy guacamole! </strong>" + this.responseText + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
              }
            }
          };
          xhttp.open("GET", "../inc/profile.php?userid=" + userid + "&fname=" + fname + "&lname=" + lname + "&email=" + email + "&username=" + username + "&token=" + token, true);
          xhttp.send();   
          }
      }
    </script>

    <div class="col-10">
      <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
        
        <span id="updateProfResult"></span>

        <div class="media text-muted pt-3">
        <?php getToken(); ?>
          <form class="needs-validation col-12"  action="" method="get" enctype="multipart/form-data" >	
          <?php getTokenField(); ?>
          <input type="text" class="" id="userid" placeholder="" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
            <div class="row">

              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="fname" placeholder="" name="fname" value="<?php echo $_SESSION['fname']; ?>" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lame" placeholder="" name="lname" value="<?php echo $_SESSION['lname']; ?>" required="">
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
                <input type="text" class="form-control" id="username" placeholder="Username" required="" name="username" value="<?php echo $_SESSION['username']; ?>">
                <div class="invalid-feedback" id="invalid-username" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="<?php echo $_SESSION['email']; ?>">
              <div class="invalid-feedback" id="invalid-email">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <button type="button" name="button" class="btn btn-primary btn" onClick="updateProf(userid.value, fname.value, lname.value, email.value, username.value, token.value)">Update Profile</button>
          </form>
        </div>
      </div>


      <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Profile Image</h6>
        <div class="media text-muted pt-3">
          <?php 
            try {
              $username = $_SESSION['username'];
              
              $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
              $stmt->execute([$username]);
              $row = $stmt->fetch();
              
              $user_image_etc = $row['image'];
            
            } catch(PDOException $e) { 
              echo $sql . "<br>" . $e->getMessage();
            }
          ?>
          <script>
            function delProfImage(userid, token) {
                var xhttp;  
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    
                  
                      document.getElementById("result").innerHTML  += "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Holy guacamole! </strong>" + this.responseText + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                    
                  }
                };
                xhttp.open("GET", "../inc/delete.php?userid=" + userid + "&token=" + token, true);
                xhttp.send();   
            }
          </script>
          <div class="row" style="width: 100%;">
            <div class="col-12">
              <span id="result"></span>
              <?php if ($user_image_etc == "") { ?>
              <?php } else { ?>
              <?php getToken(); ?>
              <form action="" method="get" enctype="multipart/form-data" >	
                <?php getTokenField(); ?>
                <input type="text" class="" id="userid" placeholder="" name="userid" value="<?php echo $_SESSION['id']; ?>" hidden>
                <button type="button" name="button" class="btn btn-danger" onClick="delProfImage(userid.value, token.value)">Delete Profile Image</button>
              </form>
              <?php } ?>
            </div> 
            <style>
              .file-upload {
                background-color: #ffffff;
                width: 100%;
                margin: 0 auto;
                padding: 20px;
              }

              .file-upload-content {
                display: none;
                text-align: center;
              }

              .file-upload-input {
                position: absolute;
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                outline: none;
                opacity: 0;
                cursor: pointer;
              }

              .image-upload-wrap {
                margin-top: 20px;
                border: 4px dashed #efefef;
                position: relative;
              }

              .image-dropping,
              .image-upload-wrap:hover {
                border: 4px dashed #1FB26480;
              }

              .image-title-wrap {
                padding: 0 15px 15px 15px;
                color: #222;
              }

              .drag-text {
                text-align: center;
              }

              .drag-text h3 {
                font-weight: 400;
                padding: 60px 0;
                font-size: 1em;
              }

              .file-upload-image {
                max-height: 500px;
                max-width: 500px;
                padding: 20px;
              }
            </style>
            <script>
              function readURL(input) {
                if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                  };

                  reader.readAsDataURL(input.files[0]);

                } else {
                  removeUpload();
                }
              }

              function removeUpload() {
                $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                $('.file-upload-content').hide();
                $('.image-upload-wrap').show();
              }
              $('.image-upload-wrap').bind('dragover', function () {
                      $('.image-upload-wrap').addClass('image-dropping');
                  });
                  $('.image-upload-wrap').bind('dragleave', function () {
                      $('.image-upload-wrap').removeClass('image-dropping');
              });
            </script>
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <form action="../inc/upload.php" method="post" enctype="multipart/form-data" class="col-12">
              <input type="text" class="" id="" placeholder="" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
              
                <div class="mb-3">
                  <div class="file-upload">
                    <div class="image-upload-wrap">
                      <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id="fileToUpload" name="fileToUpload"/>
                      <div class="drag-text">
                        <h3>Click here or drag and drop a file</h3>
                      </div>
                    </div>
                    <div class="file-upload-content">
                      <img class="file-upload-image" src="#" alt="your image" />
                      <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image btn btn-danger btn">Remove <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>
                </div> 
                <input class="btn btn-primary btn" type="submit" value="Upload Image" name="submit">
              </div> 
            </form>
          </div>
        </div>
      </div>
    <div class="col-2">
      <?php include('sidebar.php'); ?>  
    </div> 
  </div>
<?php include('footer.php'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#username').keyup(function() {
      var usersuser = "<?php echo  $_SESSION['username']; ?>";
      var username = this.value;
      if (username == "") {
        document.getElementById("username").classList.add("is-invalid");
        document.getElementById("invalid-username").innerHTML = "Your username is required.";
      } else {
        if (username == usersuser) {
          document.getElementById("username").classList.remove("is-invalid");
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
          xhttp.open("GET", "../inc/check-username.php?username=" + username, true);
          xhttp.send();   
        }
      }
    });
  });

  $(document).ready(function() {
    $('#email').keyup(function() {
      var usersemail = "<?php echo  $_SESSION['email']; ?>";
      var email = this.value;
      if (email == "") {
        document.getElementById("email").classList.add("is-invalid");
        document.getElementById("invalid-email").innerHTML = "Your email is required."; 
      } else {     
        if (usersemail == email) {
          document.getElementById("email").classList.remove("is-invalid");
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
                  document.getElementById("invalid-email").innerHTML = "This email used on another account"; 
                } else {
                  document.getElementById("email").classList.remove("is-invalid");
                }
              }
            };
            xhttp.open("GET", "../inc/check-email.php?email=" + email, true);
            xhttp.send();   
          }
        }
      }
    });
  });
</script>
