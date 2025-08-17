<?php
//$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
//mysql_select_db("quiz",$cn)  or die("Could connect to Database");

$servername = "localhost";
$database = "samtecclass";
$username = "root";
$password = "";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
//echo "Connected successfully";
//mysqli_close($conn);

?>



