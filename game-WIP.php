<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Treasure Hunt Game | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #map {
            height: 100%;
            width: 100%;
        }

        .carousel-control {
            position: absolute;
            top: 40%;
            left: 15px;
            width: 40px;
            height: 40px;
            margin-top: -20px;
            font-size: 30px;
            font-weight: 100;
            line-height: 30px;
            color: #ffffff;
            text-align: center;
            background: #222222;
            border: 3px solid #ffffff;
            -webkit-border-radius: 23px;
            -moz-border-radius: 23px;
            border-radius: 23px;
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .carousel-control.right {
            right: 15px;
            left: auto;
        }

        .submit-button {
            background-color: #d6d6d6;
            border-radius: 27px;
            color: #000000;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            width: 82%;
        }
    </style>




</head>


<body>

<div class="page-image-area">
    <div id="map"></div>
    <script>
        function initMap() {

            var barcode = {
                info: '<strong>The Bar Code</strong><br>\
					No: 16, 42nd Ln<br> Colombo, Sri Lanka<br>\
					<a href="https://goo.gl/MPSN9M">Get Directions</a>',
                lat: 6.8666362,
                long: 79.8603331
            };

            var mysty = {
                info: '<strong>MYSTY - The Cocktail Bar</strong><br>\
					56/1 00600, Marine Dr<br> Colombo, Sri Lanka<br>\
					<a href="https://goo.gl/oOUZcs">Get Directions</a>',
                lat: 6.8659492,
                long: 79.8601775
            };

            var serendib = {
                info: '<strong>Serendib Brewers</strong><br>\r\
					28 Melford Cres<br> Dehiwala-Mount Lavinia, Sri Lanka<br>\
					<a href="https://goo.gl/9f6GAf">Get Directions</a>',
                lat: 6.861784,
                long: 79.860621
            };

            var thelounge = {
                info: '<strong>The Lounge - Karoke & Pub</strong><br>\r\
					27 40th Ln<br> Wellwatta 00600, Sri Lanka<br>\
					<a href="https://goo.gl/evWSAl">Get Directions</a>',
                lat: 6.8680372,
                long: 79.8597447
            };

            var salud = {
                info: '<strong>Salud - Wine Specialists</strong><br>\r\
					506B, 600 Galle Rd<br> Colombo, Sri Lanka<br>\
					<a href="https://goo.gl/hcNtcD">Get Directions</a>',
                lat: 6.864565,
                long: 79.8612575
            };

            var locations = [
                [barcode.info, barcode.lat, barcode.long, 0],
                [mysty.info, mysty.lat, mysty.long, 1],
                [serendib.info, serendib.lat, serendib.long, 2],
                [thelounge.info, thelounge.lat, thelounge.long, 3],
                [salud.info, salud.lat, salud.long, 4],
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: new google.maps.LatLng(6.8652715, 79.8598505),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#d3d3d3"}]
                }, {
                    "featureType": "transit",
                    "stylers": [{"color": "#808080"}, {"visibility": "off"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#b3b3b3"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"weight": 1.8}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#d7d7d7"}]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [{"visibility": "on"}, {"color": "#ebebeb"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [{"color": "#a7a7a7"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [{"visibility": "on"}, {"color": "#efefef"}]
                }, {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#696969"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"visibility": "on"}, {"color": "#737373"}]
                }, {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#d6d6d6"}]
                }, {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {}, {"featureType": "poi", "elementType": "geometry.fill", "stylers": [{"color": "#dadada"}]}]
            });

            var myCity = new google.maps.Circle({
                center: new google.maps.LatLng(6.8652715, 79.8598505),
                radius: 500,
                strokeColor: "#727272",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#727272",
                fillOpacity: 0.2,
                map: map
            });

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(6.8652715, 79.8598505),
                map: map,
                icon: 'img/game/user-location-marker.png'
            });

            var infowindow = new google.maps.InfoWindow({});

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: 'img/game/location-marker.png'
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGxiTrbpGgSN56MFCPy6V5tNA5R67ppOM&callback=initMap">
    </script>
    <!--    <img src="img/reservation/reservation-background.jpg" style="width: 100%;">-->
    <div class="highlight">
        <span><a href="index.php"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
    </div>
