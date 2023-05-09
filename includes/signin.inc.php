<?php

if (isset($_POST["submit"])) {
    
    $email = $_POST["name"];
    $pwd = $_POST["password"];

    require_once 'dbconnect.php';
    require_once 'functions.php';

    if(EmptyInputLogin($email, $pwd) !== false){
        header("Location: ../form.php?error=emptylogininput");
        exit();
    }

    loginUser($conn, $email, $pwd);  

}
else{
    header("Location: ../form.php?error=loginimpossible");
    exit();
}

?>