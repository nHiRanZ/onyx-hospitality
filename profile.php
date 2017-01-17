<?php session_start(); ?>

<?php
if (isset($_POST['submit'])) {

    $message =
        'Full Name:	' . $_POST['fullname'] . '<br />
Email:	' . $_POST['emailid'] . '<br />
Your Favourited Places:	' . $_POST['content'] . '<br />
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class

    // Instantiate Class
    $mail = new PHPMailer();

    // Set up SMTP
    $mail->IsSMTP();                // Sets up a SMTP connection
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
    $mail->SMTPSecure = "tls";      // Connect using a TLS connection
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 587;  //Gmail SMTP port
    $mail->Encoding = '7bit';

    // Authentication
    $mail->Username = "hospitalityonyx@gmail.com"; // Your full Gmail address
    $mail->Password = "123mailonyx"; // Your Gmail password

    // Compose
    $mail->SetFrom("hospitalityonyx@gmail.com", "ONYX Hospitality");
    //$mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Favourites List from ONYX Hospitality";      // Subject (which isn't required)
    $mail->MsgHTML($message);

    // Send To
    $mail->AddAddress($_POST['emailid'], $_POST['fullname']); // Where to send it - Recipient
    $result = $mail->Send();        // Send!
    $message = $result ? 'Successfully Sent!' : 'Sending Failed!';
    unset($mail);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>User Profile | ONYX Hospitality</title>
    <style>
        input, select, textarea{
            color: #000000;
        }

        textarea:focus, input:focus {
            color: #000000;
        }
    </style>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
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

            var contentText = [];

            if (starBarCode == true) {
                console.log('starBarCode true');

                var para = document.createElement("li");
                var node = document.createTextNode('THE BAR CODE');
                para.appendChild(node);

                element.appendChild(para);

                contentText.push('THE BAR CODE');
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
                contentText.push('THE LOUNGE - KARAOKE & PUB');
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
                contentText.push('MYSTY - THE COCKTAIL BAR');
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
                contentText.push('SERENDIB BREWERS & CO');
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
                contentText.push('SALUD - WINE SPECIALIST');
            }

            else {
                console.log('starSalud false');
            }

            var content = document.getElementById("content");
            content.value = contentText.toString();
        }
    </script>
    <?php include('head.php'); ?>

</head>

<body style="height: 100%" onload="defaultTab()">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span style="font-size:30px;cursor:pointer;margin: 15px 22px;" onclick="openNav()">&#9776;</span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">

        <img src="img/pubs/pubs-background.jpg" style="">
        <?php
        include('side-nav.php');
        ?>
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
                            <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
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

                            <center>
                                <div class="col-sm-12 col-md-12 col-xs-12" style="margin-top: 30px">
                                    <div class="">
                                        <a data-toggle="modal" data-target="#mailFavouritesModal">
                                            <div class="button-black">MAIL MY FAVOURITES</div>
                                        </a>
                                    </div>
                                </div>
                            </center>

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

        <div id="mailFavouritesModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="background-color: #1d1e27">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:white">Mail My Favourites</h4>
                    </div>
                    <div class="modal-body" style="color:white; padding-left: 66px;">
                        <p>Please Enter Your Name and Email to Send the Favourites List</p>
                        <div>
                            <form name="form1" id="form1" action="" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="email">Your Name: </label>
                                        <input type="text" name="fullname" placeholder="Full Name" style="width: 70%"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email:&nbsp</label>
                                        <input type="text" name="emailid" placeholder="Email" style="width: 70%"/>
                                    </div>
                                    <input type="hidden" name="content" id="content"/>
                                    <br/>
                                    <input type="submit" class="btn btn-default" name="submit" value="Send" />
                                </fieldset>
                            </form>
                            <p><?php if (!empty($message)) echo $message; ?></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <script>
        function appendElements() {
//            var listStars = document.getElementById("list-parent);


        }
    </script>

    <!-- FOOTER SECTION -->
    <center>
        <?php include('footer.php'); ?>
        <!-- //END -->
    </center>
</body>

</html>
