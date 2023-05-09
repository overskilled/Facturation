<?php

//verifier si le formulaire d'enregistrement est vide
function emptyInput($username, $email, $pwd) {
    if (empty($username) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}


//verifier si le formulaire de connexion est vide
function EmptyInputLogin($email, $pwd) {
    if (empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

//verifier si le nom est valid (inlu pas de caratere special)
function invalidUsername($username) {
    $partern = "/[a-zA-Z0-9]/";
    if (!preg_match($partern, $username)) {
        return true;
    } else {
        return false;
    }
}


//Fonction pour verifier si l'email est valid (cad le format you@example.com)
function invalideEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

//function pour verifier si cette email est deja utiliser
function emailExist($conn, $email) {
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    if ($user = $stmt->get_result()->fetch_assoc()) {
        return $user;
    } else {
        return false;
    }
    
}

//Fonction pour create l'utilisateur
function createUser($conn, $username, $email, $pwd) {
    $query = "INSERT INTO user (name, email, password) VALUES (?, ?, ?);";
    $stmt = $conn->prepare($query);

    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

    $stmt->bind_param("sss", $username, $email, $hashpwd);
    $stmt->execute();
    header("location: ../form.php?error=none");
}

function loginUser ($conn, $username, $pwd) {

}