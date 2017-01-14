<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" type="text/css" href="css/fav.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>The Lounge Pub | ONYX Hospitality</title>
    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-black", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-black";
        }
        function defaultTab() {
            document.getElementById('defaultclick').click();
        }
    </script>
    <?php include('head.php'); ?>

</head>

<body style="height: 100%" onload="defaultTab()">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span><a href="#" onclick="history.go(-1)"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: #2c2e3c; padding:0px 0px;">

        <img src="img/pubs/pubs-background.jpg" style="">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="overflow: scroll;>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><img src="img/pubs/bar-logo4.png" style="width: 200px;" alt="Logo" class="pubsMargin"></center>
                <div class="col-sm-12 col-md-12 col-xs-12" style="margin-left: 18px">
                    <h4>THE LOUNGE - KARAOKE & PUB</h4>
                    <p>107, Marine Drive, Colombo 5</p>
                </div>

                <div>
                    <form id="starForm">
                        <a href="#" onclick="fav();">
                            <fieldset class="rating" style="float: right">

                                <input  type="radio"  id="star1" name="lounge" value="lounge" /><label class = "full"  title="fav"></label>


                            </fieldset>
                        </a>
                    </form>
                    <script>

                        function fav() {
                            var favour = [];
                            favour[0] = "THE LOUNGE - KAOKE & PUB";
                            localStorage.setItem("favour", JSON.stringify(favour));

                        //   localStorage.setItem("favourite", "THE LOUNGE - KAOKE & PUB");
                        }

                    </script>
                </div>
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="w3-container">
                        <div class="w3-row">
                            <a href="javascript:void(0)" onclick="openCity(event, 'London');" id="defaultclick">
                                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">DETAILS</div>
                            </a>
                            <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
                                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">RESERVATIONS
                                </div>
                            </a>
                            <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
                                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">REVIEWS</div>
                            </a>
                        </div>

                        <div id="London" class="w3-container city" style="display:none">
                            <br>
                            <p>Everyone deserves a break at the end of a stressful day and everyone deserves some
                                relaxation. Walk into the Berlin Sky Lounge and let yourself relax and enjoy our food
                                and drink to your hearts content.
                                Enrich your stay with a cool drink or modern beer cocktail and accompany that with your
                                choice of our homemade German specialities; what more can you want for a splendid
                                evening overviewing the beautiful city of Colombo.</p>
                        </div>

                        <div id="Paris" class="w3-container city" style="display:none">
                            <br>
                            <p>Walk around, connect; there is no better way to get to know another, than enjoying food,
                                drinks and music under the stars.
                                Enjoy the finest German beer in Colombo; try a variety of wine, spirits, champagne and
                                our home special beer cocktails. Amuse yourself with a diverse variety of different
                                cocktails. Come in, have a drink and effortlessly blend into your comfortable
                                surroundings. </p>

                        </div>

                        <div id="Tokyo" class="w3-container city" style="display:none">
                            <h4>Ranuk</h4>
                            <p>"Taste the best home-made German Sausages, Burgers, Schnitzel & Grills that will add
                                flavour to your time with us."</p>

                            <hr>

                            <h4>Crishane</h4>
                            <p>"Cheapest beer in town, here at The Bar Code"</p>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <div class="" style="margin:20px 20px">
                            <a href="reservation.php">
                                <div class="button-black">MAKE RESERVATION</div>
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
