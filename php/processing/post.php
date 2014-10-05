<?php
echo '<pre>';

    if(isset($_POST['action']) && ($_POST['action'] == 'newarticle'))
    {
        if( isset($_POST['article']) && isset($_POST['articleauthor']) && isset($_POST['articlesince']) && isset($_POST['articletitle']) && $_POST['action'])
        {



            echo $_POST['article'];      //DEBUG
            echo $_POST['articletitle']; //DEBUG
            echo $_POST['articleauthor'];//DEBUG
            echo $_POST['articlesince']; //DEBUG

            $article        = htmlspecialchars($_POST['article']      , ENT_QUOTES);
            $articletitle   = htmlspecialchars($_POST['articletitle'] , ENT_QUOTES);
            $articleauthor  = htmlspecialchars($_POST['articleauthor'], ENT_QUOTES);
            $articlesince   = htmlspecialchars($_POST['articlesince'] , ENT_QUOTES);

            include_once("./database.php");

            $result = $craftblog->query("INSERT INTO article(authorid,articletitle,articlesince,article) VALUES((SELECT userid FROM users WHERE username = '$articleauthor'),'$articletitle','$articlesince','$article') ");
            if($result)
            {
                echo "done.";
            }

        }
    }
echo '</pre>';