<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Login | ONYX Hospitality</title>

    <?php include('head.php'); ?>
</head>

<body>

<div class="page-image-area">
    <img src="img/login/login-background.jpg"style="width: 100%;">
    <div class="highlight">
        <span><a href="index.php"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
    </div>
</div>
<center></center>
<div class="page-content-area">
    <div class="highlight">
        <center><a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" style="width: 80px; margin: 24px 10px 20px 5px;"></a></center>
    </div>
    <div class="main-block">
        <div class="row">
            <div class="col-sm-12">
                <center><i class="fa fa-sign-out fa-5x icon"></i></center>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <span class="login">
                <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                <input class="textbox" type="text">
                </span>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <span class="login">
                <i class="fa fa-key fa-2x" aria-hidden="true"></i>
                <input class="textbox" type="text">
                </span>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="login">
                    <a href="index.php" ><div class="button-login">Login</div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="login">
                    <a href="index.php" ><div class="button-signup">Sign up</div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <span class="col-sm-12">
                <h6>
                    <center><a href="index.php"><div>Forgot Password?</div></a></center>
                </h6>
            </div>
        </div>
    </div>
</div>
</center>


<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
