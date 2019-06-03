<?php
ob_start();

if (isset($_SESSION['id'])):
?>
    <div class="text-center" style="padding-top: 10%">
        <h1>Vous êtes connecté</h1>
    </div>

    <div>
        <form method ="post" action="index.php?lien=connexion">
            <div class="text-center">
                <input class="btn btn-dark" type="submit" value ="Déconnexion" name="deco">
            </div>
        </form>
    </div>
<?php
    if (isset($_POST['deco'])):
        session_destroy();
        header("Refresh:0");
    endif;
else:
?>
    <div class="container">
        <div class="row mt-5">
            <div class="col"></div>

            <div class="col-8 col-md-6 col-lg-4 ">
                <div class="text-center">
                    <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                    <h1><strong>Connexion</strong></h1>
                </div>

                <form method="post" action="index.php?lien=connexion">

                    <!-- Email -->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix" aria-hidden="true"></i>
                        <input type="email" id="form91" class="form-control" name="email" required>
                        <label for="form91" data-error="wrong" data-success="right">E-mail</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <i class="fa fa-unlock-alt  prefix" aria-hidden="true"></i>
                        <input type="password" id="form92" class="form-control" name="password" required>
                        <label for="form92" data-error="wrong" data-success="right">Password</label>
                    </div>

                    <div class="text-center mt-5">
                        <a href="index.php?lien=accueil">
                            <button type="button" class="btn btn-dark">Accueil</button>
                        </a>
                        <input style="background-color:#f8d61e; color: black;" name="valider" value="Connexion" type="submit" class="btn">
                    </div>
                </form>
            </div>

            <div class="col"></div>
        </div>
    </div>
<?php
endif;

if(isset($_POST['valider']))
{
    if(!$result)
    {
        echo "<div class='text-center'>
                <div style=\" background-color: #ff4444\" id=\"info1\" class=\"notification\">
                    <span>
                        <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                        Mauvais identifiant ou mot de passe.
                    </span>
                </div>
            </div>";
    }
    else
    {
        echo "<div class='text-center'>
                <div style=\" background-color:#00C851\" id=\"info2\" class=\"notification\">
                    <span>
                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                        Vous êtes connecté.
                    </span>
                </div>
            </div>";

        $_SESSION["id"] = $result['id_personne'];
        $_SESSION["nom"] = $result['nom'];
        $_SESSION["prenom"] = $result['prenom'];
        $_SESSION["email"] = $result['email'];
        $_SESSION["telephone"] = $result['telephone'];
        $_SESSION["password"] = $result['password'];
        $_SESSION["sexe"] = $result['sexe'];
        $_SESSION["date_naissance"] = $result['date_naissance'];
        $_SESSION['statut'] = $result['statut'];

        // Si l'utilisateur est un client
        if($_SESSION['statut'] == 1)
        {
            foreach ($resultclient as $value)
            {
                if ($value['id_personne'] == $result['id_personne'])
                {
                    $departement = $value['departement'];
                    $dateInscription = $value['date_inscription'];
                    $_SESSION['departement'] = $departement;
                    $_SESSION["date_inscription"] = $dateInscription;
                }
            }
        }

        // Si l'utilisateur est un commercial
        else if ($_SESSION['statut'] == 2)
        {
            foreach ($resultcomercial as $value)
            {
                if ($value['id_personne'] == $result['id_personne'])
                {
                    $perimetreaction = $value['perimetre_action'];
                    $dateembauche = $value['date_embauche'];
                    $nbvisite = $value['nb_visite'];
                    $_SESSION['perimetre_action'] = $perimetreaction;
                    $_SESSION["date_embauche"] = $dateembauche;
                    $_SESSION['nb_visite'] = $nbvisite;
                }
            }
        }
    }
}
?>

<!-----alertR------>
<script>
    setTimeout('cacheDiv1()', 10000);
    function cacheDiv1()
    {
        $("#info1").hide("slow");
    }
</script>

<!-----alertG------>
<script>
    setTimeout('cacheDiv2()', 10000);
    function cacheDiv2()
    {
        $("#info2").hide("slow");
    }
</script>

<style type="text/css">
    .notification {
        display: block;
        padding: 30px;
        margin: 10px;
        position: fixed;
        top: 15%;
        color: white;
        right: auto;
        left: auto;
        border-radius: 5px;
    }
</style>

<?php
$contenu = ob_get_clean();
require 'views/templates/main.php';
?>