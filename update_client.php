<?php 
  include_once "includes/dbconnect.php";
  $idclients=$_GET['Updateidclients'];
   $sql="SELECT * FROM `client` WHERE id=$idclients ";
    $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $nom_client=$row['nom_client'];
        $prenom_client=$row['prenom_client'];
        $email=$row['email'];
        $telephone=$row['telephone'];

if(isset($_POST['submit'])){
  $nom_client=$_POST['nom_client'];
  $prenom_client=$_POST['prenom_client'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $sql="UPDATE `client` SET `nom_client`='$nom_client',`prenom_client`='$prenom_client',
  `email`='$email',`telephone`='$telephone' WHERE id=$idclients"; 
  $result=mysqli_query($conn,$sql);
  if ($result) {
  //echo"Data inserted succesfully";
    header("location: ../Facturation/rapports_clients.php?error=updatesuccessful");
  }else{
    die(mysqli_error($conn));
  }

}
  ?>
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
    <link rel="stylesheet" href="css/templatemoo-style.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
  </head>
<?php
 include("header.php");
?>
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">informations sur le client</h2>
             
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">informations sur les clients</h2>
              <form action="" method="post" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom du client</label>
                  <input
                  value="<?php echo"$nom_client";?>"
                    id="nom"
                    name="nom_client"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                 <div class="form-group col-lg-6">
                  <label for="TVA par defaut">prenom du client </label>
                  <input
                  value="<?php echo "$prenom_client"; ?>"
                    id="prenom"
                    name="prenom_client"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">telephone</label>
                  <input
                  value="<?php echo "$telephone"; ?>"
                    id="telephone"
                    name="telephone"
                    type="tel"
                    class="form-control validate"
                  />
                </div>


                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">email</label>
                  <input
                  value="<?php echo "$email"; ?>"
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    name="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Update 
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
            Copyright &copy; <b>2023</b> All rights reserved. 
            
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
