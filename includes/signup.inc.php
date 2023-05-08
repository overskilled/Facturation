<?php
require_once "dbconnect.php";
require_once "functions.php";

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pays = $_POST["pays"];

    if (emptyInput() !== false) {
        header("location: ..signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername() !== false) {
        header("location: ..signup.php?error=invaliduid");
        exit();
    }

    if (invalideEmail() !== false) {
        header("location: ..signup.php?error=invalidemailt");
        exit();
    }

    if (mismatchPassword() !== false) {
        header("location: ..signup.php?error=passworddontmatcht");
        exit();
    }

    if (usernameTaken() !== false) {
        header("location: ..signup.php?error=usernametaken");
        exit();
    }


} else {
    header ("location: ..signup.php");
}