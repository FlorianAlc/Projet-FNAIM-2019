<?php
ob_start();

foreach ($result as $unResultat):
?>
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-sm-12 col-md-5 text-center mb-3">
                <img class="img-fluid" style="width: 100%; padding: 15px;" src="img/logos/logo_FNAIM_large.png" alt="logo de la FNAIM">
            </div>

            <div class="col">
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Localisation : <?= ucfirst($unResultat['ville']); ?></h3>

                <h4><?= ucfirst($unResultat['adresse']); ?></h4>
                <h4><?= ucfirst($unResultat['type'])." ".ucfirst($unResultat['statut']); ?> :</h4>

                <span style="margin-top: 10px;border-radius: 3px;font-size: 17px;background-color: #bdbdbd;"
                      class="badge "><?= $unResultat['surface'] . " m²"; ?></span>
                <span style="margin-top: 10px;border-radius: 3px;font-size: 17px;background-color: #bdbdbd;"
                      class="badge "><?= $unResultat['piece'] . " pièces"; ?></span>
                <span style="margin-top: 10px;border-radius: 3px;font-size: 17px;background-color: #bdbdbd;"
                      class="badge "><?= $unResultat['chambre'] . " chambres"; ?></span>
                <span style="margin-top: 10px;border-radius: 3px;font-size: 17px;background-color: #bdbdbd;"
                      class="badge "><?= $unResultat['eaux'] . " salle d'eau"; ?></span>

                <p style="padding-top: 4%"><strong>Numéro du bien : <?= $unResultat['id_bien']; ?></strong></p>

                <span style="border-radius: 3px;background-color: #FFD700;font-size: 25px;"
                      class="badge"><?= number_format($unResultat['prix'], 0, ',', ' '); ?> €
                </span>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 col-md-5 mb-5">
                <h4>Description :</h4><br>
                <p>Cette habitation fait <?= $unResultat['surface'] . " m² et dispose de " . $unResultat["piece"] . " pièces avec " . $unResultat['chambre'] . " chambres et de " . $unResultat['eaux'] . " salle d'eau."; ?></p>
<?php
    if ($unResultat['type'] == 'appartement'):
?>
                <ul class="list-group">
                    <li class="list-group-item">Le bien se trouve a l'étage N° <?= $unResultat['etage']; ?></li>
                    <li class="list-group-item">Il y a <?= $unResultat['ascenseur']; ?> ascenseur</li>
                    <li class="list-group-item">Il y a <?= $unResultat['balcon']; ?> balcon</li>
                    <li class="list-group-item">Il y a <?= $unResultat['place_parking']; ?> place de parking</li>
                </ul>
<?php
    elseif ($unResultat['type'] == 'maison'):
?>
                <ul class="list-group">
                    <li class="list-group-item">Surface du terrain : <?= $unResultat['surface_terrain']; ?> m²</li>
                    <li class="list-group-item">Cave : <?= $unResultat['cave']; ?></li>
                    <li class="list-group-item">Grenier : <?= $unResultat['grenier']; ?></li>
                </ul>
<?php
    endif;
?>
            </div>

            <div class="col mb-5">
                <div class="card  mb-3">
                    <div style='background-color: #f8d61e' class="card-header text-center">
                        <h5>
                            <strong>Vous êtes intéressé ?</strong>
                        </h5>
                    </div>
<?php
        // Si user connecté
        if (isset($_SESSION['id'])):
?>
                    <div class="card-body">
                        <h5 class="card-title">Visite</h5>
                        <input class="btn btn-black" type="button" data-toggle="modal" data-target="#demandevisite" value="Demandez une visite">
                    </div>
<?php
        else:
?>
                    <div class="text-center m-2">
                        <h2 style='color: #666e76'><strong> Vous devez être connecté.</strong></h2>
                    </div>

                    <div class="text-center m-2">
                        <a href="index.php?lien=connexion">
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#connexion">Connexion</button>
                        </a>
                        <a href="index.php?lien=inscription">
                            <button style='background-color: #f8d61e; color: black;' type="button" class="btn " data-toggle="modal" data-target="#inscription">Inscription</button>
                        </a>
                    </div>
<?php
        endif;
?>
                    <div  class="card-footer">
                        <p><strong>Nous contacter</strong></p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            01 23 45 67 89
                        </p>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            Florian.projets@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe width='100%' height='400' frameborder='0' style='border:0;'
            src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDtmteQ8XYMI69oJegqdphqgDSvF-INGp8&q=<?= str_replace(" ", "+", $unResultat['adresse']) . "," . str_replace(" ", "+", $unResultat['ville']); ?>' allowfullscreen>
    </iframe>
<?php
endforeach;
?>
        <!-- Modal -->
        <div class="modal fade row" id="demandevisite" tabindex="-1" role="dialog" aria-labelledby="demandevisite" aria-hidden="true">
            <form action="<?= "index.php?lien=details_bien&bien=" . $unResultat['id_bien']."&type=".$unResultat['type']; ?>" method="post">
                <div class="modal-dialog ">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="demandevisite"><strong>Demander une visite</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <h5>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Localisation : <?= ucfirst($unResultat['ville']).", ".ucfirst($unResultat['adresse']); ?>
                            </h5>

                            <h5 style="padding-left: 3%">Bien <?= ucfirst($unResultat['statut']).", Numéro du bien: ".$unResultat['id_bien']; ?></h5>

                            <div style="padding-top: 3%" class="form-inline">
                                <div class="col-md-5 col-sm-5 col-lg-5">
                                    <div class="md-form">
                                        <span for="form16">Date :</span>
                                        <input type="date" id="form16" name="datevisite" required>
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-5 col-lg-5">
                                    <div class="md-form">
                                        <span for="form15">Heure :</span>
                                        <input type="time" id="form15" name="heurevisite" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-center">
                            <button style="background-color: #f8d61e;" type="button" class="btn" data-dismiss="modal">Annuler</button>
                            <button type="submit" name="pvisite" class="btn btn-dark">Confirmer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>