
<div class="little_desc">
    <div class="titre">
        <h4><?= ucfirst($unResultat['type'])." ".$unResultat['statut']; ?></h4>

        <div>
			<span class="info_ville">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?= $unResultat['ville'] . ", " . $unResultat['adresse']; ?>
			</span>
        </div>
    </div>

    <div class="image_bien">
        <img src="img/logos/logo_FNAIM_large.png"  class="image_bien" alt="image d'une habitation">
    </div>

    <div class="infos">
        <span class="badge info_bien"><?= $unResultat['surface'] . " m²"; ?></span>
        <span class="badge info_bien"><?= $unResultat['piece'] . " pièce(s)"; ?></span>
        <span class="badge info_bien"><?= $unResultat['chambre'] . " chambre(s)"; ?></span>
        <span class="badge info_bien"><?= $unResultat['eaux'] . " salle(s) d'eau"; ?></span>

        <div class="prix">
            <span class="badge prix_bien"><?= number_format($unResultat['prix'], 0, ',', ' '); ?> €</span>
        </div>
    </div>

    <a href=<?= "index.php?lien=details_bien&bien=" . $unResultat['id_bien']."&type=".$unResultat['type']; ?>>
        <div class="voir_plus">
            <i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i>
            <span>Détails</span>
        </div>
    </a>
</div>