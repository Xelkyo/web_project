<link rel="stylesheet" type="text/css" href="search.css">
   
        <fieldset class="select" >
            <form class="form1"> 
                <br>
                <p>
                    Que voulez-vous rechercher ?
                </p>
                <div>
                     <input type="radio" class="input1" name="search" id="entreprises" value="entreprises" onClick ="javascript:entreprise()">
                     <label class="lab_form" for="entreprises">Entreprises</label><br>
                      {if Recherche ne '1'}
                        <input type="radio" class="input1" name="search" id="utilisateurs" value="utilisateurs" onClick ="javascript:user()">
                        <label class="lab_form" for="utilisateurs">Utilisateurs</label><br>
                      {/if}
                     <input type="radio" class="input1" name="search" id="offres" value="offres" onClick ="javascript:offre()">
                     <label class="lab_form" for="offres">Offres</label><br>
                </div>
            </form>
        </fieldset>

        <fieldset id="user" style="visibility: hidden;" class="fieldset2">
        <div>
          <form action="searchuser.php" method="POST" class="form2">

                <div class="form">
                    <br />
                    <label for="Nom">Nom: </label><br>
                    <input type="text" name="Nom_pilote" id="Nom_pilote" class="input_form" size="30" >
                 </div>

                 <div class="form">
                    <br />
                    <label for="Prenom">Prénom: </label> <br>
                    <input type="text" name="Prenom_pilote" id="Prenom_pilote" class="input_form" size="30" >
                 </div>

                 <div class="form">
                     <br />
                   <label for="Centre">Centre: </label><br>
                   <input type="text" name="Centre" id="Centre" class="input_form" size="30" >
                 </div>

                 <div class="form">
                     <br />
                   <label for="Promotion">Promotion: </label><br>
                   <input type="text" name="Promotion" id="Promotion" class="input_form" size="30">
                 </div>
                 <div>
                    <br />
                    <button type="submit">Valider</button>
                  </div>

            </form>
        </div>

    </fieldset>

    <fieldset id="entreprise" style="visibility: hidden;" class="fieldset2">
        
        <form action="searchentreprise.php" method="POST" class="form2">

           <div class="form">
              <br />
              <label for="Nom de l'entreprise">Nom de l'entreprise: </label><br>
              <input type="text" name="Nom_Entreprise" id="Nom_Entreprise" class="input_form" size="30" >
           </div>

           <div class="form">
              <br />
              <label for="Secteurs d'activité">Secteurs d'activités: </label> <br>
              <input type="text" name="Secteur_Act" id="Secteur_Act" class="input_form" size="30" >
           </div>

           <div class="form">
               <br />
             <label for="localité">localité: </label><br>
             <input type="text" name="localité" id="localité" class="input_form" size="30" >
           </div>

           <div class="form">
               <br />
             <label for="Nbr_Stagiaires">Nombre de stagiaires CESI déjà acceptés: </label><br>
             <input type="number" name="Nbr_Stagiaires" id="Nbr_Stagiaires" class="input_form" min="0" size="30" >
           </div>          
         <div>
           <br />
           <button type="submit">Valider</button>
         </div>
     </form>
 </fieldset>  

 <fieldset id="offre" style="visibility: hidden;" class="fieldset2"> 
        
    <form action="searchoffre.php" method="POST" class="form2">

       <div class="form">
          <br />
          <label for="Nom de l'Entreprise">Nom de l'Entreprise: </label><br>
          <input type="text" name="Nom_entreprise" id="Nom_entreprise" class="input_form" size="30" >
       </div>

       <div class="form">
          <br />
          <label for="Comptences">Compétences: </label> <br>
          <input type="text" name="Comptences" id="Competences" class="input_form" size="30" >
       </div>

       <div class="form">
           <br />
         <label for="Localité">Localité: </label><br>
         <input type="text" name="Localite" id="Localite" class="input_form" size="30" >
       </div>

       <div class="form">
           <br />
         <label for="durée_du_stage">Durée du stage: </label><br>
         <select name="durée_du_stage">
             <option value=""> choisir durée </option>
             <option value="3"> 3 mois </option>
             <option value="6"> 6 mois </option>
             <option value="9"> 9 mois </option>
             <option value="12"> 12 mois </option>
         </select>
       </div>

       <div class="form">
         <br />
       <label for="Type_de_promotion">Type de promotion: </label><br>
       <select name="Type_de_promotion">
         <option value=""> choisir type de promo </option>
         <option value="Informatique"> Informatique </option>
         <option value="S3E"> S3E </option>
         <option value="BTP"> BTP </option>
         <option value="Generaliste"> Généraliste </option>
     </select>
     </div>
     <div class="form">
         <br />
       <label for="Nombre de places">Nombre de places offertes aux étudiants: </label><br>
       <input type="number" name="Nbr_places" id="Nbr_places" class="input_form" min="0" size="30" >
     </div>
      
     <div>
       <br />
       <button type="submit">Valider</button>
     </div>
 </form>
</fieldset>
        
<script>
    function entreprise()
    {
        document.getElementById('user').style.visibility='hidden';
        document.getElementById('offre').style.visibility='hidden';
        document.getElementById('entreprise').style.visibility='visible';
    }

    function user()
    {
        document.getElementById('offre').style.visibility='hidden';
        document.getElementById('entreprise').style.visibility='hidden';
        document.getElementById('user').style.visibility='visible';
    }

    function offre()
    {
        document.getElementById('entreprise').style.visibility='hidden';
        document.getElementById('user').style.visibility='hidden';
        document.getElementById('offre').style.visibility='visible';
    }


</script>