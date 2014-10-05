<!DOCTYPE html>
<html lang="fr">
<?php include_once('./php/head.php');?>
<body>
<?php include_once('./php/header.php');?>
<?php include_once('./php/inscription.php');?>
<?php include_once('./php/connexion.php');?>




<main>
    <div class="col-md-12">
        <?php
        //ici tu affichera les derniers articles ou alors les articles dont le paramètre est passé en url.
        if(isset($_GET['action']))
        {
        $action = $_GET['action'];
        include_once("./php/panel.php");
        }
        else
        {
            echo 'pas de get action afficher le panel d\'option';
            //pas de parametres donnés.
        }
        ?>
    </div>
</main>

<div class="separator" style="margin-top: 20px;"></div>
<?php include_once('./php/footer.php');?>
</body>
</html>