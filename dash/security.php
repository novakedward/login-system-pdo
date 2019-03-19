<?php
  $page = "Profile";
  include('header.php'); 
?>
<body>
  <div class="row">
    
    <div class="col-10">
      <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Security</h6>
        <?php getToken(); ?>
        <form class="needs-validation col-12" novalidate="" _lpchecked="1"  action="../inc/security.php" method="POST" >
          <?php getTokenField(); ?>
            <input type="text" class="" id="" placeholder="" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cpass">Current Password</label>
                <input type="text" class="form-control" id="cpass" placeholder="" name="cpass" value="" required=""  style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="npass">New Pass</label>
                <input type="text" class="form-control" id="npass" placeholder="" name="npass" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cnpass">Verift New Pass</label>
                <input type="text" class="form-control" id="cnpass" placeholder="" name="cnpass" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>


            <hr class="mb-4">

            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Update Profile</button>
          </form>
      </div>
    </div>
 

    <div class="col-2">
      <?php include('sidebar.php'); ?>  
    </div> 
  </div>
  <?php include('footer.php'); ?>