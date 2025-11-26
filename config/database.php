<?php

$servername = "localhost";
$username = "root";
$password = "";
$port = 3306;
$dbname = "db_login_register";

$conn = mysqli_connect($servername, $username, $password, $$dbname, $port);

if(!$conn) {
    die("Sever failed connect:".mysqli_connect_error());
}

echo "Connected Successfully";

mysqli_close($conn);

?>