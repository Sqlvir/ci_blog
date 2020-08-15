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
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css");?>">
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
              <h6 class="font-weight-light" style="text-align:center;">Sign in to continue.</h6>  
              <?php if($errorresponce = $this->session->flashdata('error')): ?>
                <div class="box-header">
                  <div class="col-lg-12">
                    <div class="alert alert-danger"><?php echo $errorresponce;?></div>
                  </div>
                </div>
              <?php endif;?>            
              <form action="<?php print site_url();?>auth/doLogin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Email Id</label>
                  <input type="text" class="form-control form-control-lg" id="user_name" name="user_name" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>" placeholder="user@example.com">
                  <span class="help-block"><?php echo form_error('user_name') ?></span>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" placeholder="******">
                  <span class="help-block"><?php echo form_error('password') ?></span>
                </div>
                <!--<div class="my-2 d-flex">
                  <a href="#" class="auth-link text-black" style="text-align:right!important;">Forgot password?</a>
                </div>-->
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit" id="contact-send-a">SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="<?php print site_url()?>auth/registration" class="btn btn-block btn-facebook">Don't have an account? SIGN UP</a>
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
