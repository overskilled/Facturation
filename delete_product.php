<?php

include_once "includes/dbconnect.php";
if (isset($_GET['deleteidproduit'])) {
	$idclients  =   $_GET['deleteidproduit'];
	$sql        =   "DELETE FROM product WHERE id = $idclients";
	$result     =   mysqli_query($conn, $sql);
	if ($result){
		header('location: ../rapports_produits.php?error=Deletesuccessful');
	} else{
	die(mysqli_error($conn));
    }
}
?>