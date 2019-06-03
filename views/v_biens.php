<?php ob_start(); ?>

    <div class="container-fluid">
        <div class="row">

            <!-- Colonne de gauche -->
            <div class="col-5 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                <!-- Gestion de compte -->
                <div class="text-center" style="margin: 15px;">
                    <i style="margin-bottom: 20px;" class="fa fa-4x fa-user-circle" aria-hidden="true"></i>
<?php if (isset($_SESSION['id'])): ?>
                        <h4 style="margin-bottom: 20px;"><strong><?= ucfirst($_SESSION["prenom"]) . " " . strtoupper($_SESSION["nom"]) ?></strong></h4>

                        <form method ="post" action="index.php?lien=biens">
                            <input style="background-color: #f8d61e;" class="btn" type="submit" value="Déconnexion" name="deco">
                        </form>
<?php else: ?>
                       <h4 style="margin-bottom: 20px;"><strong>Mon Compte</strong></h4>

                        <div>
                            <a href="index.php?lien=connexion">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#connexion">Connexion</button>
                            </a>
                        </div>
                        <div>
                            <a href="index.php?lien=inscription">
                                <button style="background-color: #f8d61e; color: black;" type="button" class="btn" data-toggle="modal" data-target="#inscription">Inscription</button>
                            </a>
                        </div>
<?php endif; ?>
                </div> <!-- END Gestion de compte -->

                <?php include('views/templates/v_filters_form.php'); ?>
            </div>

            <div class="col">
<?php
                    if (isset($_POST['search_filtre']))
                    {
                        foreach ($result as $unResultat)
                        {
                            include('views/templates/v_filters_var.php');

                            if(isset($unResultat['surface_terrain']) && (isset($_POST["filter_cave"]) || isset($_POST['filter_grenier']) || !empty($_POST['filter_surface_du_terrain'])))
                            {
                                if ($unResultat['statut'] === $filter_statut && $unResultat['ville'] === $filter_ville && $unResultat['surface'] === $filter_surface && $unResultat['piece'] === $filter_piece && $unResultat['prix'] <= $filter_prix_max && $unResultat['prix'] >= $filter_prix_min && $unResultat['surface_terrain'] === $filter_surface_terrain && $unResultat['cave'] == $filter_cave && $unResultat['grenier'] == $filter_grenier && $unResultat['chambre'] === $filter_chambre && $unResultat['eaux'] === $filter_eaux)
                                {
                                    include("views/templates/v_little_desc.php");
                                }
                            }
                            elseif(isset($unResultat['ascenseur']) && (isset($_POST["filter_balcon"]) || isset($_POST['filter_ascenseur']) || isset($_POST['filter_place_parking']))) {
                                if ($unResultat['statut'] === $filter_statut && $unResultat['ville'] === $filter_ville && $unResultat['surface'] === $filter_surface && $unResultat['piece'] === $filter_piece && $unResultat['prix'] <= $filter_prix_max && $unResultat['prix'] >= $filter_prix_min && $unResultat['ascenseur'] == $filter_ascenseur && $unResultat['balcon'] == $filter_balcon && $unResultat['place_parking'] == $filter_place_parking && $unResultat['chambre'] === $filter_chambre && $unResultat['eaux'] === $filter_eaux)
                                {
                                    include("views/templates/v_little_desc.php");
                                }
                            }
                            elseif(!isset($_POST['filter_cave']) && !isset($_POST['filter_grenier']) && !isset($_POST['filter_ascenseur']) && !isset($_POST['balcon']) && empty($_POST['filter_surface_du_terrain'])) {

                                if ($unResultat['statut'] === $filter_statut && $unResultat['ville'] === $filter_ville && $unResultat['surface'] === $filter_surface && $unResultat['piece'] === $filter_piece && $unResultat['prix'] <= $filter_prix_max && $unResultat['prix'] >= $filter_prix_min && $unResultat['chambre'] === $filter_chambre && $unResultat['eaux'] === $filter_eaux && $unResultat['type'] === $type)
                                {
                                    include("views/templates/v_little_desc.php");
                                }
                            }
                        }
                    }
                    else
                    {
                        foreach ($result as $unResultat)
                        {
                            include("views/templates/v_little_desc.php");
                        }
                    }
?>
            </div>
        </div>
    </div>

<?php
if (isset($_POST['deco'])):
    session_destroy();
    header("Refresh:0");
endif;

$contenu = ob_get_clean();
require 'views/templates/main.php';
?>