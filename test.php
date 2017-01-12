<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Game Introduction | ONYX Hospitality</title>

    <?php include('head.php'); ?>
    <style>

         /* Media Query for iPhones */
        @media only screen
        and (min-device-width : 375px)
        and (max-device-width : 667px) {

            .container{
                background-color: blueviolet;
                height:80%;
                padding-top: 5%;
                padding-left:5%;
                padding-right:5%;
                padding-bottom: 10%;
            }

            .fill {
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden

                /*display:block;*/
                /*position:relative;*/
                /*!*padding-bottom:50%;*!*/
                /*overflow:hidden;*/
                /*border-radius: 5px;*/

                /*position: relative;*/
                /*width: 200px;*/
                /*height: 200px;*/
                /*overflow: hidden;*/

            }
            .fill img {
                /*flex-shrink: 0;*/
                /*min-width: 100%;*/
                /*min-height: 100%;*/
                /*object-fit: scale-down;*/
                /*width: auto;*/
                /*height: auto;*/
                /*width: 373px;*/
                /*height:250px;*/
                /*object-fit: contain;*/
                /*overflow: hidden;*/
                /*background-size: cover;*/

                width:100%;
                overflow: hidden;
                background-size: cover;
                background-position: center;

                /*width: 400px;*/
                /*height: 200px;*/
                /*overflow: hidden;*/
                /*background-size: cover;*/
                /*background-position: center center;*/

                /*position:relative;*/
                /*!*width: 100%;*!*/
                /*height:auto;*/
                /*display:block;*/

                /*position: absolute;*/

                /*height: 100%;*/
                /*width: auto;*/
                /*-webkit-transform: translate(-50%,-50%);*/
                /*-ms-transform: translate(-50%,-50%);*/
                /*transform: translate(-50%,-50%);*/
            }

        }


         /* Media Query for iPads */
        @media only screen
        and (min-device-width : 768px)
        and (max-device-width : 1024px)
        and (orientation : landscape) {


            .container{
                background-color: red;
                height:80%;
                padding-top: 5%;
                padding-left:5%;
                padding-right:5%;
                padding-bottom: 10%;
            }

            .fill {
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden
            }
            .fill img {
                flex-shrink: 0;
                min-width: 100%;
                min-height: 100%;
                /*object-fit: cover;*/
                /*width: auto;*/
                /*height: auto;*/
                width: 100%;
            }

        }



        /*.tp-banner-container{*/
            /*width: 100%!important;*/
            /*background:red;*/
            /*position: relative;*/
            /*!*padding: 0;*!*/

            /*overflow:hidden!important;*/
            /*margin:0px 0px;*/
            /*clear:both;*/

            /*padding-top: 5%;*/
            /*padding-left:5%;*/
            /*padding-right:5%;*/
            /*padding-bottom: 10%;*/
        /*}*/



    </style>
</head>

<body style="height: 100%">

<div class="container col-md-12 col-sm-12 col-xs-12">

<div class="col-md-6 col-sm-6 col-xs-12 fill" style="float:left; background-color: blue; padding:0px 0px;">
    <img src="img/test/ipad.jpg" style="">
</div>

<div class="col-md-6 col-sm-6 col-xs-12" style="float:right; background-color: green; height: 615px">
    <div class="row">
        <div class="col-sm-12">
            <center><p style="margin-left: 5%; margin-right: 5%;">Welcome to the Weekly Treasure Hunt Challenge by ONYX Hospitality. Up on completion you’re
                    eligible for the prize that was mentioned in the previous page*.</p></center>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><p style="margin-left: 5%; margin-right: 5%;">Welcome to the Weekly Treasure Hunt Challenge by ONYX Hospitality. Up on completion you’re
                    eligible for the prize that was mentioned in the previous page*.</p></center>
        </div>
    </div>
</div>

</div>

<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
