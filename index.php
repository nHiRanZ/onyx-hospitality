<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Welcome | ONYX Hospitality</title>

    <?php include('head.php'); ?>

    <style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </style>

</head>


<body>

<?php
$_SESSION["ActivePage"]  = "index";
include('header.php');
?>


<div style="margin-left:25%;padding:1px 16px;">
    <h2>Fixed Full-height Side Nav</h2>
    <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
    <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
    <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
    <p>Some text..<i class="fa fa-user-o" aria-hidden="true"></i></p>
    <p>Some text..<i class="fa fa-camera-retro"></i> </p>
    <p>Some text..<span class="fa-twitter fa"></span></p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <i class="fa fa-car"></i>
    <i class="fa fa-car" style="font-size:48px;"></i>
    <i class="fa fa-car" style="font-size:60px;color:red;"></i>
</div>




<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
