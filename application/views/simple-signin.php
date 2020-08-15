<!doctype html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <title><?php print $title; ?></title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="<?= base_url("resource/fonts/icons/main/mainfont/style.css");?>">
    <link rel="stylesheet" href="<?= base_url("resource/fonts/icons/font-awesome/css/font-awesome.min.css");?>">

    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url("resource/vendor/bootstrap/v3/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?= base_url("resource/vendor/bootstrap/v4/bootstrap-grid.css");?>">
    <!-- Custom -->
    <link rel="stylesheet" href="<?= base_url("resource/css/style.css");?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="signup" >
    <!-- HEADER -->
    <header class="signup__header">
        <div class="container">
            <div class="signup__header-content">
                <p>Don't have an account?</p>
                <a href="<?php print site_url()?>frontend/signup" class="btn" style="background:#27367f;border-radius:3px;color: #fff;">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main class="signup__main">
        <img class="signup__bg" src="<?= base_url("resource/images/signup-bg.png");?>" alt="bg">

        <div class="container">
            <div class="signup__container">
                <div class="signup__logo">
                    <a href="#"><img src="<?= base_url("resource/fonts/icons/main/Logo_Forum.svg");?>" alt="logo">Blogs</a>
                </div>

                <div class="signup__head">
                    <h3>Welcome! SignIn with Blogs Account</h3>
                </div>
                <div class="signup__form">
                    <div class="signup__section">
                        <label class="signup__label" for="email">Emain Address</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="******">
                    </div>
                    </div>
                    <a href="#" class="signup__btn-create btn btn--type-02">SignIn</a>
                </div>
            </div>
        </div>
    </main>
</div>

    <!-- JAVA SCRIPT -->
    <script src="<?= base_url("resource/vendor/jquery/jquery.min.js");?>"></script>
    <script src="<?= base_url("resource/vendor/velocity/velocity.min.js");?>"></script>
    <script src="<?= base_url("resource/js/app.js");?>"></script>

</body>

</html>