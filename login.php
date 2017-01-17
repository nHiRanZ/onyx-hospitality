<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Login | ONYX Hospitality</title>

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

        <img src="img/login/login-background.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center>
                    <div class="sub-block"></div>
                    <div class="sub-block">

                        <div class="col-sm-12">

                            <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                            <input class="textbox" type="text"> <br>

                        </div>

                    </div>


                    <div class="col-sm-12">

                        <i class="fa fa-key fa-2x" aria-hidden="true"></i>
                        <input class="textbox" type="text">
                        <br>
                    </div>

                    <div class="col-sm-12"><br><br><br></div>

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

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
