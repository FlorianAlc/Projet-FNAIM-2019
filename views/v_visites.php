<?php
ob_start();

if (isset($_SESSION['id'])):
?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-body">
                        <table class="table  table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>Id visite</th>
                                    <th>Date</th>
                                    <th>heure</th>
                                    <th>Etat du bien</th>
                                    <th>Ville</th>
                                    <th>Adresse</th>
                                    <th>Id bien</th>
                                    <th>Prénom client</th>
                                    <th>Nom client</th>
                                    <th>Prénom commercial</th>
                                    <th>Nom commercial</th>
                                </tr>
                            </thead>

                            <tbody>
<?php
    foreach ($result as $unresultat):
        if ($_SESSION['statut'] == 1):
            if ($_SESSION['id'] == $unresultat['id_personne']):
?>
                                <!-- Tableaux client -->
                                <tr>
                                    <td><?= $unresultat["id_visite"] ?></td>
                                    <td><?= $unresultat["date_visite"] ?></td>
                                    <td><?= $unresultat["heure"] ?></td>
                                    <td><?= utf8_encode($unresultat["etat"]) ?></td>
                                    <th><?= $unresultat['ville'] ?></th>
                                    <th><?= $unresultat['adresse'] ?></th>
                                    <td><?= $unresultat["id_bien"] ?></td>
                                    <th><?= $_SESSION['prenom'] ?></th>
                                    <th><?= $_SESSION['nom'] ?></th>
                                    <td><?= $unresultat['nom'] ?></td>
                                    <td><?= $unresultat['prenom'] ?></td>
                                </tr>
<?php
            endif;
        elseif ($_SESSION['statut'] == 2):
            if ($_SESSION['id'] == $unresultat['id_commercial']):
?>
                                <!-- Tableaux commercial -->
                                <tr>
                                    <td><?= $unresultat["id_visite"] ?></td>
                                    <td><?= $unresultat["date_visite"] ?></td>
                                    <td><?= $unresultat["heure"] ?></td>
                                    <td><?= utf8_encode($unresultat["etat"]) ?></td>
                                    <th><?= $unresultat['ville'] ?></th>
                                    <th><?= $unresultat['adresse'] ?></th>
                                    <td><?= $unresultat["id_bien"] ?></td>
                                    <td><?= $unresultat['nom'] ?></td>
                                    <td><?= $unresultat['prenom'] ?></td>
                                    <th><?= $_SESSION['prenom'] ?></th>
                                    <th><?= $_SESSION['nom'] ?></th>
                                </tr>
<?php
            endif;
        endif;
    endforeach;
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php
else:
    require "views/templates/v_info_connexion.php";
endif;

$contenu = ob_get_clean();
require 'views/templates/main.php';
?>