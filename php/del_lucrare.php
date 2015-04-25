<?php
$host = "localhost";
$user = "procerti_user";
$password = "bucurportase!";
$dbname = "procerti_database";
$socket = "UNIX";
$port = "3306";
$connect = mysqli_connect($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

$lucrare = $_POST['lucrare'];

$sql = "DELETE FROM lucrari WHERE id_lucrare=$lucrare";

if (mysqli_query($connect, $sql)) {
    $retVal = '{ "message": "Lucrarea a fost ştearsă cu succes", "httpStatus": 200}';
    echo json_encode($retVal);
} else {
    $message = "Error: " . $sql . "<br>" . mysqli_error($connect);
    $retVal = '{ "message": "' . $message . '", "httpStatus": 500}';
    echo json_encode($retVal);
}

mysqli_close($connect);
?>