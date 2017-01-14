<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Introduction | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <link rel="stylesheet" type="text/css" media="screen"
          href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">


</head>

<body style="height: 100%">

<div class="container col-md-12 col-sm-12 col-xs-12" style="">
    <div class="highlight">
        <span><a href="index.php"><i class="fa fa-angle-left fa-3x" style="margin: 15px 15px; "></i></a></span>
        <a href="index.php"><img src="img/logo/onyx-hospitality-logo-white.png" alt="Logo" class="highlightlogo"></a>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">

        <img src="img/reservation/reservation-background.jpg" style="">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12 containertext center" style="">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <h4 style="float:left">SELECT PUB :</h4>
            </div>
            <div class="row text-center" style="">
                <div class="col-md-1 col-xs-1 col-sm-1"></div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo1.png" style="width: 100%">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo2.png" style="width: 100%">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo3.png" style="width: 100%">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo4.png" style="width: 100%">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo5.png" style="width: 100%">
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1"></div>
            </div>

            <div class="col-sm-12 col-md-12 col-xs-12">
                <h4 style="float:left;margin-top: 20px">TABLE FOR :</h4>
            </div>
            <div class="row text-center" style="">
                <center>
                    <div class="col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <span><i id="subtract" class="fa fa-angle-left fa-3x" style="color:lightgray"></i></span>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div id="output" style="font-size: 24px; font-weight: 600;">1</div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <span><i id="add" class="fa fa-angle-right fa-3x" style="color: black"></i></span>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </center>
            </div>


            <div class="col-sm-12 col-md-12 col-xs-12">
                <h4 style="float:left;margin-top: 20px">CHOOSE DATE & TIME :</h4>
            </div>
            <div class="row text-center" style="">

                <div class="col-md-2 col-sm-0 col-xs-0"></div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker11'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker11').datetimepicker({
                                daysOfWeekDisabled: [0, 6]
                            });
                        });
                    </script>
                </div>
                <div class="col-md-2 col-sm-0 col-xs-0"></div>
            </div>





        </div>

    </div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>

<script>
    $('img').click(function () {
        $('.selected').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#add').click(function () {
        $('#output').html(function (i, val) {
            var b = val * 1 + 1;

            if (b > 1) {
                document.getElementById("subtract").style.color = "black";

            }

            return b;
        });

    });

    $('#subtract').click(function () {
        $('#output').html(function (i, val) {
            var a = val * 1 - 1;

            if (a <= 1) {
                document.getElementById("subtract").style.color = "lightgray";
                return 1;
            }
            return a;
        });
    });
</script>

<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>



<!-- //END -->

</body>

</html>
