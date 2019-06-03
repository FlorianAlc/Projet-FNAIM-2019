<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "personne");
$result = $unControleur->selectAll();

include 'views/v_profil.php';