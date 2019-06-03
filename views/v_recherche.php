<?php
ob_start();

if ($result):
?>

    <div class="container-fluid">
        <h3>Résultat de la recherche :</h3>
    </div>

<?php else: ?>

    <div class="container-fluid text-center" style="margin-top: 15%;">
        <h1>0 Résultat trouvé</h1>
        <br>
        <h4>réessayer</h4>
    </div>

<?php
endif;

$contenu = ob_get_clean();
require 'views/templates/main.php';
?>