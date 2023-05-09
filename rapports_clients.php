<?php 
      include_once "header.php"; 
      include_once "includes/dbconnect.php"
?>

    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">customer</th>
                    <th scope="col">open invoices</th>
                    <th scope="col">paid invoices</th>
                    <th scope="col">supprimer </th>
                    <th scope="col">modifier</th>
                  </tr>
                </thead>
                <?php
              $sql    = "SELECT * FROM client";
              $result = mysqli_query($conn , $sql);
              if($result){
                  while ($row = mysqli_fetch_assoc($result)) {
                        $idclients       =  $row['id'];
                        $nom_client      =  $row['nom_client'];
                        $prenom_client   =  $row['prenom_client'];
                        $email           =  $row['email'];
                        $telephone       =  $row['telephone'];
                      echo ' 
                        <tr>
                              <th class="tm-product-name" scope="row">'.$idclients.' </th>
                              <td>'.$nom_client.'</td>
                              <td>'.$prenom_client.'</td>
                              <td>'.$email.'</td>
                                <td><a href="delete.php?deleteidclients='.$idclients.'" class="tm-product-delete-link">
                                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                </a>
                              </td>
                              <td>
                                <a href="Update.php?Updateidclients='.$idclients.'" class="tm-product-delete-link">
                                  <i class="fas fa-edit tm-product-delete-icon "></i>
                                </a></td>

                            </tr>

                      ';
                  }
              }
              ?>
                <tbody>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,450</td>
                    <td>550</td>
                    <td>28 March 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                     <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon "></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,250</td>
                    <td>750</td>
                    <td>21 March 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                     <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,100</td>
                    <td>900</td>
                    <td>18 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,400</td>
                    <td>600</td>
                    <td>24 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,800</td>
                    <td>200</td>
                    <td>22 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                     <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>20 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>500</td>
                    <td>100</td>
                    <td>10 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>08 Feb 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,200</td>
                    <td>800</td>
                    <td>24 Jan 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>1,600</td>
                    <td>400</td>
                    <td>22 Jan 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name"></td>
                    <td>2,000</td>
                    <td>400</td>
                    <td>21 Jan 2019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                     <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="fas fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="ajout_produit.php"
              class="btn btn-primary btn-block text-uppercase mb-3">ajouter un produit</a>
            <button class="btn btn-primary btn-block text-uppercase">
              supprimer un produit
            </button>
          </div>
        </div>
        <!--div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
            </div>
            < table container >
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              modifier
            </button>
          </div>
        </div-->
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
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>