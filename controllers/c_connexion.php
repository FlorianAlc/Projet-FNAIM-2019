<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name,$db_name,$username,$password,"personne");

$result = $unControleur->connexion();
$unControleurcomercial = new Tableau($server_name,$db_name,$username,$password,"commercial");
$resultcomercial = $unControleurcomercial->selectjoincomercial();

$unControleurclient = new Tableau($server_name,$db_name,$username,$password,"client");
$resultclient = $unControleurclient->selectjoinclient();

require 'views/v_connexion.php';