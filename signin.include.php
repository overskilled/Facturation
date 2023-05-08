<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["name"];
    $password = $_POST["pwd"];

    require_once 'dbconnect.inc.php';
    require_once 'functions.inc.php';

    if(EmptyInputLogin($username, $password) !== false){
        header("Location: ../signin.php?error=emptyinput");
        exit();
    }

    loginUser($connect, $username, $password);  

}
else{
    header("Location: ../signin.php?error=loginimpossible");
    exit();
}

?>