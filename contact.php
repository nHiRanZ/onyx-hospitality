<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Contact | ONYX Hospitality</title>

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

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">

        <img src="img/contact/contact.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><h3>CONTACT</h3>
                    <i class="fa fa-phone fa-3x"></i>
                    <h4 style="margin-left: 5%; margin-right: 5%;">+94 11 2736736</h4>
                    <h4 style="margin-left: 5%; margin-right: 5%;">+94 77 1234567</h4>
                    <br>
                    <i class="fa fa-envelope-o fa-3x"></i>
                    <h4 style="margin-left: 5%; margin-right: 5%;">mail@onyx.lk</h4>
                    <h4 style="margin-left: 5%; margin-right: 5%;">contact@onyx.lk</h4>
                    <br>
                    <i class="fa fa-home fa-3x"></i>
                    <h4 style="margin-left: 5%; margin-right: 5%;">104, Alexander Place, Colombo 07</h4>
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
