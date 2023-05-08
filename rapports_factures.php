<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>globatical It Consulting</title>
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
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
         <img src="gocas-removebg-preview (1).png" width="45px" height="45px"> 
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
                <i class="fas fa-chart-line"></i>home
                <span class="sr-only">(current)</span>
              </a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-file-alt"></i><span>factures<i class="fas fa-angle-down"></i></span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rapports_factures.php">rapport produits</a>
                     <a class="dropdown-item" href="createinvoice.php">creer une facture</a>
                  </div>
              </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-shopping-cart"></i><span>produits <i class="fas fa-angle-down"></i></span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rapports_produits.php">rapport produits</a>
                     <a class="dropdown-item" href="product.php">ajouter un produit</a>
                  </div>
              </li>

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="clients.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i><span>clients<i class="fas fa-angle-down"></i></span>
                 </a>
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
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">customer</th>
                    <th scope="col">date d'achat</th>
                    <th scope="col">total</th>
                    <th scope="col">supprimer</th>
                    <th  scope="col">modifier</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 1</td>
                    <td>1,450</td>
                    <td>550</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                       <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 2</td>
                    <td>1,250</td>
                    <td>750</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                         <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                          <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 3</td>
                    <td>1,100</td>
                    <td>900</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 4</td>
                    <td>1,400</td>
                    <td>600</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                          <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 5</td>
                    <td>1,800</td>
                    <td>200</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                          <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                    <td class="tm-product-name">Lorem Ipsum Product 6</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>       
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 7</td>
                    <td>500</td>
                    <td>100</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 8</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 9</td>
                    <td>1,200</td>
                    <td>800</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 10</td>
                    <td>1,600</td>
                    <td>400</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                       <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Lorem Ipsum Product 11</td>
                    <td>2,000</td>
                    <td>400</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt "></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <!--a
              href="ajout_produit.php"
              class="btn btn-primary btn-block text-uppercase mb-3">ajouter un produit</a>
            <button class="btn btn-primary btn-block text-uppercase">
              supprimer un produit
            </button-->
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
            </div>
            <!-- table container -->
            <!--button class="btn btn-primary btn-block text-uppercase mb-3">
              modifier
            </button-->
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> by Globatical It Consulting
        </p>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
