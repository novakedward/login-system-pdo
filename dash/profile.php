<?php
  $page = "Profile";
  include('header.php'); 
?>
<body>
  <div class="row">
    
    <div class="col-10">
      <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
        <div class="media text-muted pt-3">
        <form class="needs-validation col-12" novalidate="" _lpchecked="1"  action="../inc/profile.php" method="POST" >
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" class="" id="" placeholder="" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" name="fname" value="<?php echo $_SESSION['fname']; ?>" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" name="lname" value="<?php echo $_SESSION['lname']; ?>" required="">
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
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="<?php echo $_SESSION['email']; ?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

         
        

            
            <button class="btn btn-primary btn" type="submit">Update Profile</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-2">
      <?php include('sidebar.php'); ?>  
    </div> 
  </div>
  <?php include('footer.php'); ?>