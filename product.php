<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Globatical It consulting</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="ngato.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
           <img src="gocas-removebg-preview (1).png" width="75px" height="75px"> 
          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <i class=" fas fa-chart-line"></i>home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="far fa-file-alt"></i><span>factures<i class="fas fa-angle-down"></i></span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="rapports_clients.php">rapport factures</a>
                  <a class="dropdown-item" href="clients.php">ajouter une facture</a>
                </div>
              </li>            
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-shopping-cart"></i>
                  <span>produits<i class="fas fa-angle-down"></i></span></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rapports_produits.php">rapport produits</a>
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
                    entreprise
                </a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">informations sur le produit</h2>
             
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">product details</h2>
              <form action="" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom du produit</label>
                  <input
                    id="nom"
                    name="nom du produit"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                 <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>
                <div class="form-group col-lg-6">
                  <label for="unite">unite</label>
                   <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option value="1">cm</option>
                      <option value="2">m</option>
                      <option value="3">km</option>
                      <option value="4">kg</option>
                      <option value="5">h</option>
                      <option value="6">pcs</option>
                      <option value="7">add or modify</option>
                    </select>
                </div>

                 <div class="form-group col-lg-6">
                  <label for="TVA par defaut">prix base sur</label>
                   <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option value="1">price including VAT</option>
                      <option value="2">price excluding VAT</option>
                    </select>
                </div>
                 <div class="form-group col-lg-6">
                  <label for="TVA">TVA</label>
                  <input
                    id="TVA"
                    name="TVA"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="prix TTC">prix TTC</label>
                  <input
                    id="TTC"
                    name="TTC"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="quantite">quantite</label>
                  <input
                    id="quantite"
                    name="quantite"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                  ajouter un nouveau produit
                  </button>
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Enregistrez vos informations
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
