<?php

// $dbServername = "127.0.0.1";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "dev_ihub";

$dbServername = "127.0.0.1";
$dbUsername = "arkaph_dev_uihub";
$dbPassword = "nM}MjBT(e9V[";
$dbName = "arkaph_dev_uihub";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//$connect = new PDO('mysql:host=localhost;dbname=filceb_database', 'root', '');
//$connect = new PDO('mysql:host=localhost;dbname=filceb_db', 'filceb_user', 'E9t9neG9vX');
// $connect = new PDO('mysql:host=localhost;dbname=filceb_dev', 'root', '');


if (!$conn) {
	echo "Failed to connect to Database" . die(mysqli_error($conn));
}
