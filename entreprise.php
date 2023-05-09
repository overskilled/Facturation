<?php include_once "header.php"; ?>


      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">votre logo ici</h2>
              <div class="tm-avatar-container">
                <img
                  src="img\logog.jpg"
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
    <script type="text/javascript" src="js/image.js"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
