       <link rel="stylesheet" type="text/css" href="creer.css">
        <fieldset>
        
               <form action="creer_delegue.php" method="POST" class="form">

                  <div class="form col-sm-12 col-md-12 col-lg-12" >
                     <br />
                     <label for="Nom">Nom: </label><br>
                     <input type="text" name="Nom_delegue" id="Nom_delegue" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                     <br />
                     <label for="Prenom">Prénom: </label> <br>
                     <input type="text" name="Prenom_delegue" id="Prenom_delegue" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="Centre">Centre: </label><br>
                    <input type="text" name="Centre" id="Centre" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                      <br />
                    <label for="Promotion">Promotion: </label><br>
                    <input type="text" name="Promotion" id="Promotion" size="30" required>
                  </div>

                  <div class="form col-sm-12 col-md-12 col-lg-12">
                    <br />
                  <label for="email">email: </label><br>
                  <input type="email" name="email" id="email" size="30" required>
                </div>

                <div class="form col-sm-12 col-md-12 col-lg-12">
                    <br />
                  <label for="Mot de passe">Mot de passe: </label><br>
                  <input type="password" name="password" id="password" size="30" required>
                </div>
                 
            
                <div>
                  <br />
                  <button type="submit">Valider</button>
                </div>
            </form>
        </fieldset>  