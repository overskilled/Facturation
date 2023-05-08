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

  <script type="text/javascript">
    function readURL(input){
      if (input.files && input.files[0]) {
        var reader=new FileReader();
        reader.onload= function (e){
          $('#Image1').attr('src',e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

  <body id="reportsPage">
    <div class="" id="home">
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
                  <i class=" fas fa-chart-line"></i>home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-file-alt"></i>
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
                  <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
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
              <h2 class="tm-block-title">votre logo ici</h2>
              <div class="tm-avatar-container">
                <img
                  src="logog.jpg"
                  alt="Avatar"
                  class="tm-avatar img-fluid mb-4"
                  id="Image1"
                />
              </div>
               <input id="fileInput" type="file" accept="image/*" onchange="readURL(this);" style="visibility:hidden;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block text-uppercase"
                    value="ajouter votre logo"
                    onclick="document.getElementById('fileInput').click();  return false"
                  />
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">company details</h2>
              <form action="" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom de l'entreprise</label>
                  <input
                    id="nom"
                    name="nom_entreprise"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="numero de TVA">numero de TVA</label>
                  <input
                    id="numero de TVA"
                    name="TVA par defaut"
                    type="text"
                    class="form-control validate"
                  />
                </div> 
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">TVA par defaut</label>
                   <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option value="1">0%</option>
                      <option value="2">90%</option>
                      <option value="3">add or modify</option>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="pays">pays</label>
                  <input
                    id="pays"
                    name="pays"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="code postal">code postal</label>
                  <input
                    id="code postal"
                    name="code postal"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="ville">ville</label>
                  <input
                    id="ville"
                    name="ville"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="site web">site web</label>
                  <input
                    id="site web"
                    name="site web"
                    type="text"
                    class="form-control validate"
                  />
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
            Copyright &copy; <b>2023</b> by Globatical It Consulting 
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
