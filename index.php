<?php
// Démarrage de la session
session_start();

// Définition du routage
if(!isset($_REQUEST['lien']))
{
    $lien = 'accueil';
}
else
{
    $lien = $_REQUEST['lien'];
}

switch($lien)
{
    case 'accueil':
        include("controllers/c_accueil.php");
        break;

    case 'biens' :
        include("controllers/c_biens.php");
        break;
    case 'details_bien' :
        include("controllers/c_details_bien.php");
        break;
    case 'a_propos' :
        include("controllers/c_a_propos.php");
        break;
    case 'recherche' :
        include("controllers/c_recherche.php");
        break;
    case 'visites' :
        include("controllers/c_visites.php");
        break;

    case 'profil' :
        include("controllers/c_profil.php");
        break;
    case 'connexion' :
        include("controllers/c_connexion.php");
        break;
    case 'inscription' :
        include("controllers/c_inscription.php");
        break;
    case 'modif_client' :
        include("controllers/c_modif_client.php");
        break;
    case 'modif_commercial' :
        include("controllers/c_modif_commercial.php");
        break;

}