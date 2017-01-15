<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>User Profile | ONYX Hospitality</title>
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
            document.getElementById("Paris").innerHTML = JSON.parse(localStorage.getItem("reservation"));
        }
        function defaultTab() {
            document.getElementById('defaultclick').click();

            var starBarCode = JSON.parse(localStorage.getItem("starBarCode"));
            var starLounge = JSON.parse(localStorage.getItem("starLounge"));
            var starMysty = JSON.parse(localStorage.getItem("starMysty"));
            var starSerendib = JSON.parse(localStorage.getItem("starSerendib"));
            var starSalud = JSON.parse(localStorage.getItem("starSalud"));

            var element = document.getElementById("list-parent");


            if (starBarCode == true) {
                console.log('starBarCode true');

                var para = document.createElement("li");
                var node = document.createTextNode('THE BAR CODE');
                para.appendChild(node);

                element.appendChild(para);

            }

            else {
                console.log('starBarCode false');
            }

            if (starLounge == true) {
                console.log('starLounge true');

                var para1 = document.createElement("li");
                var node1 = document.createTextNode('THE LOUNGE - KARAOKE & PUB');
                para1.appendChild(node1);

                element.appendChild(para1);

            }

            else {
                console.log('starLounge false');
            }

            if (starMysty == true) {
                console.log('starMysty true');

                var para2 = document.createElement("li");
                var node2 = document.createTextNode('MYSTY - THE COCKTAIL BAR');
                para2.appendChild(node2);

                element.appendChild(para2);

            }

            else {
                console.log('starMysty false');
            }

            if (starSerendib == true) {
                console.log('starSerendib true');

                var para3 = document.createElement("li");
                var node3 = document.createTextNode('SERENDIB BREWERS & CO');
                para3.appendChild(node3);

                element.appendChild(para3);

            }

            else {
                console.log('starSerendib false');
            }

            if (starSalud == true) {
                console.log('starSalud true');

                var para4 = document.createElement("li");
                var node4 = document.createTextNode('SALUD - WINE SPECIALIST');
                para4.appendChild(node4);

                element.appendChild(para4);

            }

            else {
                console.log('starSalud false');
            }

        }
    </script>
    <?php include('head.php'); ?>

</head>

<body style="height: 100%" onload="defaultTab()">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span><a href="index.php" onclick="history.go(-1)"><i class="fa fa-angle-left fa-3x"
                                                              style="margin: 15px 15px; "></i></a></span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">

        <img src="img/pubs/pubs-background.jpg" style="">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <center><img src="img/profile/profile.png" style="width: 100px;" alt="Logo"></center>
                <div class="col-sm-12 col-md-12 col-xs-12" style="margin-left: 18px">
                    <h4>John Doe</h4>
                    <p>Last check-in at: THE BAR CODE</p>
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
                            <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');" >
                                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">FAVOURITES
                                </div>
                            </a>
                        </div>

                        <div id="London" class="w3-container city" style="display:none">
                            <br>
                            <h5>Name : John Doe</h5>
                            <h5>Contact : 011234567 </h5>
                            <br>
                            <h5>Bio: artist | engineer | loves coffee | doggo is love and life</h5>

                        </div>

                        <div id="Paris" class="w3-container city" style="display:none;margin-top: 20px;">
                            <br>
                            <!--                            <p>Check-in history</p>-->


                        </div>

                        <div id="Tokyo" class="w3-container city" style="display:none" onclick="appendElements()">
                            <br>

                            <ol id="list-parent" class="w3-ul"
                                style="color: black;font-family: 'Caviar-Dreams'; align-self: center">
                            </ol>

                        </div>

                    </div>
                </div>
                <center>
                    <div class="col-sm-12 col-md-12 col-xs-12" style="margin-top: 30px">
                        <div class="">
                            <a href="reservation.php">
                                <div class="button-black">TREASURE HUNT</div>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
        </div>

    </div>


    <script>
        function appendElements() {
//            var listStars = document.getElementById("list-parent);


        }
    </script>

    <!-- FOOTER SECTION -->
    <?php include('footer.php'); ?>
    <!-- //END -->

</body>

</html>
