
        <link rel="stylesheet" type="text/css" href="creer.css">
        <fieldset>

          <!-- Création d'un formulaire pour transmetre les champs au PHP-->
          
               <form action="creer_entreprise.php" method="POST" class="form"> 
                  <div class="form col-sm-12 col-md-12 col-lg-12">
                     <br />
                     <label for="Nom de l'entreprise">Nom de l'entreprise: </label><br>
                     <input type="text" name="Nom_Entreprise" id="Nom_Entreprise" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                     <br />
                     <label for="Secteurs d'activité">Secteurs d'activités: </label> <br>
                     <input type="text" name="Secteur_Act" id="Secteur_Act" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="localité">localité: </label><br>
                    <input type="text" name="localité" id="localité" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="Nbr_Stagiaires">Nombre de stagiaires CESI déjà acceptés: </label><br>
                    <input type="number" name="Nbr_Stagiaires" id="Nbr_Stagiaires" min="0" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                     <br />
                   <label for="email">Email: </label><br>
                   <input type="text" name="email" id="email" size="30" required>
                 </div>
                 
                 <div class= "form col-sm-12 col-md-12 col-lg-12"> 
                  <br />
                  <label for="Conf_Pilote">Confiance du Pilote:</label><br>
                  <input type="number" name="Conf_Pilote" id="Conf_Pilote" max="5" min="0" size="30" required/>
              </div>
            
                <div>
                  <br />
                  <button type="submit">Valider</button>
                </div>
            </form>
        </fieldset>