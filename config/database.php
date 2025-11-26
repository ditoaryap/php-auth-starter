<?php

$dsn = "mysql:host=localhost;dbname=db_auth_starter";
$username = "root";
$password = "";

try {
    $dbh = new PDO($dsn, $username, $password);
    echo "Connection Successfull!";
} catch (PDOException $e) {
    echo "Error!: ". $e->getMessage()."</br>";
    die();
}

?>