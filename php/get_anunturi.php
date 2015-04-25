<?php
$host = "localhost";
$user = "procerti_user";
$password = "bucurportase!";
$dbname = "procerti_database";
$socket = "UNIX";
$port = "3306";
$connect = mysqli_connect($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

$sql = "SELECT id_anunt, anunt, titlu FROM anunturi";
$result = mysqli_query($connect, $sql) or die(mysql_error());
$retVal = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($retVal, $row);
    }
} else {
    echo "0 results";
    return;
}

echo json_encode($retVal);

mysqli_close($connect);
?>