<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "personne");

include 'views/v_modif_client.php';

if(isset($_POST['enregModif']))
{
    $tab = array();
    $tab['id_personne'] = $_SESSION["id"];
    $tab['nom'] = $_POST['nom'];
    $tab['prenom'] = $_POST['prenom'];
    $tab['email'] = $_POST['email'];
    $tab['telephone'] = $_POST['phone'];
    $tab['password'] = sha1($_POST['password']);
    $tab['sexe'] = $_POST['gender'];
    $tab['date_naissance'] = $_POST['bday'];
    $tab['droits'] = "user";
    $tab['departement'] = $_POST['departement'];

    $unControleur->updateclient($tab);

    echo "	<center>
                <div style=\" background-color:#00C851\" id=\"info2\" class=\"notification\">
                    <span>
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        Modifications enregistrées !
                    </span>
                </div>
            </center>";
}