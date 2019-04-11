<?php
  $page = "Support";
  include('header.php'); 
?>
<style>
.mb-3, .my-3 {
    margin-bottom: 0rem!important;
}
.m-md-3 {
    margin: 0rem!important;
}
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
i.fas.fa-search.h4.text-body {
    padding-top: 5px;
    padding-left: 10px;
    font-size: 16px;
}
.searchbar .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0.25rem;
}
.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem 12px 10px;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}
</style>
  <body>
  
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light searchbar">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Knowledge Base</h1>
    <p class="lead font-weight-normal">A custom login solution that is secure and smooth</p>
    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 col-lg-10">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
                    </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>


<div class="container">
<br><br>
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
          <div class="card-body">
          <span style="font-size: 48px;">
          <i class="far fa-lightbulb"></i>
          </span>

        <h1 class="card-title pricing-card-title">Getting Started</h1>
        <p>Click here to get started and learn about how we do things around here</p>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">View Guides</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
          <div class="card-body">
          <span style="font-size: 48px;">
          <i class="far fa-comments"></i>
          </span>

        <h1 class="card-title pricing-card-title">Forums</h1>
        <p>Have a question? Post it here and we will try to get back you you with a solution</p>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">View Topics</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
          <div class="card-body">
          <span style="font-size: 48px;">
          <i class="far fa-life-ring"></i>
          </span>

        <h1 class="card-title pricing-card-title">Get Help</h1>
        <p>Contact us and we will get back to you with a solution as soon as possible</p>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Get Support</button>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
</div>