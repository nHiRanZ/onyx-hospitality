<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Completion | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function appendElements() {
            var listElementOne = document.getElementById("list-element-one");
            var answers = JSON.parse(sessionStorage.getItem("submittedAnswers"));
            var correctAnswers = ['The Chicken Run', 'Friday', 'Three Floyds', '1999'];
            var points = 0;

            var element = document.getElementById("list-parent");

            for (i = 0; i < answers.length; i++) {
                var para = document.createElement("li");

                for (j = 0; j < correctAnswers.length; j++) {
                    if(answers[i]["value"] == correctAnswers[j]){
                        points = points + 100;
                        var node = document.createTextNode(answers[i]["value"] + " ✓");
                        break;
                    } else {
                        var node = document.createTextNode(answers[i]["value"] + " ✖");
                    }
                }

                para.appendChild(node);
                element.appendChild(para);

            }

            var gamePoints = document.getElementById("gamePoints");
            gamePoints.firstChild.nodeValue = points + " Points";

        }
    </script>

</head>
<body style="height: 100%" onload="appendElements()">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span style="font-size:30px;cursor:pointer;margin: 15px 22px;" onclick="openNav()">&#9776;</span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <img src="img/game/game-completion.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><p style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%; margin-top: 5%;">You have
                        completed the game. Good Job!</p>
                    <div class="col-sm-12 col-md-12 col-xs-12"
                         style="background-color: #2c2e3c; margin-bottom: 5%; align-content: left">
                        <ol id="list-parent" class="w3-ul"
                            style="color: white;font-family: 'Caviar-Dreams'; text-align: left;">
                        </ol>
                        <div class="well" style="line-height: 25px;margin-top: 10px;margin-left: 207px;margin-bottom: 10px;font-size: 30px;width: auto;height: 68px;color: #2c2e3c;">
                            <p id="gamePoints" name="gamePoints">
                                200 Points
                            </p>
                        </div>
                    </div>
                    <p style="margin-left: 5%; margin-right: 5%; margin-top: 5%;">You're eligible for the competition!
                        The winners of this competition will be notified through email. we are rooting for you</p>

                    <p style="margin-left: 5%; margin-right: 5%;">Good Luck!</p>

                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <div class="">
                            <a href="index.php">
                                <div class="button-white">AWESOME!</div>
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
