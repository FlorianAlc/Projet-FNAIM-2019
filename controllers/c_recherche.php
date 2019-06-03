<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password,"bien");
$tab = array("surface","prix","statut","adresse");
$result = $unControleur->rechercher($tab,$_POST['search']);

include 'views/v_recherche.php';