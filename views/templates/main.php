<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FNAIM</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="font/fontawesome-free-5.8.1-web/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="font/roboto">
    <!-- Custum style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php
// Inclusion de la navbar
require("views/templates/v_navbar.php");

// Inclusion du contenu
echo $contenu;

// Inclusion du footer
require("views/templates/v_footer.php");
?>

<!-- Custum scripts -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Popper -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Material Design Bootstrap -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>