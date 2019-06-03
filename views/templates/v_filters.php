<div class="text-center">

    <h1><i class="fa fa-2x fa-user-circle" aria-hidden="true"></i></h1>
<?php
    if (isset($_SESSION['id']))
    {
        echo "<h4><strong>" . $_SESSION["prenom"] . " " . $_SESSION["nom"] . "</strong></h4><br>";
        echo "<form method ='post' action=''>";
        echo "<input style='background-color: #f8d61e' class=\"btn \" type='submit' value = 'Déconnexion' name = 'deco'>";
        echo "</form>";

        if (isset($_POST['deco']))
        {
            session_destroy();
            header("Refresh:0");
        }
    }
    else
    {
        echo "<h4><strong>Mon Compte</strong></h4>

              <br>
              
              <div style='margin-bottom:12px;'>
                     <a href=\"index.php?lien=connexion\">
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                    </a>
              </div>
              
              <div>
                    <a href=\"index.php?lien=inscription\">
                        <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#inscription\">Inscription</button>
                    </a>
              </div>";
              
    }
?>
</div>

<br><br>

<form action="index.php?lien=biens" method="post">
    <!-- Prix minimum -->
    <div class="form-group">
        <label for="filter_min_price">Prix minimum (euro)</label>
        <input type="number" class="form-control" id="filter_min_price" name="filter_min_price" placeholder="...">
    </div>

    <!-- Prix maximum -->
    <div class="form-group">
        <label for="filter_max_price">Prix maximum (euro)</label>
        <input type="number" class="form-control" id="filter_max_price" name="filter_max_price" placeholder="...">
    </div>

    <!-- Ville -->
    <div class="form-group">
        <label for="filter_city">Ville</label>
        <input type="text" class="form-control" id="filter_city" name="filter_city" placeholder="...">
    </div>

    <!-- Nombre de pièces -->
    <div class="form-group">
        <label for="filter_rooms_number">Nombre de pièces</label>
        <input type="number" class="form-control" id="filter_rooms_number" name="filter_rooms_number" placeholder="...">
    </div>

    <!-- Surface -->
    <div class="form-group">
        <label for="filter_surface">Surface (m²)</label>
        <input type="number" class="form-control" id="filter_surface" name="filter_surface" placeholder="...">
    </div>

    <br>

    <div class="text-center">
        <button type="submit" class="btn btn-dark" value="rechercher" name="rechercher">Rechercher</button>
    </div>
</form>