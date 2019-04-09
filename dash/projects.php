<?php
  $page = "Projects";
  include('header.php'); 
?>
<body>
  <div class="row">
    
    <div class="col-10">
    
      <div class="row">
        
      
        <div class="col-3">
          <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
            <div class="media text-muted pt-3">


          <div class="dropdown bootstrap-select show">
            <select class="selectpicker" data-live-search="true" tabindex="-98">
              <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
              <option data-tokens="mustard">Burger, Shake and a Smile</option>
              <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>
          </div>
            </div>
          </div>
        </div>
      

      <div class="col-3">
          <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
            <div class="media text-muted pt-3">
            </div>
          </div>
        </div>
  

      <div class="col-3">
          <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
            <div class="media text-muted pt-3">
            </div>
          </div>
        </div>
   

      <div class="col-3">
          <div class="col-12 my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Profile Details</h6>
            <div class="media text-muted pt-3">
            </div>
          </div>
        </div>
      </div>

    </div>
  

    <div class="col-2">
      <?php include('sidebar.php'); ?>  
    </div> 
  </div>
  <?php include('footer.php'); ?>