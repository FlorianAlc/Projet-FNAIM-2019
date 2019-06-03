<div style="padding: 20px 0 0 20px;">
    <form action="index.php?lien=biens" method="post">
        <h2 style="color: #666e76;"><strong>Filtres</strong></h2>

        <div class="md-form">
            <select  name="type" class="col-10 form-control">
                <option>Type de bien</option>
                <option  value="appartement">Appartement</option>
                <option  value="maison">Maison</option>
            </select>
        </div>

        <div class="md-form">
            <p>Prix minimum :</p>
            <input class="col-8" type="number" name="filter_prix_min">
        </div>
        <div class="md-form mtb-2">
            <p>Prix maximum :</p>
            <input class="col-8" type="number" name="filter_prix_max">
        </div>
        <div class="md-form">
            <p>Ville :</p>
            <input class="col-8" type="text" name="filter_ville">
        </div>
        <div class="md-form">
            <p>Nombre de pièces :</p>
            <input class="col-8" type="number" name="filter_piece">
        </div>
        <div class="md-form">
            <p>Surface du terrain :</p>
            <input class="col-8" type="number" name="filter_surface_du_terrain">
        </div>
        <div class="md-form">
            <p>Surface m² :</p>
            <input class="col-8" type="number" name="filter_surface">
        </div>
        <div class="md-form">
            <p>Chambres :</p>
            <input class="col-8" type="number" name="filter_chambre">
        </div>
        <div class="md-form">
            <p>Salles d'eaux :</p>
            <input class="col-8" type="number" name="filter_eaux">
        </div>

        <!--<label for="form1" class="custom-control custom-checkbox">
            <input id="form1" type="checkbox" class="custom-control-input"  name="filter_cave">
            <span class="custom-control-indicator"></span>
            Cave
        </label>
        <label for="form2" class="custom-control custom-checkbox">
            <input id="form2" type="checkbox" class="custom-control-input" name="filter_grenier">
            <span class="custom-control-indicator"></span>
            Grenier
        </label>
        <label for="form3" class="custom-control custom-checkbox">
            <input id="form3" type="checkbox" class="custom-control-input"  name="filter_ascenseur">
            <span class="custom-control-indicator"></span>
            Ascenseur
        </label>
        <label for="form4" class="custom-control custom-checkbox">
            <input id="form4" type="checkbox" class="custom-control-input"   name="filter_balcon">
            <span class="custom-control-indicator"></span>
            Balcon
        </label>

        <label for="form5" class="custom-control custom-checkbox">
            <input id="form5" type="checkbox" class="custom-control-input" name="filter_place_parking">
            <span class="custom-control-indicator"></span>
            place de parking
        </label>-->

        <!-- Checkbox -->
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="filter_cave" name="filter_cave">
            <label class="form-check-label" for="filter_cave">Cave</label>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="filter_grenier" name="filter_grenier">
            <label class="form-check-label" for="filter_grenier">Grenier</label>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="filter_ascenseur" name="filter_ascenseur">
            <label class="form-check-label" for="filter_ascenseur">Ascenceur</label>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="filter_balcon" name="filter_balcon">
            <label class="form-check-label" for="filter_balcon">Balcon</label>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="filter_place_parking" name="filter_place_parking">
            <label class="form-check-label" for="filter_place_parking">Place de parking</label>
        </div>

        <div class="text-center" style="margin-top: 20px;">
            <input type="submit" name="search_filtre" value="Rechercher" class="btn btn-dark">
        </div>
    </form>
</div>