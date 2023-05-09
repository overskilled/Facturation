<?php include_once "header.php"; 

?>

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
