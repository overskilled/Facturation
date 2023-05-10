<?php include_once "header.php"; 

?>
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
              <form action="includes/produit.inc.php" class="tm-signup-form row" method="post">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom du produit</label>
                  <input
                    id="nom"
                    name="nom_produit"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                 <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name = "description"
                      required
                    ></textarea>
                  </div>
                <div class="form-group col-lg-6">
                  <label for="unite">unite</label>
                   <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name = "unit"
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
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="prix TTC">prix TTC</label>
                  <input
                    id="TTC"
                    name="price_ttc"
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
