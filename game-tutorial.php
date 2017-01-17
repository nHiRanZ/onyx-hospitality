<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Tutorial | ONYX Hospitality</title>

    <?php include('head.php'); ?>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</head>

<body style="height: 100%">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span style="font-size:30px;cursor:pointer;margin: 15px 22px;" onclick="openNav()">&#9776;</span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <img src="img/game/game-intro.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><p style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">Welcome to the Weekly Treasure
                        Hunt Challenge by ONYX Hospitality. Up on completion you’re eligible for the prize that was
                        mentioned in the previous page*.</p>

                    <p style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">You have to Answer 10 Simple
                        Questions which are related to ONYX Group of Pubs, Hotels and Restaurants. In each level, you’re
                        given hints to accomplish the task at hand. You have 72 Hours once you start the game*. You can
                        resume the game from your Profile.</p>

                    <p style="margin-left: 5%; margin-right: 5%;">Good Luck!</p>

                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <div class="">
                            <a href="game.php">
                                <div class="button-black">START</div>
                            </a>
                        </div>
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
