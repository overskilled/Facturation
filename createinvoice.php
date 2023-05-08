<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Globatical It Consulting</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="ngato.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
  </head>

  <body>
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
                <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i>
                <span>factures<i class="fas fa-angle-down"></i></span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="rapports_factures.php">rapport factures</a>
                  <a class="dropdown-item" href="createinvoice.php">creer une facture</a>
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
                  <i class="far fa-user-circle"></i>
                    entreprise
                </a>
            </li> 


          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">creer une facture</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >nom du client
                    </label>
                    <input
                      id="nom_client"
                      name="nom_client"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >nom du produit
                    </label>
                    <input
                      id="nom_produit"
                      name="nom_produit"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="date"
                      >date
                    </label>
                    <input
                      id="date"
                      name="date"
                      type="date"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="date"
                      >quantite
                    </label>
                    <input
                      id="quantite"
                      name="quantite"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                   <div class="form-group mb-3">
                    <label
                      for="date"
                      >unite
                    </label>
                    <input
                      id="unite"
                      name="unite"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="prix"
                            >prix
                          </label>
                          <input
                            id="prix"
                            name="prix"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="total"
                            >total
                          </label>
                          <input
                            id="total"
                            name="total"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
              <h2 class="tm-block-title">infos sur facture</h2>
              <div class="tm-product-table-container">
             
            </div>
            <!-- table container -->
          </div>
        </div>
                
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">save</button>
                <button type="submit" class="btn btn-primary btn-block text-uppercase">cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2023</b>by young Globatical It Consulting.
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
