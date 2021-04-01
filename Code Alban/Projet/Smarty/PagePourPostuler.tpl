<link rel="stylesheet" type="text/css" href="search.css">
<link rel="stylesheet" type="text/css" href="PagePourPostuler.css">
<div class="corp">
{foreach item = output from = $dataCarte}
    <link rel="stylesheet" type="text/css" href="search.css">
    <section class = "text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2" >
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12"> Nom de l’entreprise: {$output.Nom_entreprise}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Localité: {$output.Localite}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Durée de stage: {$output.Duree}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Type de promotion: {$output.Nom_type}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Base de rémunération: {$output.Remuneration}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Date de l’offre: {$output.Date_Offre}</div>
            <div class="col-sm-12 col-md-12 col-lg-12"> Nombre de places offertes aux étudiants: {$output.Nombre_de_place}</div>
        </div>
    </section>
    
    <section class = "text-center col-sm-12 col-md-10 col-lg-8 offset-sm-0 offset-md-1 offset-lg-2">
        <div>Desciption de l'offre:
            {$output.Description}
        </div>
    </section>

    <form action="Email.php" methode="POST"> <!-- oublie pas de le remplir  -->
        <section class="Fichier">
        <h1 class = text-center>Postuler</h1>
            <div class="container">
                <div class="row">
                    <div  class="col text-center"> 
                        <!-- Selection un document en PDF qui servira de CV -->
                        <label for="avatar">Selection votre CV:</label><br>
                        <input type="file" id="CV" name="CV" accept=".pdf" required>                    
                    </div>
                    <div  class="col text-center">
                        <!-- Selection un document en PDF qui servira de LM -->
                        <label for="avatar" >Selection votre Lettre de Motivation:</label><br>
                        <input type="file" id="LM" name="LM" accept=".pdf" required>
                    </div>
                </div>
            </div>
            <input name='ID_OffreForm' id='ID_OffreForm' type="hidden" value="{$output.ID_Offre}">
            <div>
                <br>
                <button name="button">Postuler</button>
            </div>
        </section>
    </form>
{/foreach}
</div>