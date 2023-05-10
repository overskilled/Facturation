<?php 
      include_once "header.php"; 
      
?>
 
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">nom du produit</th>
                    <th scope="col">prix sans TVA</th>
                    <th scope="col">prix avec TVA</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                $sql    = "SELECT * FROM product";
                $result = mysqli_query($conn , $sql);
                if($result){
                    while ($row = mysqli_fetch_assoc($result)) {
                      $idproduit =  $row['Id'];
                      $nom       = $row['nom_produit'];
                      $des       = $row['description'];
                      $unit      = $row['unit'];
                      $vat       = $row['vat'];
                      $vatPrice  = $row['vatprice'];
                      $ttc       = $row['ttc'];
                      $qty       = $row['quantity'];
                        echo ' 
                          <tr>
                                <th class="tm-product-name" scope="row">'.$nom.' </th>
                                <td>'.$vatPrice.'</td>
                                <td>'.$ttc.'</td>
                                  <td><a href="delete_product.php?deleteidproduit='.$idproduit.'" class="tm-product-delete-link">
                                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                  </a>
                                </td>
                                <td>
                                  <a href="update_product.php?Updateidproduit='.$idproduit.'" class="tm-product-delete-link">
                                    <i class="fas fa-edit tm-product-delete-icon "></i>
                                  </a></td>

                              </tr>

                        ';
                    }
                }
                ?>
                
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">ajouter un produit</a>
           
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              modifier
            </button>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>