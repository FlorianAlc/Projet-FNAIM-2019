<?php
ob_start();

if (isset($_SESSION['id'])) {
    echo "<div class=\"container-fluid\">
                <div style='padding-top: 10%; padding-bottom: 10%' class=\"row\">
                    <div class=\"col-md-4 col-lg-4 \" align=\"center\">
                        <i class=\"fa fa-5x fa-user-circle\" aria-hidden=\"true\"></i>
                        <br>
                        <h3>Mon Compte</h3>
                        
                        <form style='padding-top: 2%' method='post' action='index.php'>
                            <input style='background-color: black; ' class=\"btn \" type='submit' value = 'Déconnexion' name = 'deco'>
                            </a>
                        </form>
                    </div>
                    
                    <div class=\" col-md-5 col-lg-5\">
                        <form method='post'>
                            <table class=\"table table-bordered table-hover table-user-information\">
                                <tbody>
                                    <tr>
                                        <td><strong>Prénom :</strong></td>
                                        <td>
                                            <input type=\"text\"  value='" . $_SESSION["prenom"] . "' name='prenom'>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Nom :</strong></td>
                                        <td>
                                            <input type=\"text\" value='" . $_SESSION["nom"] . "' name='nom'>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Email :</strong></td>
                                        <td>
                                            <input type=\"email\" value='" . $_SESSION["email"] . "' name='email'>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Date de naissance :</strong></td>
                                        <td>
                                            <input type=\"date\" value='" . $_SESSION["date_naissance"] . "' name='bday'>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Genre :</strong></td>
                                        <td>
                                            <select class=\"custom-select\" name='gender'>
                                                <option selected>" . $_SESSION["sexe"] . "</option>
                                                <option name=\"gender\" value=\"Male\">homme</option>
                                                <option name=\"gender\" value=\"Female\">femme</option>
                                                <option name=\"gender\" value=\"Other\">autre</option>
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Telephone :</strong></td>
                                        <td>" . $_SESSION["telephone"] . "</td>
                                    </tr>
                                    
                                    <tr>
                                        <tr>
                                            <td><strong>Périmetre d'action :</strong></td>
                                            <td>".$_SESSION['perimetre_action']."</td>
                                        </tr>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Date d'emboche :</strong></td>
                                        <td>".$_SESSION['date_embauche']."</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Nombre de visite :</strong></td>
                                        <td>".$_SESSION['nb_visite']."</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Password :</strong></td>
                                        <td>
                                            <input  id='passs' type=\"password\" name='password'  required>
                                            <label  style='padding-top: 2%; color: red' for=\"passs\"><strong>Confirmer avec votre PASSWORD ou changer le !</strong></label>
                                        </td>            
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div style='padding-top: 3%'>
                                <center>
                                    <a href='index.php?lien=profil'>
                                        <button type=\"button\" style='background-color: dodgerblue; ' class=\"btn \"  name =''>Annuler</button>
                                    </a>
                                    <input href='index.php?lien=profil' style='background-color: dodgerblue; ' class=\"btn \" type='submit' value = 'Enregistrer les modification' name ='enregModif'>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>";

    if (isset($_POST['deco']))
    {
        session_destroy();
        header("index.php?lien=accueil");
    }
}
else
{
    echo "<div style='padding-top: 10%'>
            <center>
                <h1 style='color: #666e76'><strong> Vous devez être connecté</strong></h1>
                <br>
            </center>
        </div>";

    echo "<div style='padding-bottom: 30%'>
                <center>
                    <a href=\"index.php?lien=connexion\">
                        <button style='background-color: black' type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                    </a>
                    <a href=\"index.php?lien=inscription\">
                        <button style='background-color: #f8d61e' type=\"button\" class=\"btn \" data-toggle=\"modal\" data-target=\"#inscription\">Inscription</button>
                    </a>
                </center>
            </div>";
}

?>

    <!-----alertR------>
    <script>
        setTimeout('cacheDiv1()', 10000);
        function cacheDiv1()
        {
            $("#info1").hide("slow");
        }
    </script>

    <!-----alertG------>
    <script>
        setTimeout('cacheDiv2()', 10000);
        function cacheDiv2()
        {
            $("#info2").hide("slow");
        }
    </script>

    <style type="text/css">
        .notification {
            display: block;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 40px;
            padding-top: 40px;
            position: fixed;
            top: 10%;
            color: white;
            right: auto;
            left: auto;
            border-radius: 4px;
        }
    </style>

<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>