<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="manifest.json">
        <meta name="theme-color" content="#353E4E">

        <!-- Integration de bootstrap pour faciliter la cration de la navbar --->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Header_footer.css">
        <title>Stageman</title>
    </head>

    <body>

        <!-- Integration de jquery pour faire fonctionner Smarty--->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <header>

            <!-- Debut de la navbar --->

            <nav class="navbar navbar-expand-lg justify-content-center"> 
                <a href="Page d accueil.php" class="nounderline"><img src="Stageman logo.png" alt="Stageman logo" class="stageman">Stageman</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class=" navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        {if $postuleroffre eq '1'}
                        <li class="nav-item">
                            <a id='candidatures'class="nav-link" href="MesCandidatures.php">Mes candidatures</a>
                        </li>
                        {/if}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Créer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                {if $creerentre eq '1'}
                                <a class="dropdown-item" href="Creer_entreprise.php">Entreprise</a>
                                {/if}

                                {if $creeroffre eq '1'}
                                <a class="dropdown-item" href="creer_offre.php">Offre</a>
                                {/if}

                                {if $creeretu eq '1'}
                                <a class="dropdown-item" href="Creer_etudiant.php">Etudiant</a>
                                {/if}

                                {if $creerdele eq '1'}
                                <a class="dropdown-item" href="Creer_delegue.php">Delégué</a>
                                {/if}

                                {if $creerpilo eq '1'}
                                <a class="dropdown-item" href="Creer_pilote.php">Pilote</a>
                                {/if}

                            </div>
                        </li>
                        {if $rechercher eq '1'}
                        <li class="nav-item">
                            <a href="Search.php" class="nav-link">Rechercher</a>
                        </li>
                        {/if}
                        <li class="nav-item">
                            <a href="Sing in.php" class="nav-link">Sing in / Sing out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
