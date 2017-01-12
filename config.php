<?php
/**
 * Created by PhpStorm.
 * User: crish
 * Date: 12/01/2017
 * Time: 05:45
 */

//Connecting to the database...
$user = 'root';
$pass = '';
$db = 'onyx';

mysqli_connect('localhost',$user,$pass,$db) or die("Unable to Connect");

