<?php
require_once "dbconnect.php";

if (isset($_POST['submit'])) {
    $nom       = $_POST['nom_produit'];
    $des       = $_POST['description'];
    $unit      = $_POST['unit'];
    $vat       = $_POST['include_vat'];
    $vatPrice  = $_POST['prix_vat'];
    $ttc       = $_POST['price_ttc'];
    $qty       = $_POST['quantite'];

    $sql  = "INSERT INTO product (nom_produit, description, unit, vat, vatprice, ttc, quantity) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiiii", $nom, $des, $unit, $vat, $vatPrice, $ttc, $qty);
    $stmt->execute();
    header("location: ../rapports_produits.php?none");
}