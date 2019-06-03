<?php
ob_start();

if (isset($_SESSION['id'])):
?>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-user-information">
                <tbody>
                    <tr>
                        <td><strong>Prénom :</strong></td>
                        <td><?= $_SESSION["prenom"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nom :</strong></td>
                        <td><?= $_SESSION["nom"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email :</strong></td>
                        <td><?= $_SESSION["email"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Password :</strong></td>
                        <td style='font-size: 65%'>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Téléphone :</strong></td>
                        <td><?= $_SESSION["telephone"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Date de naissance :</strong></td>
                        <td><?= $_SESSION["date_naissance"] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Genre :</strong></td>
                        <td><?= $_SESSION["sexe"] ?></td>
                    </tr>
<?php
    // Si l'utilisateur est un client
    if($_SESSION['statut'] == 1):
?>
                    <tr>
                        <td><strong>Département :</strong></td>
                        <td><?= $_SESSION['departement'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Date d'inscription :</strong></td>
                        <td><?= $_SESSION['date_inscription'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <form method ="post" action="index.php?lien=profil">
                <input class="btn btn-dark" type='submit' value="Déconnexion" name="deco">
            </form>
            <a href='index.php?lien=modif_client'>
                <button class="btn btn-primary" type="submit">Modifier</button>
            </a>
        </div>
    </div>
<?php
    // Si l'utilisateur est un commercial
    elseif ($_SESSION['statut'] == 2):
?>
                    <tr>
                        <td><strong>Périmètre d'action :</strong></td>
                        <td><?= $_SESSION['perimetre_action'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Date d'emboche :</strong></td>
                        <td><?= $_SESSION['date_embauche'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nombre de visites :</strong></td>
                        <td><?= $_SESSION['nb_visite'] ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <form method ="post" action="index.php?lien=profil">
                    <input class="btn btn-dark" type='submit' value="Déconnexion" name="deco">
                </form>
                <a href='index.php?lien=modif_commercial'>
                    <button class="btn btn-primary" type="submit">Modifier</button>
                </a>
            </div>
        </div>
    </div>
<?php
    endif;
else:
    require "views/templates/v_info_connexion.php";
endif;

if (isset($_POST['deco'])):
    session_destroy();
    header("Refresh:0");
endif;

$contenu = ob_get_clean();
require 'views/templates/main.php';
?>