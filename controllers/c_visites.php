<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "visite, bien, personne");

if(isset($_SESSION['id']))
{
    if ($_SESSION['statut'] == 1)
    {
        $result = $unControleur->affichageVisiteClient();
    }
    else if ($_SESSION['statut'] == 2)
    {
        $result = $unControleur->affichageVisiteCommercial();
    }
}

include 'views/v_visites.php';