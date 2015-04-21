<?php

$host = "localhost";
$user = "procerti_user";
$password = "bucurportase!";
$dbname = "procerti_database";
$socket = "UNIX";
$port = "3306";
$con = mysqli_connect($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());
?>