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
  <link rel="stylesheet" href="<?= base_url("assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css");?>">
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css");?>">
  <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.png");?>">
</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><!--<img src="./assets/images/logo.svg" alt="logo"/>--> Blogs</a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><!--<img src="./assets/images/logo-mini.svg" alt="logo"/>--> Blogs</a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="<?= base_url("assets/images/faces/face5.jpg");?>" alt="profile"/>
                <span class="nav-profile-name"><?php print $this->session->userdata('ci_seesion_key')['first_name']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a href="<?php print site_url();?>auth/logout" class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">User List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">User Blogs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php print site_url()?>auth/post_list">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Add Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>-->
          <!--<li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>-->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
        <?php if($errorresponce = $this->session->flashdata('error')): ?>
          <div class="box-header">
            <div class="col-lg-12">
              <div class="alert alert-danger"><?php echo $errorresponce;?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
            </div>
          </div>
        <?php endif;?>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <span class="card-title blog-title" style="font-size:18px;">Edit Post</span><a href="<?php print site_url()?>auth/post_list" style="float:right;" class="add_link">Back to Post List</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Edit Post Form
                  </p>
                  <form class="forms-sample" id="post_form" name="post_form" action="<?php print site_url();?>auth/post_update" method="post">
                  
                    <div class="form-group">
                      <div class="row">
                       <div class="col-6">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="post_title" id="post_title" value="<?php echo set_value('title') ?>" placeholder="Post Title">
                       </div>
                       <div class="col-6">
                         <label for="exampleInputName1">Author Name</label>
                         <input type="text" class="form-control" name="post_author" id="post_author" value="<?php echo set_value('author') ?>" placeholder="Author Name">
                       </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" rows="3" cols="70" name="describe" placeholder="Description" value="<?php echo set_value('describe') ?>" id="describe"></textarea>
                    </div>    
                      <button type="submit" class="btn btn-primary mr-2">Update Post</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">Blogs</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center" style="font-size:15px;">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url("ckeditor/ckeditor.js");?>"></script>
  <script type="text/javascript">
     CKEDITOR.replace('describe');
  </script>
  <script src="<?= base_url("assets/js/file-upload.js");?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
