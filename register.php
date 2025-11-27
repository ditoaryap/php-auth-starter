<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
require_once "config/database.php";

if (isset($_POST["register"])) {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $role = $_POST["role"];

    // Check email
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->fetchColumn() > 0) {
        $_SESSION["register_error"] = "Email is already registered!";
    } else {

        $stmt = $dbh->prepare(
            "INSERT INTO users (name, email, password, role)
             VALUES (?, ?, ?, ?)"
        );

        $stmt->execute([$name, $email, $password, $role]);

        $_SESSION["register_success"] = "Register success!";
    }

    header("Location: index.php?page=login");
    exit();
}
