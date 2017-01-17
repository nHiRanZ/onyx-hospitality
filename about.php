<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>About | ONYX Hospitality</title>

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

        <img src="img/about/about.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="overflow: scroll">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><h2>ABOUT</h2>
                    <p style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;" align="justify">Lorem ipsum dolor sit amet, mei fugit iudico everti ea, cu per errem suscipiantur, periculis intellegam omittantur has ei. Eum in wisi consul epicuri, eum in eros choro putent. Eu semper forensibus qui, ei quo magna solum. Vocent regione constituto cu vim. At facete partiendo comprehensam pro, nostrum concludaturque et usu.</p>

                    <p style="margin-left: 5%; margin-right: 5%; margin-bottom: 5%;" align="justify">Ea eum sanctus recusabo omittantur, facilisi tractatos nec in. Ex malorum pertinax intellegam qui. Est in semper praesent, vis vivendo gloriatur ne. Ne mea porro sententiae, brute partem accusata eu duo.</p>

                    <p style="margin-left: 5%; margin-right: 5%;" align="justify">Animal appetere sed cu, his munere mentitum inimicus cu. Duis meliore rationibus sed te. Et cum adipisci sententiae assueverit, has ne harum complectitur. Wisi libris antiopam no eum, primis mollis sea ei. Vero assum possit ius at, eu vitae quidam ancillae vim. Oratio impetus assentior mel eu, magna justo quo ex.</p>

                    </p>

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
