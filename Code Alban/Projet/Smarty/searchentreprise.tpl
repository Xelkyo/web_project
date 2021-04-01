        <link rel="stylesheet" type="text/css" href="searchresult.css">
        <article class = "col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
            <h1 class = " text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">Entreprise</h1>
            <div>
 
                <!-- Création d'un foreach pour afficher chaque entreprise-->

                {foreach item = output from = $dataCartes}

                    <!-- Création d'un formulaire pour transmetre les champs au PHP-->

                    <form action="searchentreprise.php" method="POST" >
                        <section class = " row text-center " >
                            <div class = "row col-sm-12 col-md-12 col-lg-12">    
                                <div class="col-sm-12 col-md-12 col-lg-12">Nom entreprise: {$output.Nom_entreprise}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Secteur d'activité: {$output.Nom_secteur}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">Localite: {$output.Localite}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12"> {$output.Nombre_de_stagiaires}</div>
                            </div>
                            <input name='ID_EntreFrom' id='ID_EntreFrom' type="hidden" value="{$output.ID_Entreprise}">
                            <div class="block">
                                <input type="submit" name="Modifier" value="Modifier" />
                                <input type="submit" name="Supprimer" value="Supprimer" />
                            </div> 
                        </section>
                        <br> 
                    </form>
                {/foreach}
        
                </div>
        </article>





