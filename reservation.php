<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Introduction | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <!--    <link rel="stylesheet" type="text/css" media="screen"-->
    <!--          href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">-->

    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
                    <img src="img/pubs/bar-logo1.png" style="width: 100%" id="serendib" value="Serendib Brewers & Co" class="selected">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo2.png" style="width: 100%" id="barCode" value="The Bar Code">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo3.png" style="width: 100%" id="Mysty" value="Mysty - Cocktail Bar">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo4.png" style="width: 100%" id="lounge" value="The Lounge - Karaoke & Pub">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="img/pubs/bar-logo5.png" style="width: 100%" id="salud" value="Salud - Wine Specialist">
                </div>
                <div class="col-md-1 col-xs-1 col-sm-1"></div>
            </div>

            <div class="col-sm-12 col-md-12 col-xs-12">
                <h4 style="float:left;margin-top: 30px">TABLE FOR :</h4>
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
                <h4 style="float:left;margin-top: 30px">CHOOSE DATE & TIME :</h4>
            </div>


            <div class="row text-center" style="margin-top: 20px;">

                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <div class="form-group">
                        <div class="input-group date form_datetime" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input class="form-control" size="16" type="text" value="" readonly id="dateTimeInput">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                        <input type="hidden" id="dtp_input1" value=""/><br/>
                    </div>
<!--                    <script type="text/javascript">-->
<!--                        $(function () {-->
<!--                            $('#datetimepicker').datetimepicker({-->
<!--                                daysOfWeekDisabled: [0, 6]-->
<!--                            });-->
<!--                        });-->
<!--                    </script>-->
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1"></div>
            </div>


            <!--            <div class="col-md-2 col-sm-0 col-xs-0"></div>-->
            <!--            <div class="col-md-8 col-sm-12 col-xs-12">-->
            <!--            <div class="form-group">-->
            <!--                <div class="input-group date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">-->
            <!--                    <input class="form-control" size="16" type="text" value="" readonly>-->
            <!--                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>-->
            <!--                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>-->
            <!--                </div>-->
            <!--                <input type="hidden" id="dtp_input1" value="" /><br/>-->
            <!--            </div>-->
            <!---->
            <!--                <div class="col-md-2 col-sm-0 col-xs-0"></div>-->


            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-sm-7 col-md-7 col-xs-7">
                    <h4 style="float:right;margin-top: 20px">RESERVATION FEE ($) :</h4>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3">
                    <div id="total" style="font-size: 24px; font-weight: 600; margin-top: 10px; float:left;">10</div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1"></div>
            </div>

            <div class="row" style="margin-top: 30px">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="#">
                        <div class="button-black" onclick="submitButton()">CONFIRM</div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
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

//            if (document.getElementById("total").innerHTML >= 500) {
//                document.getElementById("total").innerHTML = 500;
//            }
            document.getElementById("total").innerHTML = 10 * (val * 1 + 1);
            return b;
        });

    });

    $('#subtract').click(function () {
        $('#output').html(function (i, val) {
            var a = val * 1 - 1;


            if (a < 1) {
                document.getElementById("subtract").style.color = "lightgray";
                return 1;
            }
//            document.getElementById("total").innerHTML = document.getElementById("total").innerHTML - 500 ;
            document.getElementById("total").innerHTML = 10 * (val * 1 - 1);
            return a;
        });
    });


</script>


<script type="text/javascript" src="js/jquery-3.1.1.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
<!--<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>-->

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        startDate: '+0d',
        changeMonth: true
    });


</script>

<script>
    function myFunction() {
        var d = new Date();
        var myDate = d.toISOString();
        return myDate;
//        document.getElementById("demo").innerHTML = n;
        console.log('myDate');
    }

    function submitButton(){

        if ($(".selected")[0]) {
            var imgID = $('.selected').attr("value");
            console.log(imgID);
        }


        var noOfPeople = document.getElementById("output").innerHTML;
        console.log(noOfPeople);

        var dateTime = document.getElementById("dateTimeInput").value;
        console.log(dateTime);

        var fee = document.getElementById("total").innerHTML;
        console.log(fee);


        var test= [];
        test[0] = ("Pub Name : "+imgID);
        localStorage.setItem("reservation", JSON.stringify(test));



        // Parse the serialized data back into an aray of objects
        test1 = JSON.parse(localStorage.getItem('reservation'));

        // Push the new data (whether it be an object or anything else) onto the array
        test1.push('<br />' +"Table For : "+noOfPeople);
        test1.push('<br />' +"Date & Time : " + dateTime);
        test1.push('<br />' +" Amount : $"+fee);


        // again put the new array into the local storage
        localStorage.setItem("reservation", JSON.stringify(test1));
    }



</script>


<!-- //END -->

</body>

</html>
