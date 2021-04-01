        <link rel="stylesheet" type="text/css" href="searchresult.css">
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Candidatures</h1>
            <div>

                <!-- Création d'un foreach pour afficher chaque candidature-->

                {foreach item = output from = $dataCarte}

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->
                    <form method="POST"  action="MesCandidatures.php" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12">Description de l'offre: {$output.Description}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Nom entreprise: {$output.Nom_entreprise}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Date: {$output.Date_offre}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Localite: {$output.Localite}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Etape: {$output.Avancement}</div>
                            </div>
                            <input name='ID_OffreForm' id='ID_OffreForm' type="hidden" value="{$output.ID_Offre}">
                            <input name='Avancement' id='Avancement' type="hidden" value="{$output.Avancement}">
                            <input name='ID_usr' id='ID_usr' type="hidden" value="{$output.ID_Utilisateur}">
                            <div class="block">
                                <input type="submit" name="EtapeSuivante" value="Etape suivante" />
                                <input type="submit" name="Supprimer" value="Supprimer" />
                            </div> 
                        </section>
                    </form>
                {/foreach}
            </div>
        </article> 