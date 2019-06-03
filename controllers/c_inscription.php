<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "personne");

include 'views/v_inscription.php';