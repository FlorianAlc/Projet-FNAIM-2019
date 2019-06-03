<?php ob_start(); ?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">
<?php
                if (isset($_SESSION['id_utilisateur'])):
                    echo "<p>Bienvenue, ".$_SESSION['nom_de_compte']." !</p>";
                else:
                    echo "<p>Bienvenue sur la FNAIM.</p>";
                endif;
?>
            </h1>

            <p class="lead">Nous vous aidons à trouver le bien immobiliers qui satisfera à vos attentes.</p>
            <hr class="my-4">

            <a class="btn btn-success btn-lg" href="index.php?lien=biens" role="button">Voir nos produits</a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/photo_carousel/cuisine.jpg" class="d-block w-100" alt="cuisine lumineuse">
                </div>

                <div class="carousel-item">
                    <img src="img/photo_carousel/maison.jpg" class="d-block w-100" alt="grande maison">
                </div>

                <div class="carousel-item">
                    <img src="img/photo_carousel/salon.jpg" class="d-block w-100" alt="salon spacieux">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>