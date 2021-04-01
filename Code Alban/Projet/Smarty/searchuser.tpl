        <link rel="stylesheet" type="text/css" href="searchresult.css"> 
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Utilisateurs</h1>

            <!-- Création d'un foreach pour afficher chaque candidature-->

            {foreach item = output from = $dataCarte}
 
                <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                <form method="POST" action="searchuser.php">
                    <section class = " row text-center " >
                        <div class = "row col-sm-12 col-md-12 col-lg-12">    
                            <div class="col-sm-12 col-md-12 col-lg-12"> {$output.Nom_utilisateur}</div>
                            <div class="col-sm-12 col-md-12 col-lg-12">{$output.Prenom}</div>
                            <div class="col-sm-12 col-md-12 col-lg-12">{$output.Nom_centre}</div>
                            <div class="col-sm-12 col-md-12 col-lg-12">{$output.Nom_promo}</div>
                        </div>
                        <input name='ID_UserForm' id='ID_UserForm' type="hidden" value="{$output.ID_Utilisateur}">
                        <div class="block">
                            <input type="submit" name="Modifier" value="Modifier" />
                            <input type="submit" name="Supprimer" value="Supprimer" />
                        </div>
                    </section>
                    <br>
                </form>
            {/foreach}
        </article>










