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
</div>
<center></center>
<div class="page-content-area">
    <div class="main-block">
        <div class="row">
            <div class="col-sm-12">
                <center><i class="fa fa-sign-out fa-5x"></i></center>
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
                <span class="login">
                    <button class="btn" type="button">Click Me!</button>
                
                </span>
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
