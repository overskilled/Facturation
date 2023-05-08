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
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <?php
$servername ="localhost";
$database = "bd_utilitaires";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}

  if(isset($_POST['submit'])){
    $nom=$_POST['username'];
    $email=$_POST['email'];
    $pays=$_POST['pays'];
    $password=$_POST['password'];

    $sql="INSERT INTO 'users`(`id`, `nom`, `pays`, `email`, `password`) VALUES ('NULL','$nom','$pays','$email','$password')";
    $row=mysqli_query($connect,$sql);
    if(!$row){
      echo'veuillez verifier la connexion a la base de donnees';
    }

    else{
      header("location:entreprise.php");
    }
  }




  ?>
  <body>
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <img src="gocas-removebg-preview(1).png" width="75px" height="75px"> 
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
              <li class="nav-item">
                <a class="nav-link" href="entreprise.php">
                  <i class="fa fa-home"></i>
                    entreprise
                </a>
              </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="createinvoice.php" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-file-alt"></i>
                  <span>factures<i class="fas fa-angle-down"></i></span></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rapports_factures.php">rapports factures</a>
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
                <a class="nav-link d-block" href="login.php">
                  Admin, <b>Logout</b>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Dashboard, Login</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="index.html" method="post" class="tm-login-form">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input
                      name="username"
                      type="text"
                      class="form-control validate"
                      id="username"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username">email</label>
                    <input
                      name="email"
                      type="email"
                      class="form-control validate"
                      id="email "
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username">pays</label>
                    <input
                      name="pays"
                      type="text"
                      class="form-control validate"
                      id="pays"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">password</label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="password"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                      name="submit"
                    >
                     connexion
                    </button>
                  </div>
                  <button class="mt-5 btn btn-primary btn-block text-uppercase">
                    Forgot your password?
                  </button>
                </form>
              </div>
            </div>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
