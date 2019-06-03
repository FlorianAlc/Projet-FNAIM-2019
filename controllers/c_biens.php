<?php
require 'models/config.php';
require 'tableau_de_bord.php';

// $biens = get_biens();

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "bien");
$result = $unControleur->selectJoin();

require 'views/v_biens.php';