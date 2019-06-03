<?php
ob_start();

if (isset($_SESSION["id"])):
?>
    <div class="container">
        <div class="row" style="padding: 10% 0;">
            <div class="col">

                <form method="post">
                    <table class="table table-bordered table-user-information">
                        <tbody>
                            <tr>
                                <td><strong>Prénom :</strong></td>
                                <td>
                                    <input class="form-control" type="text"  value="<?= $_SESSION["prenom"] ; ?>" name="prenom">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Nom :</strong></td>
                                <td>
                                    <input class="form-control" type="text" value="<?= $_SESSION["nom"] ; ?>" name="nom">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Email :</strong></td>
                                <td>
                                    <input class="form-control" type="email" value="<?= $_SESSION["email"] ; ?>" name="email">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Date de naissance :</strong></td>
                                <td>
                                    <input class="form-control" type="date" value="<?= $_SESSION["date_naissance"] ; ?>" name="bday">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Genre :</strong></td>
                                <td>
                                    <select class="custom-select" name="gender">
                                        <option selected><?= $_SESSION["sexe"] ; ?></option>
                                        <option name="gender" value="homme">Homme</option>
                                        <option name="gender" value="femme">Femme</option>
                                        <option name="gender" value="autre">Autre</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Telephone :</strong></td>
                                <td>
                                    <input class="form-control" type="tel" value="<?= $_SESSION["telephone"] ; ?>" name="phone">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Département :</strong></td>
                                <td>
                                    <input class="form-control" type="text" value="<?= $_SESSION["departement"] ; ?>" name="departement">
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Date d'inscription :</strong></td>
                                <td><strong><?=$_SESSION["date_inscription"]; ?></strong></td>
                            </tr>

                            <tr>
                                <td><strong>Password :</strong></td>
                                <td>
                                    <input  class="form-control" id="pass" type="password" name="password"  required>
                                    <p class="text-muted mt-2">Confirmer avec votre PASSWORD ou changer le.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <a href="index.php?lien=profil">
                            <button type="button" class="btn btn-dark">Annuler</button>
                        </a>
                        <input style="background-color: dodgerblue; color: white;" class="btn" type="submit" value ="Enregistrer les modifications" name ="enregModif">
                    </div>
                </form>

            </div>
        </div>
     </div>
<?php
else:
    require "views/templates/v_info_connexion.php";
endif;
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
            padding: 20px 30px;
            margin: 0 20px;
            position: fixed;
            top: 8%;
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