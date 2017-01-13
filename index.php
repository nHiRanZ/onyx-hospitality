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
    <div class="highlight" style="width: 60%; margin-left: 30%; height: 85%;">
        <span><a href="location.php"><i class="fa fa-thumb-tack fa-3x" style="margin: 15px 15px; "></i></a></span>
        <div class="special-promo" style="margin-top: 34%">
            <center>
                <h3>SPECIAL PROMOTION</h3>
                <h4>Play our special promotion Treasure Hunt <br> and stand a chance to win special
                    prizes</h4>
                <div class="game-promotion">
                    <a href="game-promotion.php">
                        <div class="button-game-promo">PLAY</div>
                    </a>
                </div>
            </center>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px; overflow: hidden">

        <?php
        $_SESSION["ActivePage"] = "index";
        include('header.php');
        ?>
    </div>

    <div class="col-md-8 col-sm-8 col-xs-12 containertext center" style="overflow: hidden">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12" style="padding: 0">
                <img src="img/home/table-1589012.jpg" style="width:105%; opacity: .6;">

                </div>
            </div>
        </div>

    </div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