</div>
<div class="page-content-area">
    <div class="highlight">
        <center><a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo"
                                         style="width: 80px; margin: 24px 10px 20px 5px;"></a></center>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
    </div>


    <form>
        <div>
            <div id="questions" class="carousel slide" data-ride="carousel" data-interval="false" pagination="false">

                <br>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="sub-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <h4 style="float: left">Target 1/4</h4>
                                        <!--                                    <h4 style="float: right; margin-right: 15%;">completion 0%</h4>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <div class="question-container"><h4>What is the burger of the day, served at
                                                <strong>The Bar Code</strong>
                                                today?</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="btn-group" data-toggle="buttons" id="question1">
                                            <div class="radio">
                                                <label><input type="radio" name="question1" id="q1" name="question[1]" value="The Chicken Run">The Chicken Run</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question1" id="q2" name="question[1]" value="Burger From Hell">Burger From Hell</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question1" id="q3" name="question[1]" value="Going Fishin'">Going Fishin'</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question1" id="q4" name="question[1]" value="Bacon Madness">Bacon Madness</label>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sub-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <h4 style="float: left">Target 2/4</h4>
                                        <!--                                    <h4 style="float: right; margin-right: 15%;">completion 0%</h4>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <div class="question-container"><h4>When is the Ladies Night Promo Available at
                                                <strong>MYSTY</strong>?</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="btn-group" data-toggle="buttons" id="question2">
                                            <div class="radio">
                                                <label><input type="radio" name="question2" id="q5" name="question[2]" value="Tuesday">Tuesday</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question2" id="q6" name="question[2]" value="Friday">Friday</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question2" id="q7" name="question[2]" value="Saturday">Saturday</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question2" id="q8" name="question[2]" value="Sunday">Sunday</label>
                                            </div>
                                       </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sub-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <h4 style="float: left">Target 3/4</h4>
                                        <!--                                    <h4 style="float: right; margin-right: 15%;">completion 0%</h4>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <div class="question-container"><h4>Which Ale is selected as the Speciality of
                                                the
                                                House in <strong>Serendib Brewers</strong>?</strong></h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="btn-group" data-toggle="buttons" id="question3">
                                            <div class="radio">
                                                <label><input type="radio" name="question3" id="q9" name="question[3]" value="Three Floyds">Three Floyds</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question3" id="q10" name="question[3]" value="Sierra Nevada Pale Ale">Sierra Nevada Pale
                                                    Ale</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question3" id="q11" name="question[3]" value="Molson Canadian">Molson Canadian</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question3" id="q12" name="question[3]" value="English Dark Mild Ale">English Dark Mild Ale</label>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="sub-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <h4 style="float: left">Target 4/4</h4>
                                        <!--                                    <h4 style="float: right; margin-right: 15%;">completion 0%</h4>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="button-section">
                                        <div class="question-container"><h4>When was <strong>The Lounge - Karoke &
                                                    Pub</strong> established?</strong></h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-block">
                            <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="btn-group" data-toggle="buttons" id="question4">
                                            <div class="radio">
                                                <label><input type="radio" name="question4" id="q13" name="question[4]" value="1994">1994</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question4" id="q14" name="question[4]" value="1996">1996</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question4" id="q15" name="question[4]" value="1999">1999</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="question4" id="q16" name="question[4]" value="2000">2000</label>
                                            </div>
                                        </div>
                                    </center>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#questions" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#questions" data-slide="next">›</a>
            </div>
        </div>


        <div class="sub-block">
            <div class="row">
                <div class="col-sm-12">
                    <div class="button-section">
                        <input type="submit" class="submit-button" value="Submit"></input>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $("form").submit(function () {
                var answers = $(this).serializeArray();
                if(answers.length < 4) {
                    alert("Ooops! Looks like you missed a couple of Questions there!");
                } else {
                    sessionStorage['submittedAnswers'] = JSON.stringify($(this).serializeArray());
                    window.location.replace("game-completion.php");
                    return false;
                }
            });
        </script>

    </form>
</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
