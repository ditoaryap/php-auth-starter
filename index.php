<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page = $_GET["page"] ?? "login";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    if ($page === "login") {
        include "views/loginForm.php";
    } elseif ($page === "register") {
        include "views/registerForm.php";
    } else {
        include "views/loginForm.php";
    }
?>

</body>
</html>
