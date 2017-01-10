<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Hotels | ONYX Hospitality</title>

    <?php include('head.php'); ?>
</head>


<body>

<?php
$_SESSION["ActivePage"]  = "hotels";
include('header.php');
?>


<h1>This is the hotels page</h1>


<!-- FOOTER SECTION -->
<?php include('footer.php'); ?>
<!-- //END -->

</body>

</html>
