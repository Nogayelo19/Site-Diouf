
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>CONTACTS </h2>
         
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>ADRESSE ::</h4>
                <p>Dieupeul 3</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>EMAIL:</h4>
                <p>bethelcoaching@gmail.com (expe)</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>TÉLÉPHONE :</h4>
                <p>+221 77 160 70 93</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            
                <!-- 🌴🌴🌴 Affiche le formulaire d'ajout 🌴🌴🌴 -->
                <?php 
                // {
                //   if (isset($_GET["showFrm"]) && $_GET["showFrm"] == 1) 
               
                ?>
            <form action="contacteController" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nom">nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="objet">Objet</label>
                <input type="text" class="form-control" name="objet" id="objet" required>
              </div>
              <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="col-lg-12 mb-3">
                <center>
                <button type="submit" name="ajouterContact" class="btn"style="background-color: #3c027b; color: #fff;">
                <b>Envoyer</b></button>
                  <button type="reset" class="btn btn-danger"><b>Annuler</b></button>
                </center>
               </div>
                <!-- Message  -->
                <?php 
                  // if (isset($_GET["sent-message"])) 
                  // {
                ?>
                <div class="alert alert-success text-center" role="alert">
                  Message envoyer avec succès!
                </div>
                <?php 
                // }
                ?>

              </div>
      <!-- <script>
               $("#idForm").submit(function()
                 {
                   if ($('#idForm').valid()) {
                   $("#submit").attr("disabled", "disabled");
                   return true;
                    }       
                });
    </script> -->
          </div>

        </div>

      </div>
      </
      
      <?php 
          // }
        ?>


    </section>

