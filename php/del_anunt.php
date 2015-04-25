<?php
$host = "localhost";
$user = "procerti_user";
$password = "bucurportase!";
$dbname = "procerti_database";
$socket = "UNIX";
$port = "3306";
$connect = mysqli_connect($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

$anunt = $_POST['anunt'];

$sql = "DELETE FROM anunturi WHERE id_anunt=$anunt";

if (mysqli_query($connect, $sql)) {
    $retVal = '{ "message": "Anunţul a fost şters cu succes", "httpStatus": 200}';
    echo json_encode($retVal);
} else {
    $message = "Error: " . $sql . "<br>" . mysqli_error($connect);
    $retVal = '{ "message": "' . $message . '", "httpStatus": 500}';
    echo json_encode($retVal);
}

mysqli_close($connect);
?>