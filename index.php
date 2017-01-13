<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Welcome | ONYX Hospitality</title>

    <?php include('head.php'); ?>

</head>

<body>


<div class="container col-md-12 col-sm-12 col-xs-12" style="">


    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <?php
        $_SESSION["ActivePage"] = "index";
        include('header.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="padding:0px 0px">
        <div class="highlightIndex" style="margin:0px 0px; padding:0px 0px;">
            <span>
                <a href="location.php"><i class="fa fa-map-pin fa-2x"
                                          style="width: 30px; margin-top: 4%; margin-left: 5%; float: left""></i></a>
                <a href="profile.php"><img src="img/home/user.png" alt="Logo"
                                           style="width: 30px; margin-top: 4%; margin-right: 10%; float: right"></a>
        </div>

        <!--        <div class="row col-md-12" style="height: 50%">-->
        <!--            <img src="img/home/outing-background.jpg" style="width: 100%; background:rgba(0,0,0,0.8); opacity: 6; padding-top: 50%">-->
        <!--        </div>-->

        <div class="main-block col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <img src="img/home/outing-background.jpg"
                         style="width: 100%; background:rgba(0,0,0,0.8); opacity: 6;">


                        <div class="special-promo">
                            <center>
                                <h4>SPECIAL PROMOTION</h4>
                                <h6>Play our special promotion Treasure Hunt <br> and stand a chance to win special
                                    prizes</h6>
                                <div class="game-promotion">
                                    <a href="game-promotion-WIP.php">
                                        <div class="button-game-promo">PLAY</div>
                                    </a>
                                </div>
                            </center>
                        </div>

                </div>
            </div>
        </div>
        <div class="block">
            <div class="row">
                <div class="col-sm-12">
                    <img src="img/home/pubs.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="block">
            <div class="row">
                <div class="col-sm-12">
                    <img src="img/home/restaurants.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="block">
            <div class="row">
                <div class="col-sm-12">
                    <img src="img/home/hotels.jpg" style="width: 100%;">
                </div>
            </div>
        </div>


        <!--        <div class="row" style="height:50%">-->
        <!--            <div class="col-sm-12 col-md-12 col-xs-12">-->
        <!--                <center>-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-sm-12">-->
        <!--                            <img src="img/home/pubs.jpg" style="height:300px">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="row">-->
        <!--                        <div class="col-sm-12">-->
        <!--                            <img src="img/home/restaurants.jpg" style="height:300px">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!---->
        <!---->
        <!--                    <div class="row">-->
        <!--                        <div class="col-sm-12">-->
        <!--                            <img src="img/home/hotels.jpg" style="height:300px">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </center>-->
        <!--            </div>-->
        <!--        </div>-->

    </div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
