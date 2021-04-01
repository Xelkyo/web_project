        <link rel="stylesheet" type="text/css" href="searchresult.css">

        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">offres</h1>
            <div>

                <!-- Création d'un foreach pour afficher chaque offre-->

                {foreach item = output from = $dataCartes}

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                    <form method="POST"  action="PagePourPostuler.php" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12"> Nom de l'Entreprise: {$output.Nom_entreprise}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Description: {$output.Description}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Localité: {$output.Localite}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Durée du stage: {$output.Duree}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> Nombre de places offertes aux étudiants: {$output.Nombre_de_place}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> competence: {$output.competence}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> ID_Offre: {$output.ID_Offre}</div>
                            </div>
                            <input name='ID_OffreForm' id='ID_OffreForm' type="hidden" value="{$output.ID_Offre}">
                            <div class="block">
                                {if $postuleroffre eq '1'}
                                <input type="submit" name="Postuler" value="Postuler" />
                                {/if}
                                <input type="submit" name="Modifier" value="Modifier" />
                                <input type="submit" name="Supprimer" value="Supprimer" />
                            </div> 
                        </section>
                        <br>
                    </form>
                {/foreach}
            </div>
        </article>
        








