<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Introduction | ONYX Hospitality</title>

    <?php include('head.php'); ?>

</head>

<body style="height: 100%">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span><a href="index.php"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">

        <img src="img/login/login-background.jpg" style="">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">

        <div class="col-sm-12 col-md-12 col-xs-12">
            <center>
                <div class="sub-block"></div>
                <div class="sub-block">

                    <div class="col-sm-12">
                <span class="button-section">
                <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                <input class="textbox" type="text">
                </span>
                    </div>

                </div>
                <div class="sub-block">

                    <div class="col-sm-12">
                <span class="button-section">
                <i class="fa fa-key fa-2x" aria-hidden="true"></i>
                <input class="textbox" type="text">
                </span>
                    </div>

                </div>


                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="">
                        <a href="game.php">
                            <div class="button-black">Login</div>
                        </a>
                        <div class="sub-block"></div>
                        <a href="game.php">
                            <div class="button-white">sign up</div>
                        </a>
                        <a href="game.php">
                            <div class="button-white">logout</div>
                        </a>
                    </div>
                </div>
            </center>
        </div>


    </div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
