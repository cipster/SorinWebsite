<?php
$host = "localhost";
$user = "procerti_user";
$password = "bucurportase!";
$dbname = "procerti_database";
$socket = "UNIX";
$port = "3306";
$tbl_name="users";

$con = mysql_connect($host, $user, $password)
or die ('Could not connect to the database server' . mysqli_connect_error());

mysql_select_db($dbname) or die('Could not select database');
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
    session_start();
    session_regenerate_id(true);
// Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername'] = $myusername;
    $_SESSION['mypassword'] = $mypassword;
    header("location:../../admin.php");
}
else {
    echo "Utilizator sau parola gresita!";
}

?>
