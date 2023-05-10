<?php 
    include_once "includes/dbconnect.php";
    $idproduit          =   $_GET['Updateidproduit'];
    $sql                =   "SELECT * FROM `product` WHERE id=$idproduit ";
    $result             =   mysqli_query($conn,$sql);
    $row                =   mysqli_fetch_assoc($result);
    $idproduit          =   $row['Id'];
    $nom                =   $row['nom_produit'];
    $des                =   $row['description'];
    $unit               =   $row['unit'];
    $vat                =   $row['vat'];
    $vatPrice           =   $row['vatprice'];
    $ttc                =   $row['ttc'];
    $qty                =   $row['quantity'];

if(isset($_POST['submit'])){
  $nom       = $_POST['nom_produit'];
  $des       = $_POST['description'];
  $unit      = $_POST['unit'];
  $vat       = $_POST['include_vat'];
  $vatPrice  = $_POST['prix_vat'];
  $ttc       = $_POST['price_ttc'];
  $qty       = $_POST['quantite'];
  $sql       = "UPDATE `product` SET `nom_produit`='$nom',`description`='$des',
  `unit`='$unit',`vat`='$vat',`vatprice`='$vatPrice',`ttc`='$ttc',`quantity`='$qty' WHERE id=$idproduit"; 

  $result = mysqli_query($conn,$sql);

  if ($result) {
  //echo"Data inserted succesfully";
    header("location: ../Facturation/rapports_produits.php?error=updatesuccessful");
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
              <h2 class="tm-block-title">product details</h2>
              <form action="" class="tm-signup-form row" method="post">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom du produit</label>
                  <input
                    id="nom"
                    name="nom_produit"
                    type="text"
                    class="form-control validate"
                    value="<?php echo"$nom";?>"
                  />
                </div>

                 <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name = "description"
                      value="<?php echo"$des";?>"
                      
                    ></textarea>
                  </div>
                <div class="form-group col-lg-6">
                  <label for="unite">unite</label>
                   <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name = "unit"
                      value="<?php echo"$unit";?>"
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
                      name ="include_vat"
                      value="<?php echo"$vat";?>"
                    >
                      <option value="1">price including VAT</option>
                      <option value="2">price excluding VAT</option>
                    </select>
                </div>
                 <div class="form-group col-lg-6">
                  <label for="TVA">Price excluding VAT</label>
                  <input
                    id="TVA"
                    name="prix_vat"
                    type="text"
                    class="form-control validate"
                    value="<?php echo"$vatPrice";?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="prix TTC">prix TTC</label>
                  <input
                    id="TTC"
                    name="price_ttc"
                    type="text"
                    class="form-control validate"
                    value="<?php echo"$ttc";?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="quantite">quantite</label>
                  <input
                    id="quantite"
                    name="quantite"
                    type="text"
                    class="form-control validate"
                    value="<?php echo"$qty";?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  
                </div>
                <div class="col-12">
                  <button
                    type="submit" name="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Ajouter le produit
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


002