<?php
require_once "dbconnect.php";

if (isset($_POST['submit'])) {
    $nom    = $_POST['nom_client'];
    $prenom = $_POST['prenom_client'];
    $tel    = $_POST['telephone'];
    $email  = $_POST['email'];
    $sql ="INSERT INTO client (nom_client, prenom_client, email, telephone) VALUES (?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nom, $prenom, $email, $tel);
    $stmt->execute();
    header("location: ../rapports_clients.php?none");
}