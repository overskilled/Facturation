<?php
require_once "dbconnect.php";
require_once "functions.php";

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    

    if (emptyInput($username, $email, $pwd) !== false) {
        header("location: ../form.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../form.php?error=invaliduid");
        exit();
    }

    if (invalideEmail($email) !== false) {
        header("location: ../form.php?error=invalidemail");
        exit();
    }

    
    if (emailExist($conn, $email) !== false) {
        header("location: ../form.php?error=emailexist");
        exit();
    }

    createUser($conn, $username, $email, $pwd);
} else {
    header ("location: ../form.php.php");
}