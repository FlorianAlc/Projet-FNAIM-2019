<nav class="navbar navbar-expand-lg navbar-light">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php?lien=accueil">
        <img src="img/logos/logo_FNAIM_large.png" alt="logo de la fnaim" style="height: 35px;"/>
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?lien=biens">Biens immobiliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?lien=visites">Visites</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?lien=a_propos">A propos</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <form method="post" action="index.php?lien=recherche" class="form-inline mr-5" >
                    <i class="fa fa-search" aria-hidden="true"  style="margin-right: 12px;"></i>
                    <input class="form-control"  style="padding: 4px 10px;"type="text" name="search" placeholder="Rechercher">
                    <a style="display: none" href="index.php?lien=recherche">
                        <input type="submit" name="rechercher" value="Rechercher">
                    </a>
            </form>

            <li class="nav-item form-inline">
                <i class=" fa fa-2x fa-user-circle" aria-hidden="true"></i>
                <a class="nav-link" href="index.php?lien=profil">
                    <strong>
<?php
    if (isset($_SESSION["id"])) { echo ucfirst($_SESSION["prenom"])." ".strtoupper($_SESSION["nom"]); }
    else { echo "Mon compte"; }
?>
                    </strong>
                </a>
            </li>
        </ul>
    </div>
    <!-- Collapsible content -->

</nav>