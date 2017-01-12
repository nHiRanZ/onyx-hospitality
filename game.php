<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Treasure Hunt Game | ONYX Hospitality</title>

    <?php include('head.php'); ?>
</head>


<body>

<div class="page-image-area">
    <!--map... temporary image added-->
    <img src="img/reservation/reservation-background.jpg" style="width: 100%;">
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
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="button-section">
                    <h4 style="float: left">Target 1/10</h4>
                    <h4 style="float: right; margin-right: 15%;">completion 0%</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <div class="button-section">
                    <div class="question-container"><h4>What is the burger of the day, served at the Bar Code
                            today?</h4></div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="button-section">
                    <div class="answer-button-section">
                        <input type="radio" name="radio" id="radio1" class="radio" checked/>
                        <label class="answer-label" for="radio1">First Option</label>
                    </div>

                    <div class="answer-button-section">
                        <input type="radio" name="radio" id="radio2" class="radio"/>
                        <label class="answer-label" for="radio2">Second Option</label>
                    </div>

                    <div class="answer-button-section">
                        <input type="radio" name="radio" id="radio3" class="radio"/>
                        <label class="answer-label" for="radio3">Third Option</label>
                    </div>

                    <div class="answer-button-section">
                        <input type="radio" name="radio" id="radio4" class="radio"/>
                        <label class="answer-label" for="radio4">Fourth Option</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-block">
        <div class="row">
            <div class="col-sm-12">
                <div class="button-section">
                    <a href="index.php">
                        <div class="button-white">Submit</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
