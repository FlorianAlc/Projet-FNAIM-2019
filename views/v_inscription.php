<?php
ob_start();

if (isset($_SESSION['id'])):
?>
    <div style='padding-top: 10%'>
        <center>
            <h1><strong>Vous êtes connecté</strong></h1><br>
        </center>
    </div>";

    <div style='padding-bottom: 30%'>
        <form method ='post' action='index.php?lien=inscription'>
            <center>
                <input style='background-color: black' class="btn" type='submit' value ='Déconnexion' name='deco'>
            </center>
        </form>
    </div>
<?php
    if (isset($_POST['deco'])):
        session_destroy();
        header("index.php?lien=accueil");
    endif;
else:
?>
    <div class="container mt-5">

        <div class="row mb-3">
            <div class="col">
                <h2>Formulaire d'inscription</h2>
            </div>
        </div>

        <form method="post" action="index.php?lien=inscription">

            <div class="row mb-4">
                <div class="col">
                    <div class="md-form">
                        <input type="text" name="prenom" id="form2" class="form-control" required>
                        <label for="form2" class="">Prénom</label>
                    </div>
                    <div class="md-form">
                        <input type="text" name="nom" id="form1" class="form-control" required>
                        <label for="form1" class="">Nom</label>
                    </div>
                    <div class="md-form">
                        <input type="email" name="email" id="form3" class="form-control" required>
                        <label for="form3" class="">Email</label>
                    </div>
                </div>

                <div class="col">
                    <div class="md-form">
                        <input type="password" name="password" id="form4" class="form-control" required>
                        <label for="form34" class="">Password</label>
                    </div>
                    <div class="md-form">
                        <input id="form5" type="tel" class="form-control" name="phone" length="10" required>
                        <label for="form5">Telephone</label>
                    </div>
                    <div class="md-form">
                        <input type="text" name="departement" id="form4" class="form-control" required>
                        <label for="form34" class="">Departement</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="md-form">
                        <select name="gender" class="custom-select" id="form6">
                            <option selected>Genre</option>
                            <option name="gender" value="Male">Homme</option>
                            <option name="gender" value="Female">Femme</option>
                            <option name="gender" value="Other">Autre</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="date" id="form7" name="bday" required>
                        <label for="form7">Date de naissance</label>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col">
                    <label for="form8" class="custom-control custom-checkbox">
                        <input name="cd" id="form8" type="checkbox" class="custom-control-input" required>
                        <span class="custom-control-label"> Vous acceptez les conditions d'utilisation, la politique de confidentialité et l'utilisation de cookies.</span>
                    </label>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <div class="form-inline">
                        <a href="index.php?lien=connexion">
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#connexion">Connexion</button>
                        </a>
                        <button style='background-color: #f8d61e' type="submit" name="inscrire" class="btn " data-toggle="modal" data-target="#inscription">Inscription</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
endif;

if (isset($_POST['inscrire'])):
    $tab = array();
    $tab['nom'] = "'".$_POST['nom']."'";
    $tab['prenom'] = "'".$_POST['prenom']."'";
    $tab['email'] = "'".$_POST['email']."'";
    $tab['telephone'] = "'".$_POST['phone']."'";
    $tab['password'] = "'".sha1($_POST['password'])."'";
    $tab['sexe'] = "'".$_POST['gender']."'";
    $tab['date_naissance'] = "'".$_POST['bday']."'";
    $tab['droits'] = "'user'";
    $tab['date_inscription'] = "'".date("Y-m-d")."'";
    $tab['departement'] = (int)$_POST['departement'];
    $tab['statut'] = 1;
    $unControleur->insertclient($tab);
?>
    <center>
        <div style="background-color:#00C851" id="info4" class="notification">
            <span>
                <i class="fa fa-check" aria-hidden="true"></i>
                Vous êtes inscrit !
            </span>
        </div>
    </center>
<?php
endif;
?>

<!-----alertG------>
<script>
    setTimeout('cacheDiv4()', 10000);

    function cacheDiv4() {
        $("#info4").hide("slow");
    }
</script>

<style type="text/css">
    .notification {
    display: block;
    padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 40px;
        padding-top: 40px;
        position: fixed;
        top: 10%;
        color: white;
        right: auto;
        left: auto;
        border-radius: 4px;
    }
</style>

<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>