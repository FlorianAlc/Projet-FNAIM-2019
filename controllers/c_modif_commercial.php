<?php
require 'models/config.php';
require 'tableau_de_bord.php';

$unControleur = new Tableau ($server_name, $db_name, $username, $password, "personne");

include 'views/v_modif_commercial.php';

if(isset($_POST['enregModif']))
{
    $tab = array();
    $tab['id_personne'] = $_SESSION["id"];
    $tab['nom'] = $_POST['nom'];
    $tab['prenom'] = $_POST['prenom'];
    $tab['email'] = $_POST['email'];
    $tab['telephone'] = $_POST['telephone'];
    $tab['password'] = sha1($_POST["password"]);
    $tab['sexe'] = $_POST['gender'];
    $tab['date_naissance'] = $_POST['bday'];
    $tab['droits'] = "user";
    $tab['perimetre_action'] = $_SESSION['perimetre_action'];

    $unControleur->updatecomercial($tab);

    echo "	<center>
                <div style=\" background-color:#00C851\" id=\"info2\" class=\"notification\">
                    <span>
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            Modifications enregistrés !
                    </span>
                </div>
            </center>";
}
else
{
    echo "<center>
            <div style=\" background-color: #ff4444\" id=\"info1\" class=\"notification\">
                <span>
                    <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                     Erreur !
                </span>
            </div>
        </center>";
}