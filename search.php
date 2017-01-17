<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Search | ONYX Hospitality</title>

    <?php include('head.php'); ?>


</head>

<body style="height: 100%">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span><a href="index.php"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <img src="img/pubs/beer.jpg" style="">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">


        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12"><h3>LOCATE PUBS</h3></div>
            <div class="col-sm-4 col-md-4 col-xs-4">
                PROVINCE<br>
                <select>
                    <option>Western Province</option>
                    <option>Central Province</option>
                    <option>Eastern Province</option>
                    <option>Uva Province</option>
                    <option>Nothern Province</option>
                </select>
            </div>

            <div class="col-sm-4 col-md-4 col-xs-4">
                AREA<br>
                <select>
                    <option>Colombo</option>
                    <option>Gampaha</option>
                    <option>Kalutara</option>
                    <option>Nugegoda</option>
                    <option>Ratmalana</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 center row" style="margin: 0px">
                <center>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-3">
                            <img src="img/pubs/bar-logo4.png" style="width: 100%">
                        </div>
                        <div class="col-sm-7 col-md-7 col-xs-7" style="margin-top: 2%">
                            <h5>THE LOUNGE - KARAOKE & PUB </h5>
                            <h6>107, Marine Drive, Colombo 5</h6>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a class="arrow" href="the-lounge-pub.php"><i class="fa fa-angle-right fa-3x"
                                                                          style="margin: 5px 15px; "></i></a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-3">
                            <img src="img/pubs/bar-logo3.png" style="width: 100%">
                        </div>
                        <div class="col-sm-7 col-md-7 col-xs-7" style="margin-top: 2%">
                            <h5>MYSTY - THE COCKTAIL BAR </h5>
                            <h6>89, Alexander Place, colombo 8</h6>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a class="arrow" href="mysty-pub.php"><i class="fa fa-angle-right fa-3x"
                                                                     style="margin: 5px 15px; "></i></a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-3">
                            <img src="img/pubs/bar-logo2.png" style="width: 100%">
                        </div>
                        <div class="col-sm-7 col-md-7 col-xs-7" style="margin-top: 2%">
                            <h5>THE BAR CODE </h5>
                            <h6>5/7, Dutch House, Colombo 7</h6>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a class="arrow" href="the-bar-code.php"><i class="fa fa-angle-right fa-3x"
                                                                        style="margin: 5px 15px; "></i></a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-3">
                            <img src="img/pubs/bar-logo1.png" style="width: 100%">
                        </div>
                        <div class="col-sm-7 col-md-7 col-xs-7" style="margin-top: 2%">
                            <h5>SERENDIB BREWERS & CO </h5>
                            <h6>105, Francis Place, Colombo 5</h6>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a class="arrow" href="serendib-brewers.php"><i class="fa fa-angle-right fa-3x"
                                                                            style="margin: 5px 5px; "></i></a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-3">
                            <img src="img/pubs/bar-logo5.png" style="width: 100%">
                        </div>
                        <div class="col-sm-7 col-md-7 col-xs-7" style="margin-top: 2%">
                            <h5>SALUD - WINE SPECIALIST </h5>
                            <h6>10, Albert Cresent, Colombo 4</h6>
                        </div>
                        <div class="col-sm-2 col-md-2 col-xs-2">
                            <a class="arrow" href="salud-wine.php"><i class="fa fa-angle-right fa-3x"
                                                                      style="margin: 5px 5px; "></i></a></span>
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
