<?php
include_once('./php/processing/database.php');

if(isset($craftblog))
{
    $maxarticles= 6;
    $image = 'http://www.frenchtroll.com/wp-content/uploads/images/lol-2_489.jpg';

    //je met dans result respectivement articletitle,article,authorid ensuite avec l'authorid je récup le nom du mec.
    $result = $craftblog->query("SELECT articletitle,article,authorid FROM article LIMIT $maxarticles")->fetchAll();

        echo '<pre>';
        print_r($result);
        echo '</pre>';

        foreach($result as $currresult)
        {
            $author = $craftblog->query("SELECT username FROM users WHERE userid='$currresult[authorid]'")->fetchAll();
            $author = $author[0];

            echo"    <div class='article-main' style='margin-top: 20px;'>
                        <div class='media article'>
                            <a class='pull-left' href='#'>
                                <img class='media-object' src='$image' alt='photo d un squelette' style='width: 250px;'>
                            </a>
                            <div class='media-body'>
                                <h4 class='media-heading'>$currresult[articletitle]</h4>
                                $currresult[article]
                            </div>
                            <div class='media-author'>$author[username]</div>
                        </div>
                     </div>
                ";
        }
}
else
{
   echo(''); //Message d'erreur impossible d'acceder a la base de donnée
}