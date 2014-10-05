<!DOCTYPE html>
<html lang="fr">
<?php include_once('./php/processing/database.php');?>
<?php include_once('./php/head.php');?>
<body>
<?php include_once('./php/header.php');?>
<?php include_once('./php/inscription.php');?>
<?php include_once('./php/connexion.php');?>




<main>
    <div class="col-md-12">

        <?php

        if(isset($craftblog))
        {
            if(isset($_GET['id']))
            {
                $urlid = $craftblog->real_escape_string($_GET['id']);
                $result = $craftblog->query("SELECT articletitle,article FROM article WHERE articleid= '$urlid'")->fetch_assoc();
                echo '<h1>' . $result['articletitle'] . '</h1><br/><h2>' . $result['article'] . '</h2>'; //design a faire ici
            }
            elseif(isset($_GET['title']))
            {
                $urltitle = $craftblog->real_escape_string($_GET['title']);
                $result = $craftblog->query("SELECT articletitle,article FROM article WHERE articletitle= '$urltitle'")->fetch_assoc();
                echo '<h1>' . $result['articletitle'] . '</h1><br/><h2>' . $result['article'] . '</h2>'; //design a faire ici
            }
            else
            {
                //l'article php n'a pas de paramètres valables.
            }
        }
        else
        {
            //Message d'erreur impossible d'acceder a la base de donnée
        }
        ?>
    </div>
</main>

<div class="separator" style="margin-top: 20px;"></div>
<?php include_once('./php/footer.php');?>
</body>
</html>