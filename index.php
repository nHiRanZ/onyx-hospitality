<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Welcome | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </style>

</head>


<body>


<?php
$_SESSION["ActivePage"]  = "index";
include('header.php');
?>

<div class="frame-home">
    <div class="main-block">
    <div class="row">
        <div class="col-sm-12">
            <img src="img/home/outing-background.jpg"style="width: 100%; background:rgba(0,0,0,0.8); opacity: 6;">
            <div class="highlight" style="height: 25%;">
                <span>
                <a href="index.php"><i class="fa fa-map-pin fa-2x" style="width: 30px; margin-top: 4%; margin-left: 5%; float: left""></i></a>
                <a href="profile.php"><img src="img/home/user.png" alt="Logo" style="width: 30px; margin-top: 4%; margin-right: 10%; float: right"></a>
                    </span>
                <div class="special-promo">
                    <center>
                        <h4>SPECIAL PROMOTION</h4>
                        <h6>Play our special promotion Treasure Hunt <br> and stand a chance to win special prizes</h6>
                        <div class="game-promotion">
                            <a href="index.php" ><div class="button-game-promo">PLAY</div></a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="block">
    <div class="row">
        <div class="col-sm-12">
            <img src="img/home/pubs.jpg"style="width: 100%;">
        </div>
    </div>
    </div>
    <div class="block">
    <div class="row">
        <div class="col-sm-12">
            <img src="img/home/restaurants.jpg"style="width: 100%;">
        </div>
    </div>
    </div>
    <div class="block">
    <div class="row">
        <div class="col-sm-12">
            <img src="img/home/hotels.jpg"style="width:">
        </div>
    </div>
    </div>
</div>



<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
