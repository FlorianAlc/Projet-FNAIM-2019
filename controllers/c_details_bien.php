<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$bien = $_GET['bien'];
$unControleur = new Tableau ($server_name,$db_name,$username,$password,"bien");
$result = $unControleur->selectLignes("id_bien",$bien,$_GET['type']);

include 'views/v_details_bien.php';

if(isset($_POST['pvisite'])){
    $unControleur->mincomvisite($_POST['datevisite'],$_POST['heurevisite'].":00");
}