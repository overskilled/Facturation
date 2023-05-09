<?php

include_once "includes/dbconnect.php";
if (isset($_GET['deleteidclients'])) {
	$idclients  =   $_GET['deleteidclients'];
	$sql        =   "DELETE FROM client WHERE id = $idclients";
	$result     =   mysqli_query($conn, $sql);
	if ($result){
		header('location:rapports_clients.php?error=Deletesuccessful');
	} else{
	die(mysqli_error($conn));
    }
}
?>