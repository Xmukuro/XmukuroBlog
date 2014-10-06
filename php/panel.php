<?php



    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'nouvel article' )

        {
            echo    '<h1>Nouvel article -- <span id="articleNotif"></span></h1>';
            echo    '<input id="articleTitle" class="form-control input-lg" type="text" placeholder="Titre de L\'article"> ';
            echo    "
                    <form method='post' action=''>
                        <textarea id='articleEditor' name='articleEditor' rows='10' cols='80'></textarea>
                    </form>
                    ";
            echo    "<div id='reponse'></div>";
        }
        elseif($_GET['action'] == 'settings' )
        {
            //afficher les options spécifique a l'utilisateur;
        }
        else
        {
            //action est vide
        }
    }
?>