<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php print $title; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url("assets/vendors/mdi/css/materialdesignicons.min.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/vendors/base/vendor.bundle.base.css");?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css");?> ">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.png");?>">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!--<div class="brand-logo">
                <img src="./assets/images/logo.svg" alt="logo">
              </div>-->
              <h4 style="text-align:center;">Admin Panel!</h4>
              <h6 class="font-weight-light" style="text-align:center;">Signing up is easy. It only takes a few steps</h6> 
              <!--<form class="pt-3" method="post" action="">-->
              <form action="<?php print site_url();?>auth/actionRegister" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control form-control-lg" id="first_name" name="first_name" placeholder="First Name">
                  <span class="help-block"><?php echo form_error('first_name') ?></span>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="last_name" name="last_name" placeholder="Last Name">
                  <span class="help-block"><?php echo form_error('last_name') ?></span>
                </div>
                <div class="form-group">
                  <label>Email Id</label>
                  <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="user@example.com">
                  <span class="help-block"><?php echo form_error('email') ?></span>
                </div>
                <div class="form-group">
                <label>Password</label>
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="******">
                  <span class="help-block"><?php echo form_error('password') ?></span>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit" id="contact-send-a">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <!--Already have an account? <a href="login.html" class="text-primary">Login</a>-->
                  <a href="<?php print site_url()?>auth/login" class="btn btn-block btn-facebook">Already have an account? Login</a>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 <!-- plugins:js -->
 <script src="<?= base_url("assets/vendors/base/vendor.bundle.base.js");?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url("assets/js/off-canvas.js");?>"></script>
  <script src="<?= base_url("assets/js/hoverable-collapse.js");?>"></script>
  <script src="<?= base_url("assets/js/template.js");?>"></script>
    var baseurl = "<?php print site_url();?>";
  </script>
  <!-- endinject -->
</body>

</html>
