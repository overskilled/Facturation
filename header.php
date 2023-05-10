<?php
    session_start();
    include_once "includes/dbconnect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>globatical IT consulting</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/ngato.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <img src="img\gocas-removebg-preview (1).png" width="45px" height="45px"> 
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php">
                               <i class=" fas fa-chart-line"></i>home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-file-alt"></i>
                            <span>factures<i class="fas fa-angle-down"></i></span></a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rapports_factures.php">rapport factures</a>
                                <a class="dropdown-item" href="createinvoice.php">ajouter une facture</a>
                            </div>
                       </li>            

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i>
                            <span>produits<i class="fas fa-angle-down"></i></span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rapports_produits.php">rapports produits</a>
                                <a class="dropdown-item" href="product.php">ajouter un produit</a>
                             </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="clients.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i>
                            <span>clients<i class="fas fa-angle-down"></i></span></a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rapports_clients.php">rapport clients</a>
                                <a class="dropdown-item" href="clients.php">ajouter un client</a>
                            </div>
                       </li>            
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="entreprise.php">
                                <i class="fa fa-user-circle"></i>
                                mon compte
                            </a>
                        </li>  
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="includes/Logout.php">
                                <i class="fa fa-user-circle"></i>
                                log out
                            </a>
                        </li>  
                    </ul>
                    <?php 
                    if (isset($_SESSION["Uid"])) {
                       echo "<li>Log out</li>";
                    }
                    ?>
                </div>
            </div>
</nav>