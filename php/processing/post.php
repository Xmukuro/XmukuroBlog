<?php
    require_once('database.php');

    if(isset($_POST['action']))
    {
        if($_POST['action'] == 'newarticle')
        {
            if( isset($_POST['article']) && isset($_POST['articleauthor']) && isset($_POST['articlesince']) && isset($_POST['articletitle']) && $_POST['action'])
            {
                $article        = addslashes($_POST['article']);
                $articletitle   = htmlspecialchars($_POST['articletitle'] , ENT_QUOTES);
                $articleauthor  = htmlspecialchars($_POST['articleauthor'], ENT_QUOTES);
                $articlesince   = htmlspecialchars($_POST['articlesince'] , ENT_QUOTES);

                $result = $craftblog->query("INSERT INTO article(authorid,articletitle,articlesince,article) VALUES((SELECT userid FROM users WHERE username = '$articleauthor'),'$articletitle','$articlesince','$article') ");
                if($result)
                {
                    echo 'its ok';
                    //its ok
                }
                else
                {
                    echo 'its NOT ok';
                    //its not
                }
            }
        }
        elseif($_POST['action'] == 'connexion')
        {
            if(isset($_POST['username']) && isset($_POST['usermail']) && isset($_POST['userpass']) && isset($_POST['userrepeatpass'])){}
        }
        elseif($_POST['action'] == 'register')
        {
            if(isset($_POST['username']) && isset($_POST['usermail']) && isset($_POST['userpass']) && isset($_POST['userrepeatpass']))
            {
                if($_POST['userpass'] != $_POST['userrepeatpass'])
                {
                    echo 'not the same pw';
                }
                else
                {
                    $result = $craftblog->query("SELECT username FROM users WHERE 1;")->fetchAll();
                    $alredyused = null;

                    echo '<pre>';
                    print_r($result);
                    echo '</pre>';

                    foreach($result as $curresult)
                    {
                        if(in_array($_POST['username'], $curresult))
                        {
                            $alredyused = true;
                            //alredy used username
                            echo 'alredy used';
                            break;
                        }
                        else{$alredyused=false;}
                    }

                    if(!$alredyused)
                    {
                        $username    = $_POST['username'];
                        $usermail   = $_POST['usermail'];
                        $userpass   = sha1(md5($_POST['userpass']) . $securesalt);

                        $craftblog->query(" INSERT INTO users(username,usermail,userpass,userrank,usersince)
                                            VALUES ('$username','$usermail','$userpass',9,CURDATE());
                                          ");
                        echo 'done.';
                    }
                }
            }
            else
            {

            }
        }
    }