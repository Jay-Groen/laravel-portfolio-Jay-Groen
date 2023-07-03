<?php
$db_host = "eu-cdbr-west-03.cleardb.net";
$db_user = "b1ef2c27b16cc9";
$db_pass = "59d43238";
$db_name = "heroku_103ff6651b7688b";

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
