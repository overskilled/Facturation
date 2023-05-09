<?php include_once "header.php"; 

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
              <form action="includes/client.inc.php" class="tm-signup-form row" method="post">
                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">nom du client</label>
                  <input
                    id="nom"
                    name="nom_client"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                 <div class="form-group col-lg-6">
                  <label for="TVA par defaut">prenom du client </label>
                  <input
                    id="prenom"
                    name="prenom_client"
                    type="text"
                    class="form-control validate"
                  />
                </div>

                <div class="form-group col-lg-6">
                  <label for="TVA par defaut">telephone</label>
                  <input
                    id="telephone"
                    name="telephone"
                    type="tel"
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
                
                <div class="col-12">
                  <button
                    type = "submit"
                    name = "submit"
                    class= "btn btn-primary btn-block text-uppercase"
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
