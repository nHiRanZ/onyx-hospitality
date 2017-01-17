<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Promotion | ONYX Hospitality</title>

    <?php include('head.php'); ?>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <style>
        button.close {
            color:white;
        }
    </style>

</head>

<body>

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span style="font-size:30px;cursor:pointer;margin: 15px 22px;" onclick="openNav()">&#9776;</span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <img src="img/game/game-promo.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="overflow: scroll;">

        <div class="col-sm-12 col-md-12 col-xs-12">
            <center>
                <div class="row">
                    <h3 style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;" class="pubsMargin">PLAY AND WIN!</h3>
                </div>

                <div class="row">
                    <p style="margin-left: 5%; margin-right: 5%;">Take part in our weekly treasure hunt adventure game
                        and stand a chance to win a weekend getaway with your loved ones to:</p>
                </div>

                <div class="row">
                    <a href="index.php"><img src="img/pubs/bar-logo2.png" alt="Logo"
                                             style="width: 40%;"></a>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <a href="#">
                            <div class="button-white" data-toggle="modal" data-target="#myModal">HELP</div>
                        </a>

                    </div>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content" style="background-color: #1d1e27">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color:white">Game Rules and Regulations</h4>
                            </div>
                            <div class="modal-body" style="color:white">
                                <p>You simply have to answer the questions within a given time period! </p>
                                <ul>
                                    <li>Additional information can be found by visiting the locations </li>
                                    <li>Directions to the location are provided</li>
                                    <li>Each correct answer carries 100 points which can be redeemed at any of our outlets </li>
                                    <li>
                                    </li>
                                    <br>
                                    <p>May all odds be in your favour! </p>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <a href="game-tutorial.php">
                            <div class="button-black">PLAY</div>
                        </a>

                    </div>
                </div>

                <p style="margin-left: 5%; margin-right: 5% ;margin-top: 5%; margin-bottom: 5%;">We have challenges
                    every week make sure you check them
                    out</p>

                <div class="col-sm-12 col-md-12 col-xs-12">

                    <a href="http://eepurl.com/cxmkXv">
                        <div class="button-white" style="margin-bottom: 30px;">GET NEWSLETTER</div>
                    </a>

                </div>

            </center>
        </div>
    </div>

</div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
